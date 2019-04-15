<?php
$dir = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ModelExtensionPaymentPaynlEbon extends Pay_Model
{
    protected $_paymentOptionId = 998;
    protected $_paymentMethodName = 'paynl_ebon';

    public function getLabel()
    {
        return parent::getLabel();
    }
}