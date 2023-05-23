<?php 
    class CartItem {
        private Product $product;
        private int $quantity;

        public function __construct(Product $product , int $quantity)
        {
            $this->product = $product;
            $this->quantity = $quantity;
        }
        
        public function setProduct(Product $product)
        {
            $this->product = $product;
        }
        
        public function setQuantity(int $quantity)
        {
            $this->quantity = $quantity;
        }

        public function getProduct()
        {
            return $this->product;
        }

        public function getQuantity() {
            return $this->quantity;
        }

        public function increaseQuantity(int $mount = 1) 
        {
            if($this->getQuantity() + $mount > $this->getProduct()->getAvailableQuantity()){
                throw new Exception("no more quantity!");            
            }
            $this->quantity += $mount;
        }

        public function descreaseQuantity(int $mount)
         {
            if($this->getQuantity() - $mount > 1){
                throw new Exception("you cant remove product!");
            }
            $this->quantity -= $mount;
        }
    }