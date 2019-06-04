<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">

<form method="POST">

    <label for="username" >Username</label>
   
    <input type="text"  name="username" placeholder="Username" class="form-control">



    <label for="password" >Password</label>
   
    <input type="password"  name="password" placeholder="Password" class="form-control">
  

  <Button class="btn btn-success" name="but">LOGIN</Button> 
 
 
</form>












</div>
<div class="col-sm-4"></div>















</div>
</div>











</body>
</html>


<?php
session_start();

if(isset($_POST["but"]))

{

$username=$_POST["username"];
$password=$_POST["password"];




$Servername="localhost";
$DbUsername="root";
$DbPass="";
$DbName="project";

$con=new mysqli($Servername,$DbUsername,$DbPass,$DbName);

$sql="SELECT `username`, `password` FROM `admin` WHERE username='$username' and password='$password'";

$res=$con->query($sql);

if($res->num_rows>0)
{
    $_SESSION["user"]="admin";
    echo "<script> window.location.href='first.php' </script>";
    
}
else{
   echo "<script> alert('INCORRECT USERNAME OR PASSWORD') </script> ";
}








}

?>