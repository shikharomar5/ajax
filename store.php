<?php

	include "conn.php";
	extract($_POST);


	$target = 'image/'.basename($_FILES['image']['name']);
	$img=$_FILES['image']['name'];

	if(isset($_POST['submit'])){
		$stmt=$db->prepare("INSERT into ajay(email,password,user,image) values (?,?,?,?)");
		$stmt->bindValue(1,$email);
		$stmt->bindValue(2,$pswd);
		$stmt->bindValue(3,$name);
		$stmt->bindValue(4,$img);

		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			if($stmt->execute()){
				header("Location:data.php?add=1");
			}else{
				echo 'Error';
			}
		}else{
				echo 'Error Image';
		}
	}


?>