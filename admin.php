<?php
session_start();
if(!empty($_SESSION['name'])){
  $_SESSION['url']='admin.php';
$tname = $_SESSION['name'];
$pas = $_SESSION['pass'];
$tphoto = $_SESSION['photo'];
$usernam=$_SESSION['usname'] ;
$showtable='emptypagediv.php';
include_once('confige.php');
$cname = $sdate = $evaluat = '';
//$coursflag = 0;

if (isset($_POST['selectteacher'])  ) {
$coursflag=1;
  $sql = $conn->prepare("select id,name,username from teacher ");
  $stmt = $sql->execute();
  $result = $sql->fetchAll(PDO::FETCH_ASSOC);
  if (count($result) > 0) {
     $coursflag = 1;
    $showtable="choseteacher.php";
   
  }
}
$username=$techname=$teachid='';
if(isset($_POST['chose']) ){
  $techname=$_POST['name'];
  
  $username=$_POST['username'];
  $teachid=$_POST['id'];
    $showtable="insertcourse.php";
  
  }
  if(isset($_POST['periority']) ){
    $showtable="periority.php";

  }
  if(isset($_POST['inscourse']) ){
    $showtable="inscourse.php";

  }
  if(isset($_POST['savecourse']) ){
    $coursename=$_POST['coursename'];
    $startdate=$_POST['startdate'];
    $evaluation=$_POST['evalute'];
    $lastdate=$_POST['enddate'];
    $sql = $conn->prepare("insert into courses(coursename, startdate, evaluation,lastdate)
        values
        ('$coursename','$startdate','$evaluation','$lastdate')");
        $stmt = $sql->execute();

  }
  if(isset($_POST['coursetoteacher']) ){
    $teachid=$_POST['compobox'];
    $coursename=$_POST['compotext'];
    $sql = $conn->prepare("update courses set teachid='$teachid' where coursename='$coursename'");
    $stmt = $sql->execute();
  
  }}else{
    header("location:index.php");
  }
  if(isset($_POST['signout'])){
session_destroy();
    $_POST=array();
    header("location:index.php");
  }
  if(isset($_POST['index'])){
    $_SESSION['usname']= $usernam;
        header("location:index.php");
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

  <title>teacher</title>
</head>

<body>
  <header class="">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h5 class="text-white h4">it tecnology</h5>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form action="" method="post">
        <input type="submit" name="index" class="btn btn-primary" value="hompage">
        <input type="submit" name="signout" class="btn btn-danger" value="signout">
      </form>
        <span style="font-weight: bolder;color:antiquewhite">admin user</span>
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">عرض البيانات الشخصية</button>
      </div>
    </nav>
  </header>



  <div class="offcanvas offcanvas-end bg-primary" style="margin-top:55px;margin-right: 20px;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header" direction="rtl">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <h4 id="offcanvasRightLabel" style="position:absolute;right:0;width:55%;color:aliceblue;">البيانات الشخصية</h5>
        <hr>
    </div>


    <div class="offcanvas-body">
      <div>
        <img src="<?php echo "img/" . $tphoto ?>" style="width:70%;height:100px;margin-left: 40%;
    border: black;" alt="">
      </div>
      <hr>

      <h5 style="position:absolute;right:0;color:aliceblue;"><span><?php echo $tname ?></span> :الاسم</h3>
        <div>

        </div>
    </div>
  </div>

  <form class="row g-3" style="margin-left:20%; margin-top:5%;min-width:70%" method="post">
    <div class="col-auto">
      <input type="submit" value="تغيير صلاحية معلم" name="periority" class="btn btn-primary mb-3">


    </div>
    <div class="col-auto">
      <input type="submit" value="إضافة كورس جديد" name="inscourse" class="btn btn-primary mb-3">

    </div>
    <div class="col-auto">
      <input type="submit" value="اختيار معلم" name="selectteacher" class="btn btn-primary mb-3">

    </div>
  </form>
<?php

  include $showtable;
  
  ?>

  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>