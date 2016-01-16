<?php

class PayEx_Payments_Block_Form_PartPayment extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('payex/partpayment/form.phtml');
    }

    /**
     * Get Saved SSN from SSN extension
     * @return mixed
     */
    public function getPayexSSN()
    {
        return Mage::getSingleton('checkout/session')->getPayexSSN();
    }

    /**
     * Get Payment Fee
     * @return float
     */
    public function getPayexPaymentFee()
    {
        return (float) Mage::getModel('payex/payment_PartPayment')->getConfigData('paymentfee');
    }
}
