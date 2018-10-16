<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="post" action="drpdwn.php">
			<p>State
				<select name="state" id="state" class="form-control" onchange="fun(this.value)">
					<option>Select Any One</option>
					<?php
					include "conn.php";

					$stmt= $db->prepare("SELECT * from state");
					$stmt->execute();
						while($res=$stmt->fetch(PDO::FETCH_ASSOC)){
						echo "<option value=".$res['id'].">";
						echo $res['state']."</option>";
					}
					?>
				</select>
			</p>
			<p>City
				<select name='city' id="city" class="form-control" onchange="myfun(this.value)">
					<option>Select Any One</option>
				</select>
			</p>
			<p>Area
				<select id="area" name="area" class="form-control">
					<option>Select Any One</option>
				</select>
			</p>
			<p><input type="submit" name="submit"></p>	
		</form>

		<script type="text/javascript">
			function fun(dataval){
				$.ajax({
					url:'value.php',
					method: 'post',
					data: {datapost: dataval},

					success:function(result){
						$("#city").html(result);
					}
				})
			}

			function myfun(datavalue){
				$.ajax({
					url : 'value1.php',
					method : 'post',
					data : {datapost : datavalue},

					success:function(res){
						$('#area').html(res);
					}
				})
			}
		</script>

	</div>
</body>
</html>