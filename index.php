<?php
$host = "ec2-23-22-191-232.compute-1.amazonaws.com";
$port = "5432";
$dbname = "d90g8rfgki6jb5";
$user = "ofcrelyobnaqan";
$password = "cefb489d75ca8fef81ab3054ee3525b3af3857ebdcc77080d96834153e2a6b94"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if($dbconn){
    echo "oke";
}
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $hashpassword = md5($_POST['pass']);
    $sql ="select *from public.login where email = '".pg_escape_string($_POST['name'])."' and pw ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        
        echo "Login Successfully";    
    }else{
        
        echo "Invalid Details";
    }
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
    <button type="submit" class="btn btn-primary" name ="submit">Login</button>
  </form>
</div>
 </body>
 </html>
