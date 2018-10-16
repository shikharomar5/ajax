<?php
try{
	$host='localhost';
	$dbname='solve_prob';
	$dsn='mysql:host='.$host.';dbname='.$dbname.';charset=utf8';
	$db=new PDO($dsn,'root','');
}catch(Exception $e){
	echo "Something went wrong ".$e;
}
?>

