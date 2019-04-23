<?php
	require_once('db.inc');
	$result = $db->query('select * from products');
	$count=1;
	while($row = $result->fetch_object()) {


	print "<div class='item'>";
	print "<div>";
	print "<img src='css/images/product".$count.".jpg'>";
	print "<a href='order.html?product=".$row->id."'> <input type='button'  class='buyBtn' value='ADD'></a>";
	print "</div>";
						
	print "<div>";
	print "<div><b>".$row->name."- $".$row->price."</b>";
	print $row->description;
	print "</div>";
	print "</div>";
	print "</div>";
	print"<br>";
	$count++;
	}						
?>