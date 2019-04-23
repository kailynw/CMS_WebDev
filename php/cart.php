<?php 
	
	$cart=0;
	if(!is_array($cart))
		$cart=array();
      if(!empty($_COOKIE['cart'])) $cart = unserialize($_COOKIE['cart']);
	  if(!is_array($cart)) $cart = array();
		
      if(!empty($_GET['product'])){
        cart_add(1,$_GET['product']);
      }
	  cart_update();

	 if(!empty($cart))
     	 print "<a href='order.html'> <i  id='shopping-cart' class='fas fa-shopping-cart'></i></a>";
	
     
	


	  setcookie('cart', serialize($cart));

	
	


      
      function cart_add($quantity, $item_id){
      
      	global $cart;
        
      	if($item_id<=0 || $quantity<=0)
      		return;


		foreach($cart as $i=>$row) {

			
      		if($item_id==$cart[$i]['item_id']){
      			$cart[$i]['qty']+=$quantity;
      			$quantity=0;
      		}
      	}
		if($quantity>0) $cart[] = array('qty'=>$quantity, 'item_id'=>$item_id);
      	
      }

	function cart_update(){
    	global $cart;
    	foreach($cart as $i=> $row){
        	$field= 'item-'.$cart[$i]['item_id'];
        	if(!empty($_GET[$field])){
            	if($_GET[$field]>0)
                	$cart[$i]['qty']=$_GET[$field];
            	else
                	unset($cart[$i]);
            }
        }
    	
    }
      
      
 ?>
