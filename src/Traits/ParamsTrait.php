<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Traits;

trait ParamsTrait
{
    /**
     * Get cart id.
     *
     * @return string
     */
    public function getCartId() : string
    {
        return (string) $this->getParameter('cart_id');
    }

    /**
     * Set cart id.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCartId(string $value) : static
    {
        return $this->setParameter('cart_id', $value);
    }

    /**
     * Get the payment currency code.
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return (string) $this->getParameter('cart_currency');
    }

    /**
     * Set the payment currency code.
     *
     * @param $value
     *
     * @return $this
     */
    public function setCurrency($value) : static
    {
        return $this->setParameter('cart_currency', strtolower($value));
    }

    /**
     * Get the payment amount.
     *
     */
    public function getAmount()
    {
        return (string) $this->getParameter('cart_amount');
    }

    /**
     * Set the payment amount.
     *
     * @return $this
     */
    public function setAmount($value)
    {
        return $this->setParameter('cart_amount', $value);
    }

    /**
     * Get the cart description.
     *
     * @return string
     */
    public function getCartDescription() : string
    {
        return $this->getParameter('cart_description');
    }

    /**
     * Set the cart description.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCartDescription(string $value) : static
    {
        return $this->setParameter('cart_description', $value);
    }

    /**
     * Get the page language.
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return (string) $this->getParameter('paypage_lang');
    }

    /**
     * Set the page language.
     *
     * @param string $value
     *
     * @return static
     */
    public function setLanguage(string $value) : static
    {
        return $this->setParameter('paypage_lang', $value);
    }

    /**
     * Get customer's name.
     *
     * @return string
     */
    public function getCustomerName() : string
    {
        return $this->getParameter('name');
    }

    /**
     * Set customer's name.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCustomerName(string $value) : static
    {
        return $this->setParameter('name', $value);
    }

    /**
     * Get customer's email.
     *
     * @return string
     */
    public function getCustomerEmail() : string
    {
        return $this->getParameter('email');
    }

    /**
     * Set customer's email.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCustomerEmail(string $value) : static
    {
        return $this->setParameter('email', $value);
    }

    /**
     * Get customer's address.
     *
     * @return string
     */
    public function getCustomerAddress() : string
    {
        return $this->getParameter('street1');
    }

    /**
     * Set customer's address
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCustomerAddress(string $value) : static
    {
        return $this->setParameter('street1', $value);
    }

    /**
     * Get customer's city.
     *
     * @return string
     */
    public function getCustomerCity() : string
    {
        return $this->getParameter('city');
    }

    /**
     * Set customer's city.
     *
     * @return $this
     */
    public function setCustomerCity(string $value) : static
    {
        return $this->setParameter('city', $value);
    }

    /**
     * Get customer's country.
     *
     * @return string
     */
    public function getCustomerCountry() : string
    {
        return $this->getParameter('country');
    }

    /**
     * Set customer's country.
     *
     * @return $this
     */
    public function setCustomerCountry(string $value) : static
    {
        return $this->setParameter('country', $value);
    }

    /**
     * Get customer's ip address.
     *
     * @return string
     */
    public function getCustomerIpAddress() : string
    {
        return $this->getParameter('ip');
    }

    /**
     * Set customer's ip address.
     *
     * @return $this
     */
    public function setCustomerIpAddress(string $value) : static
    {
        return $this->setParameter('ip', $value);
    }

    /**
     * Get shipping name.
     *
     * @return string|null
     */
    public function getShippingName() : ?string
    {
        return $this->getParameter('shipping_name');
    }

    /**
     * Set shipping name.
     *
     * @return $this
     */
    public function setShippingName(?string $value) : static
    {
        return $this->setParameter('shipping_name', $value);
    }

    /**
     * Get shipping email.
     *
     * @return string|null
     */
    public function getShippingEmail() : ?string
    {
        return $this->getParameter('shipping_email');
    }

    /**
     * Set shipping email.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setShippingEmail(?string $value) : static
    {
        return $this->setParameter('shipping_email', $value);
    }

    /**
     * Get shipping phone.
     *
     * @return string|null
     */
    public function getShippingPhone() : ?string
    {
        return $this->getParameter('shipping_phone');
    }

