    <div class="container top">
    <?php 
        $value= $_GET['detail'];
        // $_SESSION['qty'] = $qty;

        $select_detail = $db->selectData("SELECT * FROM tb_products 
        LEFT JOIN tb_color ON tb_color.pro_id =tb_products.id 
        WHERE tb_products.id = '".$value."'");
        foreach($select_detail as $item){
            ?>
            <div class="col-lg-9">
                <div class="detail-product border">
                <div class="col-lg-6">
                    <div class="product_image border">
                        <img class="big_img" src="<?php echo $item['pro_img'];?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3><?php echo $item['title'];?></h3>
                    <table class="detail_table">
                        <tr class="detail_price">
                            <!-- Price -->
                            <div style=" position:relative; width:200px;height: 50px;">
                                <h3 class="lbl-container label_price" style="background-color: red;">
                                    <i class="fa fa-tags"></i> Price: <?php echo $item['price'];?> USD</h3>
                            </div>
                        </tr>
                        <tr>
                            <td>
                                <h4>Code: </h4>
                            </td>
                            <td>
                                <h4>BW893391</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Brand:</h4>
                            </td>
                            <td>
                                <h4>The Fashion</h4>
                            </td>
                        </tr>
                        <tr>
                            <td><h4>Size: </h4></td>
                            <td>40 41 42 43</td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Color: </h4>
                            </td>
                            <td>
                            <?php 
                                
                                foreach($select_detail as $item){
                                    ?>
                                    <div class="detail_color border">
                                    <img class="small_color" src="<?php echo $item['color_img'];?>" alt="">
                                </div>
                                    <?php
                                }
                            ?>  
                            </td>
                        </tr>
                        <tr></tr>
                        <tr style="padding-bottom: 10px;">
                            <td>Quantity: </td>
                            <td>
                            <div class="form-inline">
                                <button type="button" id="sub" class="btn btn-warning sub">-</button>
                                <input type="text" id="1" class="form-control" value="1" min="1" max="3" style="width: 20%; text-align: center;" name="qty" />
                                <button type="button" id="add" class="btn btn-warning add">+</button>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="./add_cart.php?add_product=<?php echo $value;?>">
                                <button type="submit" class="btn btn-primary" style="margin: 20px 0px;">
                                    <i class="fa fa-shopping-basket"></i> Click to Buy
                                </button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                </div>
            </div>
            <?php
        }
    ?>
        <div class="col-lg-3">
            <div class="detail-desc border" style="margin-top: -5px">
                <h3>Your Shopping Cart</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-9">
            <div class="detail-desc border top">
                <h3>Description</h3>
                <h5>Top quality with suitable price!!! ***Free delivery!! Hurry up Inbox for special prices!</h5>
            </div>
             <!-- Popularity -->
        <div style=" position:relative; width:200px; height: 50px; margin-left: 1%;">
            <h3 class="lbl-container" >May you Like</h3>
        </div>
        <div class="product_block" style="margin: 2%;">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_item border">
                    <div class="img_box">
                        <span class="product_price">12 USD</span>
                        <img src="https://myfashion2017.s3.amazonaws.com/thum/Thefashion_20190813151655-442909.GIF" alt="">
                    </div>
                    <div class="product_title">
                        CS093900
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_item border">
                    <div class="img_box">
                        <span class="product_price">12 USD</span>
                        <img src="https://img.alicdn.com/imgextra/i3/2059707804/O1CN01i71fRG27WHPCP3GWM_!!0-item_pic.jpg_500x500.jpg" alt="">
                    </div>
                    <div class="product_title">
                        CS093900
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_item border">
                    <div class="img_box">
                        <span class="product_price">12 USD</span>
                        <img src="https://img.alicdn.com/imgextra/i3/1792485067/O1CN01MbZIx51nIjNZn3ocF_!!0-item_pic.jpg_500x500.jpg" alt="">
                    </div>
                    <div class="product_title">
                        CS093900
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product_item border">
                    <div class="img_box">
                        <span class="product_price">12 USD</span>
                        <img src="https://gd2.alicdn.com/imgextra/i2/2232648744/O1CN01is1UJN2ESnkDvH5Tz_!!2232648744.jpg_500x500.jpg" alt="">
                    </div>
                    <div class="product_title">
                        CS093900
                    </div>
                </div>
                <div class="col-lg-12 show_more border">Show More
                    <i class="fa fa-angle-double-right"></i>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-3">
            test

        </div>
    </div>