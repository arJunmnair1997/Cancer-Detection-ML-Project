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

    <label for="name" >Name</label>
   
    <input type="text"  name="name" placeholder="Enter Name" class="form-control"><br>
  
    <label for="roll">Roll Number</label>
    
    <input type="number"  name="roll" placeholder="RollNumber" class="form-control"><br>

    <label for="adm">Admission Number</label>
    <input type="number"  name="adm" placeholder="Admision Number" class="form-control"><br>

    <label for="col">College</label>
    <input type="text"  name="col" placeholder="Enter College" class="form-control"><br>


  <Button class="btn btn-success" name="but">SUBMIT</Button> 
 
 
</form>












</div>
<div class="col-sm-4"></div>















</div>
</div>










</body>
</html>
<?php

if(isset($_POST['but']))
{

$n=$_POST['name'];
$r=$_POST['roll'];
$a=$_POST['adm'];
$col=$_POST['col'];


file_get_contents("http://127.0.0.1:5000/read?name=$n&roll=$r&adno=$a&clg=$col");





}




?>