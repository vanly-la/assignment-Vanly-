<?php
include_once("./includes/helper.php");
$db = new myDb();
if(isset($_POST['btn_signin'])){
  //get data from form
  $username = $_POST['login_username'];
  $password = $_POST['login_password'];

  //password convert to md5
  $password = md5($password);
  $reslut = $db->selectData("Select * From tb_user Where username = '$username' AND password = '$password'");

  $num = mysqli_num_rows($reslut);
  if($num==1){
    foreach($reslut as $item){
        echo $_SESSION['username'] = $item['username'];;
     }
  }else{
      echo "<h3>Incorrect Username and Password!</h3>";
  }
  
}
?>
<div class="container">
    <div row>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
             <!-- My form login pop up -->
            <div class="form_signin">
                <form action="" method="POST">
                    <center>
                        <h2>User Login</h2>
                    </center>
                    <hr>
                    <label>Username: </label>
                    <input type="text" class="form-control" id="login_username" name="login_username" placeholder="Input Username...">
                    <label>Password: </label>
                    <input type="text" class="form-control" id="login_password" name="login_password" placeholder="Input Password...">
                    <button type="button" class="btn btn-default cancel"><i class="icofont-refresh"></i> Cancel</button>
                    <button type="button" class="btn btn-primary my_signin" id="btn_signin" name="btn_signin"><i class="icofont-facebook"></i> Sign In</button>
                </form>

            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>

