<?php

declare(strict_types=1);

namespace Omnipay\PayTabs\Message\Request;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\PayTabs\Message\Response\PurchaseResponse;
use Omnipay\PayTabs\Traits\AuthParamsTrait;
use Omnipay\PayTabs\Traits\ParamsTrait;
use Throwable;

/**
 * @method PurchaseResponse send()
 */
class RefundRequest extends AbstractRequest
{
    use ParamsTrait,
        AuthParamsTrait;

    /**
     * @inheritDoc
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate(
            'profile_id',
            'cart_id',
            'cart_currency',
            'cart_amount',
            'cart_description',
        );

        $data = [];
        $data['profile_id'] = $this->getProfileId();
        $data['tran_type'] = 'refund';
        $data['tran_class'] = 'ecom';
        $data['cart_id'] = $this->getCartId();
        $data['cart_currency'] = $this->getCurrency();
        $data['cart_amount'] = $this->getAmount();
        $data['cart_description'] = $this->getCartDescription();
        $data['tran_ref'] = $this->getTransactionReference();

        return $data;
    }

    /**
     * @inheritDoc
     */
    protected function getEndpoint(): string
    {
        if ($this->getTestMode()) {
            return 'https://secure-global.paytabs.com/payment/request';
        }

        return 'https://secure.paytabs.com/payment/request';
    }

    /**
     * @inheritDoc
     */
    public function sendData($data): ResponseInterface
    {
        try {
            $httpResponse = $this->httpClient->request(
                $this->getHttpMethod(),
                $this->getEndpoint(),
                ['Authorization' => $this->getServerKey()],
                json_encode($data)
            );

            return $this->response = new PurchaseResponse($this, $httpResponse->getBody()->getContents());
        } catch (Throwable $ex) {
            return new PurchaseResponse($this, ['message' => $ex->getMessage(), 'code' => (string)$ex->getCode()]);
        }
    }
}
