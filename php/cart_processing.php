<?php
	$total=0;
    
	foreach($cart as $i=>$row){

	

		if(empty($cart) || $cart[$i]['item_id']<1) {
			include('redirect.inc');
			redirect('products.html');
		}
        
        

		
			if($stmt = $db->prepare("select * from 	products where id=?")) {
				$stmt->bind_param('i', $cart[$i]['item_id']);
				$stmt->execute();
					if(($result=$stmt->get_result())&&($row_query=$result->fetch_object())) {
                    
                    if($cart[$i]['qty']<=0)
                    	continue;
                   	print '<tr style="color: white">';
                    print '<td> <input name="item-'.$cart[$i]['item_id'].'" type="number" value="'.$cart[$i]['qty'].'"  min="0" max="500"></td>';
					print '<td>'.$row_query->name.'</td>';
					print '<td> $'.$row_query->price.'</td>';
					print '</tr>';
                    
                    $total+=$row_query->price* $cart[$i]['qty'];
					}
			}
		

	}
    
    print '<div  style="position: absolute; bottom:0; right:15px; color:white;"> Total: $'. money_format($total,1234.56).' </div>';


?> 