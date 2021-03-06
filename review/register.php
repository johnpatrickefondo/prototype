<!DOCTYPE html>
<html>
<head>
	<title> CUBE</title>
	<link rel="stylesheet" type="text/css" href="/upc_prototype/css/loginstyle.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>

<style>
.title{
	font-family: 'Montserrat';
	padding-top: 70px;
	padding-bottom: 0px;
	text-align: center;
}


</style>

<div class="container">
	<h1 class="title"> UNITED PENTECOSTAL CHURCH - BICUTAN </h1>
	<div class="login-box" style="font-family: 'Montserrat'">
	<div class="row">
	<div class="col-md-6 register">
		<h3> Register to have an account </h3>
		<br>
		
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>	
			<div class="form-group">
				<label>Position</label>
				<input type="text" name="position" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary"> Register </button>
		</form>
	</div>	
	</div>		
	</div>
</body>
</html>