<!-- my form message pop up -->
<div class="msg_popup border">
    <span class="btn-close border">
        <i class="fa fa-times"></i>
    </span>
    <center>Are you sure you want to remove item?</center>
    <hr>
    <button class="btn btn-default cancel">
        <i class="icofont-refresh"></i> Cancel</button>
    <a href="delete_item.php?id=<?php echo $item['id']; ?>&index=<?php echo $i; ?>">
        <button type="submit" class="btn btn-danger" style="float: right;">
            <i class="icofont-ui-delete"></i> Remove</button>
    </a>
</div>
<!-- my form image pop up -->
<div class="big_img_show">
    <span class="btn-close border">
        <i class="fa fa-times"></i>
    </span>
    <img class="popup_img" src="#" alt="">
</div>

<!-- Create New Account Form -->
<div class="login_form border" id="register_form">
    <span class="btn-close border">
        <i class="fa fa-times"></i>
    </span>
    <form action="./includes/signup_user.php" method="POST">
        <center>
            <h2>Create New Account</h2>
        </center>
        <hr>
        </center>
        <label>Username: </label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Input Username...">
        <label>Password: </label>
        <input type="text" class="form-control" id="pass" name="password" placeholder="Input Password...">
        <label>Re-Password: </label>
        <input type="text" class="form-control" id="repass" placeholder="Input Password...">
        <button type="button" class="btn btn-default cancel">
            <i class="icofont-refresh"></i> Cancel</button>
        <button type="button" class="btn btn-primary my_signin" id="btn_signup" name="btn_signup"> Sign Up</button>
    </form>

</div>
<span id="bg_body"></span>