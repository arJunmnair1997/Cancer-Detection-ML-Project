<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Addition </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>





<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">

<form method="POST">

    <label for="num1" >Number1</label>
   
    <input type="number"  name="num1" placeholder="Enter First Number" class="form-control"><br>
  
    <label for="num2">Number2</label>
    
    <input type="number"  name="num2" placeholder="Enter Second Number" class="form-control"><br>

    <label for="op" >Operation</label>
    <select id="inlineFormCustomSelect" name="op" class="form-control">
        <option selected>Choose Operation..</option>
        <option value="a">Addition</option>
        <option value="s">Subtraction</option>
        <option value="m">Multiplication</option>
        <option value="d">Division</option>
      </select>
    <br>


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

$n1=$_POST['num1'];
$n2=$_POST['num2'];
$op=$_POST['op'];

$res=file_get_contents("http://127.0.0.1:5000/read?num1=$n1&num2=$n2&op=$op");

echo $res;


}




?>