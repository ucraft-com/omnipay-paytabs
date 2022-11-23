<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Message\Request;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\PayTabs\Message\Response\RetrieveTransactionResponse;
use Omnipay\PayTabs\Traits\ParamsTrait;

/**
 * Class RetrieveTransactionRequest
 *
 * @method RetrieveTransactionResponse send()
 *
 * @package Omnipay\PayTabs\Message\Request
 */
class RetrieveTransactionRequest extends AbstractRequest
{
    use ParamsTrait;

    /**
     * @inheritDoc
     */
    public function getData()
    {
        $this->validate(
            'profile_id',
            'tran_ref',
        );

        $data = [];
        $data['profile_id'] = $this->getProfileId();
        $data['tran_ref'] = $this->getTransactionReference();

        return $data;
    }

    /**
     * Get endpoint to retrieve.
     *
     * @return string
     */
    protected function getEndpoint() : string
    {
        if ($this->getTestMode()) {
            return 'https://secure-global.paytabs.com/payment/query';
        }

        return 'https://secure.paytabs.com/payment/query';
    }

    /**
     * @inheritDoc
     */
    public function sendData($data) : ResponseInterface
    {
        try {
            $httpResponse = $this->httpClient->request(
                $this->getHttpMethod(),
                $this->getEndpoint(),
                ['Authorization' => $this->getServerKey()],
                json_encode($data)
            );

            return $this->response = new RetrieveTransactionResponse($this, $httpResponse->getBody()->getContents(), $httpResponse->getHeaders());
        } catch (Throwable $ex) {
            return new RetrieveTransactionResponse($this, ['message' => $ex->getMessage(), 'code' => (string) $ex->getCode()]);
        }
    }
}
