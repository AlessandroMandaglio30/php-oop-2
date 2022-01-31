<?php

class PremiumUser extends User
{

    public function addToCart($_product)
    {
        $_product->setDiscount($this->_discount);
        $this->cart[] = $_product;
    }
    public function __construct()
    {
        $this->_discount = 20;
    }
}
