<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Message\Response;

use Omnipay\Common\Message\AbstractResponse as BaseAbstractResponse;
use Omnipay\Common\Message\RequestInterface;

abstract class AbstractResponse extends BaseAbstractResponse
{
    /**
     * @throws \JsonException
     */
    public function __construct(RequestInterface $request, $data)
    {
        parent::__construct($request, json_decode($data, true, 512, JSON_THROW_ON_ERROR));
    }

    /**
     * @inheritDoc
     */
    public function getMessage() : ?string
    {
        return $this->data['message'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getCode() : ?int
    {
        return $this->data['code'] ?? null;
    }
}
