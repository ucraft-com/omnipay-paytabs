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
    public const AUTHORISED = 'Authorised';

    /**
     * This is the final result if there is no redirection (for example 3D).
     *
     * {@inheritdoc}
     */
    public function isSuccessful()
    {

    }
}
