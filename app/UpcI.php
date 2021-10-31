<?php

namespace UPC;

interface UpcI
{
    public function signature(UpcPaymentData $data): string;

    public function tranState(UpcPaymentData $data, string $url);
}