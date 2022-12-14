<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Message\Response;

use Omnipay\PayTabs\Message\Request\PurchaseRequest;

/**
 * Class PurchaseResponse
 *
 * @method PurchaseRequest getRequest()
 *
 * @package Omnipay\PayTabs\Message\Response
 */
class PurchaseResponse extends AbstractResponse
{
    /** Authorised success status code  */
    public const AUTH_STATUS_SUCCESS = 'A';

    /**
     * This is the final result if there is no redirection (for example 3D).
     *
     * {@inheritdoc}
     */
    public function isSuccessful() : bool
    {
        return $this->getPaymentStatus() === self::AUTH_STATUS_SUCCESS;
    }

    /**
     * Response Message
     *
     * @return null|string A response message from the payment gateway
     */
    public function getMessage() : ?string
    {
        if (isset($this->data['payment_result'])) {
            return $this->data['payment_result']['response_message'] ?? null;
        }

        return $this->data['message'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function isRedirect() : bool
    {
        return isset($this->data['redirect_url']);
    }

    /**
     * Get the reference of the transaction.
     *
     * @return string|null
     */
    public function getTransactionReference() : ?string
    {
        return $this->data['tran_ref'] ?? null;
    }

    /**
     * Get payment info.
     *
     * @return array
     */
    public function getPaymentInfo() : array
    {
        return $this->data['payment_info'] ?? [];
    }

    /**
     * Get customer's token.
     *
     * @return string|null
     */
    public function getToken() : ?string
    {
        return $this->data['token'] ?? null;
    }

    /**
     * Get the payment status.
     *
     * @return string|null
     */
    public function getPaymentStatus() : ?string
    {
        if (isset($this->data['payment_result'])) {
            return $this->data['payment_result']['response_status'] ?? null;
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function getRedirectUrl() : string
    {
        return $this->data['redirect_url'];
    }
}
