<?php

if(@$_GET['add']==1){


?>

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
	<style type="text/css">
		#add{
			color: red;
			background-color: pink;
			font-weight: bold;
			font-family: sans-serif;
		}
	</style>
</head>
<body>
	<div class="container">

		<h1 id='add'>Data Added</h1>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#add').delay(1000);
				$('#add').slideUp(1000);
			});
		</script>
		<form action="store.php" id="myform" method="post" enctype="multipart/form-data">
			<p>Name:
			<input type="text" name="name" class="form-control" required></p>
			<p>Email:
			<input required type="email" name="email" class="form-control"></p>
			<p>Password:
			<input required type="password" name="pswd" class="form-control"></p>
			<p>Image:
			<input type="file" required name="image" class="form-control"></p>
			<p><input type="submit" id="submit" name="submit" class="col-md-4 form-control btn btn-danger"></p>
			
		</form>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#hide').hide();
				var form = $('#myform');
				$('#submit').click(function(){
					
					$.ajax({
						url : form.attr('action'),
						method:'post',
						data: $('#myform').serialize(),

						success:function(result){
							console.log(result);
						}
					});
				});
			});
		</script>


		<p>
		<input type="button" name="show" id="show" value="Show Data" class="btn-success btn form-control col-md-4">
		</p>
		<table class="table table-stripped table-centered">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Image</th>
			</thead>
			<tbody id="response">

			</tbody>
		</table>
<script type="text/javascript">
					$(document).ready(function(){
						
						$('#show').click(function(){
							
							$.ajax({
								url: 'display.php',
								method: 'post',

								success:function(result){
									$('#response').html(result);
								}
							});
						});
					});
				</script>
	</div>
</body>
</html>

<?php
}
else{
?>

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
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="container">

		<form action="store.php" id="myform" method="post" enctype="multipart/form-data">
			<p>Name:
			<input type="text" name="name" class="form-control" required></p>
			<p>Email:
			<input type="email" name="email" class="form-control" required></p>
			<p>Password:
			<input type="password" name="pswd" class="form-control" required></p>
			<p>Image:
			<input type="file" name="image" class="form-control" required></p>
			<p><input type="submit" id="submit" name="submit" class="col-md-4 form-control btn btn-danger"></p>

		</form>

		<script type="text/javascript">
			$(document).ready(function(){
				var form = $('#myform');
				$('#submit').click(function(){
					$.ajax({
						url : form.attr('action'),
						method:'post',
						data: $('#myform').serialize(),

						success:function(result){
							console.log(result);
						}
					});
				});
			});
		</script>


		<p>

		<input type="button" value="Show Values" name="show" id="show" class="btn-success btn form-control col-md-4">
		</p>

		<table class="table table-striped table-bordered">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Image</th>
			</thead>
			<tbody id="response">
				
			</tbody>
		</table>

	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#show').click(function(){
	
				$.ajax({
					url: 'display.php',
					method: 'post',

					success:function(result){
						$('#response').html(result);
					}
				});
			});
			
		});
	</script>


</body>
</html>
<?php	
}
?>