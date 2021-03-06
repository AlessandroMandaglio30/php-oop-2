<?php
require_once __DIR__ . "/premiumUser.php";

class User
{
    protected $username;
    protected $password;
    protected $email;
    protected $cart;
    protected $orders;
    protected $creditCards;
    protected $discount = 20;
    public function __construct($_username, $_password, $_email, $_creditCards = [], $_orders = [], $_cart = [])
    {
        $this->username = $_username;
        $this->password = $_password;
        $this->email = $_email;
        $this->creditCards = $_creditCards;
        $this->orders = $_orders;
        $this->cart = $_cart;
    }
    public function addToCart($_product)
    {
        $this->cart[] = $_product;
    }
    public function getCart()
    {
        return $this->cart;
    }
    public function addCreditCard($newCard)
    {
        $this->creditCards[] = $newCard;
    }
    public function getCreditCards()
    {
        return $this->creditCards;
    }
}