    /**
     * Set shipping phone.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setShippingPhone(?string $value) : static
    {
        return $this->setParameter('shipping_phone', $value);
    }

    /**
     * Get shipping address.
     *
     * @return string|null
     */
    public function getShippingAddress() : ?string
    {
        return $this->getParameter('shipping_street1');
    }

    /**
     * Set shipping address.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setShippingAddress(?string $value) : static
    {
        return $this->setParameter('shipping_street1', $value);
    }

    /**
     * Get shipping city.
     *
     * @return string|null
     */
    public function getShippingCity() : ?string
    {
        return $this->getParameter('shipping_city');
    }

    /**
     * Set shipping city.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setShippingCity(?string $value) : static
    {
        return $this->setParameter('shipping_city', $value);
    }

    /**
     * Get shipping state.
     *
     * @return string|null
     */
    public function getShippingState() : ?string
    {
        return $this->getParameter('shipping_state');
    }

    /**
     * Set shipping state.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setShippingState(?string $value) : static
    {
        return $this->setParameter('shipping_state', $value);
    }

    /**
     * Get shipping country.
     *
     * @return string|null
     */
    public function getShippingCountry() : ?string
    {
        return $this->getParameter('shipping_country');
    }

    /**
     * Set shipping country.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setShippingCountry(?string $value) : static
    {
        return $this->setParameter('shipping_country', $value);
    }

    /**
     * Get shipping zip.
     *
     * @return string|null
     */
    public function getShippingZip() : ?string
    {
        return $this->getParameter('shipping_zip');
    }

    /**
     * Set shipping zip.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setShippingZip(?string $value) : static
    {
        return $this->setParameter('shipping_zip', $value);
    }

    /**
     * Get customer's details.
     *
     * @return array<string>
     */
    public function getCustomerDetails() : array
    {
        return [
            'name'    => $this->getCustomerName(),
            'email'   => $this->getCustomerEmail(),
            'street1' => $this->getCustomerAddress(),
            'city'    => $this->getCustomerCity(),
            'country' => $this->getCustomerCountry(),
            'ip'      => $this->getCustomerIpAddress(),
        ];
    }

    /**
     * Get shipping details.
     *
     * @return array<string>
     */
    public function getShippingDetails() : array
    {
        return [
            'name'    => $this->getShippingName(),
            'email'   => $this->getShippingEmail(),
            'phone'   => $this->getShippingPhone(),
            'street1' => $this->getShippingAddress(),
            'city'    => $this->getShippingCity(),
            'state'   => $this->getShippingState(),
            'country' => $this->getShippingCountry(),
            'zip'     => $this->getShippingZip(),
        ];
    }

    /**
     * Get the payment token.
     *
     * @return string|null
     */
    public function getPaymentToken() : ?string
    {
        return $this->getParameter('payment_token') ?? null;
    }

    /**
     * Set the payment token.
     *
     * @param string $value
     *
     * @return static
     */
    public function setPaymentToken(string $value) : static
    {
        return $this->setParameter('payment_token', $value);
    }

    /**
     * Get the return url.
     *
     * @return string|null
     */
    public function getReturnUrl() : string|null
    {
        return $this->getParameter('return');
    }

    /**
     * Set the return url.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setReturnUrl($value) : static
    {
        return $this->setParameter('return', $value);
    }

    /**
     * Get the callback url.
     *
     * @return string|null
     */
    public function getCallbackUrl() : ?string
    {
        return $this->getParameter('callback');
    }

    /**
     * Set the callback url.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCallbackUrl($value) : static
    {
        return $this->setParameter('callback', $value);
    }

    /**
     * Get the transaction reference.
     *
     * The transaction reference is the identifier generated by the remote
     * payment gateway.
     *
     * @return string
     */
    public function getTransactionReference() : string
    {
        return $this->getParameter('tran_ref');
    }

    /**
     * Set the transaction reference.
     *
     * @param $value
     *
     * @return $this
     */
    public function setTransactionReference($value)
    {
        return $this->setParameter('tran_ref', $value);
    }

    /**
     * Get the card token.
     *
     * @return string|null
     */
    public function getToken() : ?string
    {
        return $this->getParameter('token') ?? null;
    }
}
