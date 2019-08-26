<?php 
    $search_value = $_GET['txt_search'];
?>
<div class="container">
    <?php
                $result = $db -> selectData("SELECT * FROM tb_products WHERE title LIKE '%".$search_value."%'");
                $check_num_row = mysqli_num_rows($result);
        ?>
    <h4>Search
        <?php echo $check_num_row;?> Results with Key Word "
        <?php echo $search_value;?>"</h4>
    <?php
                if(!empty($check_num_row)){
                foreach($result as $item){
                
            ?>
    <div class="product_block">
        <div class="row">

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
                }else{
                    echo "No Data";
                }
            ?>


            <div class="col-lg-12 show_more border">Show More
                <i class="fa fa-angle-double-right"></i>
            </div>
        </div>
    </div>
</div>