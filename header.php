<?php
    session_start();
    if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
    }
    //unset qunatity
	unset($_SESSION['qty_array']);
?>
<div class="top_menu">
        <div class="container">
            <ul class="link_menu">
                <li>
                    <a href="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-pinterest"></i>
                    </a>
                    <a href="">How to buy</a>
                    <a href="">Sell on The Fashion</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="nav_bar header border" id="myHeader">
        <div class="container">
            <div class="col-xs-3">
                <a href="./index.php">
                    <img src="./admin/assets/img/brand/blue.png" class="my-logo" alt="">
                </a>
            </div>
            <div class="col-xs-6 search_box">
                <form action="" method="GET">
                    <div class="form-group col-sm-9 col-xs-12">
                        <input type="text" class="form-control" name="txt_search" placeholder="Search here..." />
                    </div>
                    <div class="form-group">
                    <a href="./index.php?search=<?php echo $_GET['txt_search'];?>">
                        <button class="btn btn-primary col-sm-3 col-xs-12" type="submit">
                            <i class="fa fa-search"> </i> Search
                        </button>
                    </a>
                    </div>
                </form>
            </div>
            <div class="col-xs-3">
                <a href="./index.php?order" class="blue">
                    <i class="menu_icon fa fa-shopping-basket"></i>Card
                    <span class="buy_num"><?php echo count($_SESSION['cart']); ?></span>
                </a>
                <span class="blue" id="btn_register"> Register</span>
                <a href="./index.php?login_form">
                    <span class="blue"> Login</span>
                </a>
            </div>
        </div>
    </div>
    <div>
    </div>