<?php

namespace UPC;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/http-client.php';
require __DIR__ . '/sign.php';

use UPC\HttpClient;
use UPC\Sign;
use Gamegos\JWS\JWS;

/**
 * @property string MerchantID
 * @property string TerminalID
 * @property int PurchaseTime
 * @property string OrderID
 * @property string Currency
 * @property string TotalAmount
 */
interface UpcPaymentI
{
    public function toArray();
}

