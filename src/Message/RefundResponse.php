<?php

namespace Omnipay\Square\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * Square Refund Response
 */
class RefundResponse extends AbstractResponse implements RedirectResponseInterface
{
    public function isSuccessful()
    {
        if ($this->data['status'] == 'success') {
            return true;
        } else {
            return false;
        }
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return true;
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return $this->getData();
    }

    public function getTransactionId()
    {
        return $this->data['transactionId'];
    }

    public function getTransactionReference()
    {
        return $this->data['referenceId'];
    }

    public function getTransaction()
    {
        return $this->transaction;
    }
}
