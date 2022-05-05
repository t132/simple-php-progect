<?php
session_start();
$header='navsignin.php';
if(!empty($_SESSION['usname'])){
  $header='navsignout.php';
}
if (isset($_POST['login'])) {
  header("Location:login.php");
 
} else if (isset($_POST['register'])) {
  header("Location:register.php");
} else {
  //no button pressed
}
if (isset($_POST['signout'])) {
  session_destroy();
  $header='navsignin.php';
 
}
if (isset($_POST['dashpoard'])) {
 $url=$_SESSION['url'];
 header("location:$url");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it tecnology</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="">
<?php 
include $header;
?>
</header>


<div class="row mt-3">
  <div class="col-sm-4">
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
 
</div>

</div>

  <div class="col-sm-4">
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
 
</div>

</div>

  <div class="col-sm-4">
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
 
</div>

</div> 
 </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>