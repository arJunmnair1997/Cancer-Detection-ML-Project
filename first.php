<?php
session_start();

if(!isset($_SESSION["user"]))
{
echo "<script> window.location.href='index.php' </script>";
}

?>


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


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log Out</a>
    </li>
  
  </ul>
</nav>



    <div class="container">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    
    <form method='POST'>
  <div class="form-group">
    <label for="id">Id</label>
    <input type="text" class="form-control" name="id"  placeholder="Enter id">
    
  </div>

  <div class="form-group">
    <label for="radius">Radius Mean</label>
    <input type="text" class="form-control" name="rad"  placeholder="Radius mean">
    
  </div>

  <div class="form-group">
    <label for="texture">Texture Mean</label>
    <input type="text" class="form-control" name="tex"  placeholder="Texture mean">
    
  </div>

  <div class="form-group">
    <label for="smoothness">Smoothness Mean</label>
    <input type="text" class="form-control" name="smo"  placeholder="Smoothness">
    
  </div>

  <div class="form-group">
    <label for="compactness">Compactness Mean</label>
    <input type="text" class="form-control" name="com"  placeholder="Compactness">
    
  </div>

  <div class="form-group">
    <label for="symmetry">Symmetry Mean</label>
    <input type="text" class="form-control" name="sym"  placeholder="Symmetry mean">
    
  </div>

  <div class="form-group">
    <label for="fractal">Fractal Dimension Mean</label>
    <input type="text" class="form-control" name="fra"  placeholder="Fractal Dimension">
    
  </div>

  <div class="form-group">
    <label for="radsec">Radius Sector</label>
    <input type="text" class="form-control" name="rads"  placeholder="Radius Sector">
    
  </div>

  <div class="form-group">
    <label for="textsec">Texture Sector</label>
    <input type="text" class="form-control" name="texs"  placeholder="Texture Sector">
    
  </div>

  <div class="form-group">
    <label for="smosec">Smoothness Sector</label>
    <input type="text" class="form-control" name="smos"  placeholder="Smoothness Sector">
    
  </div>

  <div class="form-group">
    <label for="comsec">Compactness Sector</label>
    <input type="text" class="form-control" name="coms"  placeholder="Compactness Sector">
    
  </div>


  <div class="form-group">
    <label for="symsec">Symmetry Sector</label>
    <input type="text" class="form-control" name="syms"  placeholder="Symmetry Sector">
    
  </div>

  <div class="form-group">
    <label for="fradsec">Fractal Dimension Sector</label>
    <input type="text" class="form-control" name="fras"  placeholder="Fractal Dimension Sector">
    
  </div>




  

  
  <button type="submit" class="btn btn-secondary" name="but">Submit</button>






</form>
    
    </div>
    <div class="col-md-4"></div>
    </div>
    </div>



</body>
</html>




<?php



if(isset($_POST["but"]))

{

$id=$_POST["id"];
$rad=$_POST["rad"];
$tex=$_POST["tex"];
$smo=$_POST["smo"];
$com=$_POST["com"];
$sym=$_POST["sym"];
$fra=$_POST["fra"];
$rads=$_POST["rads"];
$texs=$_POST["texs"];
$smos=$_POST["smos"];
$coms=$_POST["coms"];
$syms=$_POST["syms"];
$fras=$_POST["fras"];


file_get_contents("http://127.0.0.1:5000/read?id=$id&rad=$rad&tex=$tex&smo=$smo&com=$com&sym=$sym&fra=$fra&rads=$rads&texs=$texs&smos=$smos&coms=$coms&syms=$syms&fras=$fras");


}



?>