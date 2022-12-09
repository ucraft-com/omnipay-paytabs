<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Message\Response;

use Omnipay\PayTabs\Message\Request\RetrieveTransactionRequest;

/**
 * Class RetrieveTransactionResponse
 *
 * @method RetrieveTransactionRequest getRequest()
 *
 * @package Omnipay\PayTabs\Message\Response
 */
class RetrieveTransactionResponse extends AbstractResponse
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
     * @inheritDoc
     */
    public function getCode() : string
    {
        return $this->data['payment_result']['response_code'];
    }

    /**
     * @inheritDoc
     */
    public function getMessage() : string
    {
        return $this->data['payment_result']['response_message'];
    }

    /**
     * Get customer's token.
     *
     * @return string|null
     */
    public function getToken() : string|null
    {
        return $this->data['token'] ?? null;
    }

    /**
     * @return array
     */
    public function getPaymentInfo() : array
    {
        return $this->data['payment_info'] ?? [];
    }

    /**
     * @return string
     */
    public function getLastFour() : string
    {
        return substr(($this->data['payment_info']['payment_description'] ?? ''), -4);
    }

    /**
     * @return string|null
     */
    public function getCardScheme() : ?string
    {
        return $this->data['payment_info']['card_scheme'] ?? null;
    }

    /**
     * Get the payment status.
     *
     * @return string|null
     */
    public function getPaymentStatus() : string|null
    {
        if (isset($this->data['payment_result'])) {
            return $this->data['payment_result']['response_status'] ?? null;
        }

        return null;
    }

    /**
     * @return string|null
    */
    public function getTransactionReference() : ?string
    {
        return $this->data['tran_ref'] ?? null;
    }
}
