<?php 
    $categoryID = $_GET['category'];
?>
<div class="container">
    <!-- Instock -->
    <div style=" position:relative; width:200px; height:50px;">
        <h3 class="lbl-container">
        <?php
            $category = $db->selectData("SELECT * FROM tb_main_menu WHERE menu_id='".$categoryID."'");
            foreach($category as $title){
                    echo $title['menu_name'];
            }
        ?>
        </h3>
    </div>
    <div class="product_block">
        <div class="row">
            <?php
                $select = $db->selectData("SELECT * FROM tb_products WHERE category_id='".$categoryID."'");
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