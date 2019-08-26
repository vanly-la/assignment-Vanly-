<div class="container ">
    <div class="content ">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 gray border">
            <?php 
                $main_menu = $db->selectData("SELECT * FROM tb_main_menu");
                foreach($main_menu as $item){
                    ?>
                    <a href="./index.php?category=<?php echo $item['menu_id'];?>">
                        <div class="menu_button">
                            <i class="<?php echo $item['menu_icon'];?>"></i> <?php echo $item['menu_name'];?>
                        </div>
                    </a>
                    <?php
                }
            ?>
            </div>
            <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 middle_show gray border">
                <div id="slider1_container" style="visibility: hidden; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg"/>
                    </div>

                    <!-- Slides Container -->
                    <div data-u="slides" style="position: absolute;left: -20px; width: 1300px; object-fit: cover; height: 630px; cursor: pointer;
                            overflow: hidden;">
                        <div>
                            <img style="width: 100%; height: 100%;" data-u="image" src="./admin/assets/img/slider/slider1.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="./admin/assets/img/slider/slider2.png" />
                        </div>
                        <div>
                            <img data-u="image" src="./admin/assets/img/slider/slider3.gif" />
                        </div>
                    </div>

                    <style>
                        .jssorb031 {
                            position: absolute;
                        }

                        .jssorb031 .i {
                            position: absolute;
                            cursor: pointer;
                        }

                        .jssorb031 .i .b {
                            fill: #000;
                            fill-opacity: 0.5;
                            stroke: #fff;
                            stroke-width: 1200;
                            stroke-miterlimit: 10;
                            stroke-opacity: 0.3;
                        }

                        .jssorb031 .i:hover .b {
                            fill: #fff;
                            fill-opacity: .7;
                            stroke: #000;
                            stroke-opacity: .5;
                        }

                        .jssorb031 .iav .b {
                            fill: #fff;
                            stroke: #000;
                            fill-opacity: 1;
                        }

                        .jssorb031 .i.idn {
                            opacity: .3;
                        }
                    </style>
                    <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5"
                        data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <style>
                        .jssora051 {
                            display: block;
                            position: absolute;
                            cursor: pointer;
                        }

                        .jssora051 .a {
                            fill: none;
                            stroke: #fff;
                            stroke-width: 360;
                            stroke-miterlimit: 10;
                        }

                        .jssora051:hover {
                            opacity: .8;
                        }

                        .jssora051.jssora051dn {
                            opacity: .5;
                        }

                        .jssora051.jssora051ds {
                            opacity: .3;
                            pointer-events: none;
                        }

                        .jssora051 {
                            margin-top: 100%;
                        }
                    </style>
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75"
                        data-scale-left="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75"
                        data-scale-right="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-lg-3 col-md-3 col-sm-3 col-xs-12 gray ads1 border">
                <img src="http://phsar.intertechplus.com.kh/assets/img/banner-first.gif" alt="ads">
            </div>
        </div>
    </div>
    <!-- New Arrival -->
    <div style=" position:relative; width:200px; height:50px;">
        <h3 class="lbl-container">New Arrival</h3>
    </div>
    <div class="product_block">
        <div class="row">
            <?php
                $select = $db->selectData("SELECT * FROM tb_products WHERE status_id='1'");
                foreach($select as $item){
                
            ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 product_item border">
                <a href="./index.php?detail=<?php echo $item['id'];?>">
                    <div class="img_box">
                        <span class="product_price">
                            <?php echo $item['price'];?> USD</span>
                        <img src="<?php echo $item['pro_img'];?>" alt="">
                    </div>
                    <div class="product_title">
                        <?php echo $item['code'];?>
                    </div>
                </a>
            </div>
            <?php 
                }
            ?>
            <div class="col-lg-12">
                <a href="./index.php?show_more=<?php echo $item['status_id'];?>">
                    <div class="show_more border"> Show More
                        <i class="fa fa-angle-double-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Popularity -->
    <div style=" position:relative; width:200px; height:50px;">
        <h3 class="lbl-container">Popularity</h3>
    </div>
    <div class="product_block">
        <div class="row">
            <?php
                $select = $db->selectData("SELECT * FROM tb_products WHERE status_id='2'");
                foreach($select as $item){
                
            ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 product_item border">
                <a href="./index.php?detail=<?php echo $item['id'];?>">
                    <div class="img_box">
                        <span class="product_price">
                            <?php echo $item['price'];?> USD</span>
                        <img src="<?php echo $item['pro_img'];?>" alt="">
                    </div>
                    <div class="product_title">
                        <?php echo $item['code'];?>
                    </div>
                </a>
            </div>
            <?php 
                }
            ?>
            <div class="col-lg-12">
                <a href="./index.php?show_more=<?php echo $item['status_id'];?>">
                    <div class="show_more border"> Show More
                        <i class="fa fa-angle-double-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

     <!-- Instock -->
     <div style=" position:relative; width:200px; height:50px;">
        <h3 class="lbl-container">Instock</h3>
    </div>
    <div class="product_block">
        <div class="row">
            <?php
                $select = $db->selectData("SELECT * FROM tb_products WHERE status_id='3'");
                foreach($select as $item){
            ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 product_item border">
                <a href="./index.php?detail=<?php echo $item['id'];?>">
                    <div class="img_box">
                        <span class="product_price">
                            <?php echo $item['price'];?> USD</span>
                        <img src="<?php echo $item['pro_img'];?>" alt="">
                    </div>
                    <div class="product_title">
                        <?php echo $item['code'];?>
                    </div>
                </a>
            </div>
            <?php 
                }
            ?>
            <div class="col-lg-12">
                <a href="./index.php?show_more=<?php echo $item['status_id'];?>">
                    <div class="show_more border"> Show More
                        <i class="fa fa-angle-double-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>