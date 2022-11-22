<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\NotificationInterface;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\PayTabs\Message\Request\PurchaseRequest;
use Omnipay\PayTabs\Message\Request\RetrieveTransactionRequest;
use Omnipay\PayTabs\Traits\AuthParamsTrait;
use Omnipay\PayTabs\Traits\ParamsTrait;

/**
 * PayTabs Gateway
 *
 * @method NotificationInterface acceptNotification(array $options = array())
 * @method RequestInterface authorize(array $options = array())
 * @method RequestInterface completeAuthorize(array $options = array())
 * @method RequestInterface capture(array $options = array())
 * @method RequestInterface refund(array $options = array())
 * @method RequestInterface fetchTransaction(array $options = [])
 * @method RequestInterface void(array $options = array())
 * @method RequestInterface createCard(array $options = array())
 * @method RequestInterface updateCard(array $options = array())
 * @method RequestInterface deleteCard(array $options = array())
 *
 * @package Omnipay\PayTabs
 */
class Gateway extends AbstractGateway
{
    use AuthParamsTrait,
        ParamsTrait;

    public const NAME = 'PayTabs';

    /**
     * @inheritDoc
     */
    public function getName() : string
    {
        return self::NAME;
    }

    /**
     * @inheritDoc
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase(array $options = []) : PurchaseRequest
    {
        return $this->createRequest(PurchaseRequest::class, $options);
    }

    /**
     * Retrieve the transaction.
     *
     * @param array $options
     *
     * @return \Omnipay\PayTabs\Message\Request\RetrieveTransactionRequest
     */
    public function retrieveTransaction(array $options = []) : RetrieveTransactionRequest
    {
        return $this->createRequest(RetrieveTransactionRequest::class, $options);
    }
}
