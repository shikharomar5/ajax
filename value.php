<option>Select City</option>
<?php

	include "conn.php";

	$s_id=$_POST['datapost'];

	$stmt= $db->prepare("SELECT * from city where s_id=?");
	$stmt->bindValue(1,$s_id);
	$stmt->execute();
		while($res=$stmt->fetch(PDO::FETCH_ASSOC)){
		echo "<option value=".$res['id'].">";
		echo $res['city']."</option>";
	}



?>