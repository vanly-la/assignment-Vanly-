    <div class="container top">
        <div class="col-lg-8">
            <form action="" class="order_form border">
                <table class="order-table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total Price</td>
                            <td>Remove</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //initialize total
						$total_price = 0;
						if(!empty($_SESSION['cart'])){

						//create array of initail qty which is 1
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                        }
                        $i = 1;
                        $select_order = $db->selectData("SELECT * FROM tb_products WHERE id IN (".implode(',',$_SESSION['cart']).")");
                        foreach($select_order as $item){
                            
                            $qty = 1;
                            $total_price = $item['price'] * $qty;
                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><img src="<?php echo $item['pro_img'];?>" alt="" class="border"> <?php echo $item['code'];?></td>
                                <td>$ <?php echo  number_format($item['price'],2);?><input type="hidden" name="is[]" value="<?php echo $i; ?>"></td>
                                
                                <td><?php echo $qty?></td>
                                <td><?php echo $total_price?></td>
                                
                                <td>
                                        <button type="button" class="btn btn-danger btn_order_removie"><i class="icofont-ui-delete"></i> Remove</button>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="6" class="text-center">No Item in Cart</td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="col-lg-4">
        <div class="order_form border">
            <div class="order-title">Input Your Delivery Address</div>
            <form action="./clear_cart.php" class="order-form-delivery">
                <input type="text" class="form-control" placeholder="Enter Your Full Name...">
                <input type="text" class="form-control" placeholder="Enter Your Phone Number...">
                <select class="form-control">
                    <option value="1" selected>-- Select Location --</option>
                    <option value="1">Phnom Penh</option>
                    <option value="2">Kandal</option>
                    <option value="3">Takeo</option>
                    <option value="4">Seim Reap</option>
                </select>
                    <button class="btn btn-primary" type="submit">Order Now</button>
            </form>
            <h3>Order Summary</h3>
            <table class="order-summary">
                <?php
                    $subtotal = 0;
                    $subtotal +=  number_format($total_price,2);
                    $delivery = 1;
                    $grandtotal =  number_format(($total_price + $delivery),2);
                ?>
                <tr>
                    <td><b>Sub Total:</b></td>
                    <td style="text-align: right;">$ <?php echo $subtotal;?></td>
                </tr>
                <tr>
                
                    <td><b>Delivery Price:</b></td>
                    <td style="text-align: right;">$ <?php echo $delivery;?></td>
                </tr>
                <tr style="border-top: 1px solid gray;">
                    <td><b>Grand Total</b></td>
                    <td style="text-align: right;"><b>$ <?php echo $grandtotal;?></b></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
