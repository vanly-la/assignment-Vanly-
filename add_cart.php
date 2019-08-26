<?php
	session_start();
	$cart_id = $_GET['add_product'];

	//check if product is already in the cart
	if(!in_array($cart_id, $_SESSION['cart'])){
		array_push($_SESSION['cart'], $cart_id);
	}
	else{

	}

	header("location: ./index.php?detail={$cart_id}");
?>