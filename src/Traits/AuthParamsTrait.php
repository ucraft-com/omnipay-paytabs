<?php

declare(strict_types = 1);

namespace Omnipay\PayTabs\Traits;

trait AuthParamsTrait
{
    /**
     * Get merchant's profile id.
     *
     * @return string
     */
    public function getProfileId() : string
    {
        return (string) $this->getParameter('profile_id');
    }

    /**
     * Sets merchant's profile id.
     *
     * @param string $value
     *
     * @return \Omnipay\PayTabs\Message\Request\PurchaseRequest
     */
    public function setProfileId(string $value) : static
    {
        return $this->setParameter('profile_id', $value);
    }

    /**
     * Get server key.
     *
     * @return string
     */
    public function getServerKey() : string
    {
        return $this->getParameter('server_key');
    }

    /**
     * Sets server key.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setServerKey(string $value) : static
    {
        return $this->setParameter('server_key', $value);
    }

    /**
     * Get client key.
     *
     * @return string
     */
    public function getClientKey() : string
    {
        return $this->getParameter('client_key');
    }

    /**
     * Sets client key.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setClientKey(string $value) : static
    {
        return $this->setParameter('client_key', $value);
    }
}
