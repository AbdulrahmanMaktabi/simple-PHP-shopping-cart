<?php 
    class Cart {
        private array $items = [];

        public function getItems() {
            return $this->items;
        }

        public function setItems(array $items){
            $this->items = $items;
        }

        public function addProduct(Product $product , int $quantity){
            // find if the product in cart
            $cartItem = $this->findCartItem($product->getId());
            if($cartItem === null){
                $cartItem = new CartItem($product , 0);            
                $this->items[] =  $cartItem;
            }
            $cartItem->increaseQuantity($quantity);
            return $cartItem;
        }

        private function findCartItem(int $id){
            foreach ($this->items as $item) {
                if($item->getProduct()->getId() === $id){
                    return $item->getProduct();
                }
            }
            return null;
        }

        public function removeProduct(Product $product) {
            unset($this->items[$product->getId()-1]);
        }

        public function getTotalQuantity(){
            $sum = 0;
            foreach ($this->items as $item) {
                $sum += $item->getQuantity();
            }
            return $sum;
        }

        public function getTotalSum() {
            $sum = 0;
            foreach($this->items as $item){
                $sum += $item->getProduct()->getPrice() * $item->getQuantity();
            }
            return $sum;
        }   
    }