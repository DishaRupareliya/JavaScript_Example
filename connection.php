<?php 
	require_once("dbaction.php");
	$DB=new dbaction();

	$DB->insert('login',['username'=>'kk','password'=>'kk']);
	echo "inasert result is:";
	print_r($obj->getResult());
?>