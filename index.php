<?php
$host = "ec2-23-22-191-232.compute-1.amazonaws.com";
$port = "5432";
$dbname = "d90g8rfgki6jb5";
$user = "ofcrelyobnaqan";
$password = "cefb489d75ca8fef81ab3054ee3525b3af3857ebdcc77080d96834153e2a6b94"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if($_SERVER['REQUEST_METHOD']=='POST'){
	$username=$_POST['name'];
	$password=$_POST['pass'];
	$user= pg_query($dbconn, "select *from public.login where email='{$username}' AND password='{$password}'");
	if ($user) {
		echo "thành công"
	}else{
		echo "Wrong account information";}

}
?>
<!DOCTYPE html>
 <html>
 <head>
<link rel="icon" href="https://img.icons8.com/fluent/96/000000/data-configuration.png"/>
 	<link rel="stylesheet" type="text/css" href="aset/admin.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<title>Login form</title>
 </head>
 <body style="background-image: url(img/login.jpg)">
 <div class="container">
  <h2 style="text-align: center; font-size: 30px">Welcome to login form </h2>
  <form class="was-validated" method="POST">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
 </body>
 </html>
