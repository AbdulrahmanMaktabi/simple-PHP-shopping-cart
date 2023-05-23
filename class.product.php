<?php 
    class Product {
        private int $id;
        private string $title;
        private float $price;
        private int $availableQuantity;

        public function __construct(int $id , string $title , float $price , int $availableQuantity)
        {   
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
            $this->availableQuantity = $availableQuantity;
        }

        public function setId(int $id)
        {
            $this->id = $id;
        }
        public function setPrice(float $price)
        {
            $this->price = $price;
        }
        public function setTitle(string $title)
        {
            $this->title = $title;
        }
        public function setavailableQuantity(int $availableQuantity)
        {
            $this->availableQuantity = $availableQuantity;
        }

        public function getId()
        {
            return $this->id;
        }
        public function getPrice()
        {
            return $this->price;
        }
        public function getTitle()
        {
            return $this->title;
        }
        public function getavailableQuantity()
        {
            return $this->availableQuantity;
        }
        
        public function addToCart(Cart $cart , int $quantity){
            return $cart->addProduct($this , $quantity);
        }

        public function removeFromCart(Cart $cart)
        {
            return $cart->removeProduct($this);
        }
    }