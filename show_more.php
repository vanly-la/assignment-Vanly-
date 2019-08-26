<?php 
    $show_moreID = $_GET['show_more'];
?>
<div class="container">
    <!-- Instock -->
    <div style=" position:relative; width:200px; height:50px;">
        <h3 class="lbl-container">
            <?php
            $title_show_more = $db->selectData("SELECT * FROM tb_status WHERE status_id='".$show_moreID."'");
            foreach($title_show_more as $title){
                    echo $title['status_name'];
            }
        ?>
        </h3>
    </div>
    <div class="product_block">
        <div class="row">
            <?php
                $select = $db->selectData("SELECT * FROM tb_products WHERE status_id='".$show_moreID."'");
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
        </div>
    </div>
</div>