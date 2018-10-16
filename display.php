
<?php


include "conn.php";


$stmt=$db->prepare("SELECT * FROM ajay");
$stmt->execute();
while($res=$stmt->fetch(PDO::FETCH_ASSOC)){
	?>
<tr>
	<td> <?php echo $res['id']; ?> </td>
	<td> <?php echo $res['user']; ?> </td>
	<td> <?php echo $res['email']; ?> </td>
	<td> <?php echo $res['password']; ?> </td>
	<td> <img src="image/<?php echo $res['image']; ?>" width='200px' height='180px'> </td>
</tr>
	<?php
}





?>