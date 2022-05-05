<div class="bg-primary" style="width:40%;margin:0 auto;border-radius: 11%; margin-top:50px;background-color: #59677e !important;">
        <form method="POST" action="" enctype="multipart/form-data" style="width:80%;height:90%;margin:0 auto;color:antiquewhite;padding-bottom:1rem;">
            <label for="n">name</label>
            <span class="error">* <?php echo $nameErr; ?></span>
            <input class="form-control" type="text" id="n" name="name" value="<?php echo $name; ?>">
            <br>
            <label for="n">username</label>
            <span class="error">* <?php echo $usernameErr; ?></span>
            <input class="form-control" type="email" id="n1" name="username" value="<?php echo $username; ?>">
            <br>
            <label for="n">password</label>
            <span class="error">* <?php echo $passerr; ?></span>
            <input class="form-control" type="password" id="n2" name="password" value="">

            <br>
            <label for="n">retype password</label>
            <span class="error">* <?php echo $rtpasserr; ?></span>
            <input class="form-control" type="password" id="n3" name="retypepassword" value="">

            <br>


            <label for="exampleInputusername1" class="form-label">image</label>
            <input type="file" class="form-control" name="img" id="inputGroupFile01">


            <br><br>
            <input type="submit" name="submit" class="btn btn-primary" value="save">
            <input type="reset" class="btn btn-danger" value="reset">
        </form>

    </div>