<?php  
	session_start();
    
    if(!isset($_SESSION['username'])) 
    	$_SESSION['username']=null;
        
    if(!empty($_REQUEST['logoff']))
    	$_SESSION['username']=null;
    
    require('admin_header.php');
   
    
 function isadmin(){
    if(!empty($_POST['username']) && $_POST['username']=="admin")
    	strtolower($_POST['username']);
    else
        return false;
	
         
    if(!empty($_POST['password']) && $_POST['password']=="123qwe")
        $_SESSION['username']="admin";
    else
        return false;
        
        
    if(!empty($_SESSION['username']))
    	return true;
    else 
    	return false;
        
    }
    
    
    
    	
    
   
?>