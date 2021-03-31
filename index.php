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
if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $query = pg_query($db_conn, "SELECT * FROM login WHERE email='{$fname}' AND pw='{$lname}'");
    $user= pg_fetch_assoc($query)
    if ($user) {
		header('location: a.php');
		die;
	}else{
		echo "Wrong account information";}
}
?>
<!DOCTYPE  html>
<html>
    <body>
        <h2>PostgreSQL Login Forms</h2>

        <form  method="POST">
            First name:<br>
            <input  type="text"  name="firstname">
            <br>
            Last name:<br>
            <input  type="text"  name="lastname">
            <br><br>
            <input  type="submit"  name="submit">
        </form>
    </body>
</html>
