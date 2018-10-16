
<option>Select Area</option>
<?php

	include "conn.php";

	$c_id=$_POST['datapost'];

	$stmt= $db->prepare("SELECT * from area where c_id=?");
	$stmt->bindValue(1,$c_id);
	$stmt->execute();
		while($res=$stmt->fetch(PDO::FETCH_ASSOC)){
		echo "<option value=".$res['id'].">";
		echo $res['area']."</option>";
	}



?>