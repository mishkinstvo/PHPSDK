<?php

namespace UPC;

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

