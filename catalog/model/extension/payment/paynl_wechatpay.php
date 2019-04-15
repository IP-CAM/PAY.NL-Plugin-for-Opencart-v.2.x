<?php
$dir = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ModelExtensionPaymentPaynlWechatpay extends Pay_Model
{
    protected $_paymentOptionId = 1978;
    protected $_paymentMethodName = 'paynl_wechatpay';

    public function getLabel()
    {
        return parent::getLabel();
    }
}