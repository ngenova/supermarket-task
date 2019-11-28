<?php

class Product
{
    private $stockCode;
    private $price;
    private $promoQuantity;
    private $promoPrice;

    public function __construct($stockCode, $price, $promoQuantity = null, $promoPrice = null)
    {
        $this->stockCode = $stockCode;
        $this->price = $price;
        $this->promoQuantity = $promoQuantity;
        $this->promoPrice = $promoPrice;
    }
}
