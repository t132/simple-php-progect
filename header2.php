<?php

echo $_SESSION['usname'];
if (isset($_POST['personal'])) {


        
        header("location:teacher.php");
}
?>
<div class="bg-primary" style="width:40%;margin:0 auto;border-radius: 11%; margin-top:50px;background-color: #59677e !important;">
        <form method="POST" action="" enctype="multipart/form-data" style="width:80%;height:90%;margin:0 auto;color:antiquewhite;padding-bottom:1rem;">
         
                <br><br><br><br><br><br><br><br>
                <input type="submit" name="personal" class="btn btn-primary" value="go to personal page">

        </form>

</div>