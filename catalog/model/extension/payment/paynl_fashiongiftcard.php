<?php
$dir = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ModelExtensionPaymentPaynlFashiongiftcard extends Pay_Model
{
    protected $_paymentOptionId = 1669;
    protected $_paymentMethodName = 'paynl_fashiongiftcard';

    public function getLabel()
    {
        return parent::getLabel();
    }
}