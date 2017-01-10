<?php

namespace Omnipay\Datatrans;

use Omnipay\Common\AbstractGateway;

/**
 * Datatrans Gateway
 *
 * @TODO: add optional fields
 */
class Gateway extends AbstractDatatransGateway
{
    public function getName()
    {
        return 'Datatrans';
    }

    /**
     * Start a purchase request
     *
     * @param array $parameters array of options
     * @return \Omnipay\Datatrans\Message\PurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Datatrans\Message\PurchaseRequest', $parameters);
    }

    /**
     * Complete a purchase
     *
     * @param array $parameters
     * @return \Omnipay\Datatrans\Message\CompletePurchaseRequest
     */
    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Datatrans\Message\CompletePurchaseRequest', $parameters);
    }
}
