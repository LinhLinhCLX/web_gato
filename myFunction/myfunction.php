<?php 

function CartShare() {

             $qty = 0;
             $CartItems = Cart::getContent();   
            
             foreach($CartItems as $item) { $qty = $qty + $item->quantity; }
            
             $CartTotal = Cart::getSubTotal();
        
             $cartx = array('total' => $CartTotal, 'items' => $qty);

  
             View::share('cartx', $cartx);
}