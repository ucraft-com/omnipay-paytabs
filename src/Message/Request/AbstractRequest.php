<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Message\Request;

use Omnipay\Common\Message\AbstractRequest as BaseAbstractRequest;
use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\PayTabs\Message\Response\PurchaseResponse;
use Omnipay\PayTabs\Traits\AuthParamsTrait;

/**
 * Base class of all Request classes
 */
abstract class AbstractRequest extends BaseAbstractRequest
{
    use AuthParamsTrait;

    /**
     * Get the request url.
     *
     * @return string
     */
    abstract protected function getEndpoint() : string;

    /**
     * Get HTTP Method.
     *
     * This is nearly always POST but can be over-ridden in subclasses.
     *
     * @return string
     */
    public function getHttpMethod() : string
    {
        return 'POST';
    }

    /**
     * @param string $data
     * @param array  $headers
     * @param string $responseClass
     *
     * @return AbstractResponse
     */
    protected function createResponse(
        string $data,
        array  $headers = [],
        string $responseClass = PurchaseResponse::class
    ) : AbstractResponse
    {
        return $this->response = new $responseClass($this, $data, $headers);
    }

    /**
     * @inheritDoc
     */
    public function sendData($data) : ResponseInterface
    {
        $httpResponse = $this->httpClient->request(
            $this->getHttpMethod(),
            $this->getEndpoint(),
            ['Authorization' => $this->getServerKey()],
            json_encode($data)
        );

        return $this->createResponse($httpResponse->getBody()->getContents(), $httpResponse->getHeaders());
    }
}
