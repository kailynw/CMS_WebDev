 <?php
					
					//$all_IDs= array();
					
                    require_once('db.inc');
                    $result = $db->query('select * from products');
                    
                    while($row = $result->fetch_object()) {
                    print "<div><a href='admin_delete.html?id=".$row->id."' > <button class='deleteBtn'> DELETE</button></a></div>";

					print "<form method='POST'  enctype='multipart/form-data' action='update.html' >";
					print "<input type='hidden' name='product' value='".$row->id."'/>";
                    print"<input type='hidden' name='MAX_FILE_SIZE' value='1900000'>";
                    print "<div class='item'>";
                    print "<input type='file' name='newfile' >";
                    print "<div>";
                    print "<img src='css/images/product".$row->id.".jpg'> ";
                    print " <input type='submit'  class='buyBtn' value='UPDATE'>";
                    print "</div>";

                    print "<div>";
                    print "Name: <input value='".$row->name."' name='item-".$row->id."'/>  $<input value='".$row->price."' name='price-".$row->id."'/>";
                    print $row->description;
                   
                    print "</div>";
                    print "</div>";
					print "</form>";
                    print"<br>";
                   

					//$all_IDs[]= $row->id;
                    }
					
					
                    ?>