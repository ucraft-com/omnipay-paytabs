<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Message\Request;

use Omnipay\Common\Message\AbstractRequest as BaseAbstractRequest;
use Omnipay\Common\Message\ResponseInterface;
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
     * @param mixed $data
     *
     * @return ResponseInterface
     */
    abstract public function sendData($data) : ResponseInterface;

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
}
