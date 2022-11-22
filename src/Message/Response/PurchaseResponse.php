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
    public const AUTHORISED = 'Authorised';

    /**
     * This is the final result if there is no redirection (for example 3D).
     *
     * {@inheritdoc}
     */
    public function isSuccessful() : bool
    {
        return $this->getPaymentStatus() === self::AUTHORISED
            && !$this->getMessage();
    }

    /**
     * @inheritDoc
     */
    public function isRedirect() : bool
    {
        return isset($this->data['redirect_url']);
    }

    /**
     * Get the reference of the transaction .
     *
     * @return string|null
     */
    public function getTransactionReference() : null|string
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
    public function getToken() : string|null
    {
        return $this->data['token'] ?? null;
    }

    /**
     * Get the payment status.
     *
     * @return string|null
     */
    public function getPaymentStatus() : string|null
    {
        if (isset($this->data['payment_result'])) {
            return $this->data['payment_result']['response_message'] ?? null;
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
