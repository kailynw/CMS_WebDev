<?php
	require_once('admin.inc');
    require_once('redirect.inc');

	if(isadmin()==false)
    	redirect('login.html');
	else
    	include('header.inc');
    


?>