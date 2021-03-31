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
    $sql ="SELECT *FROM public.login";
    $data = pg_query($dbconn,$sql); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Login Here </h2>
  <form method="POST">
  
     
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
  <?php
if(pg_num_rows($data) >0)
while($row=pg_fetch_assoc($rs))
  ?>
  <td><?=$row['email']?></td>
  <td><?=$row['pw']?></td>
</div>
</body>
</html>
