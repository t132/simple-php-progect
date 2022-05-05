
<?php

?>
<div class="container">
    <table class="table table-success table-striped" style="max-width: 70%;margin-left: 5%;" dir="rtl">
        <thead>
            <tr>
                <th style="width: 10px;">chose</th>

                <th>name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($result as $val) {
                $techname = $val['name'];
                $uname=$val['username'];
                echo "<tr><td><form method='POST' ><input type='submit' name='chose' value='chose'>
                <input type='text' name='id' value='$val[id]' hidden>
                <input type='text' name='name' value='$val[name]' hidden>
                <input type='text' name='username' value='$val[username]' hidden></form>
                <td>$techname</td></tr>";
            }
            
            ?>
        </tbody>
    </table>
</div>


<?php





?>