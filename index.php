
  <?php
    include_once("./includes/helper.php");
    $db = new myDb();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanly La</title>
    <!-- My Bootstrap -->
    <link rel="stylesheet" href="./admin/assets/css/bootstrap.min.css">
    <!-- My Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- My Style Css -->
    <link rel="stylesheet" href="./admin/assets/css/my.css">
    <link rel="stylesheet" href="./admin/assets/css/icofont.min.css">
</head>
<body>
    <?php
        include_once('./header.php');

        if(isset($_GET['detail']))
        {
            include "page_detail.php";
        }else if(isset($_GET['show_more']))
        {
            include "show_more.php";
        }else if(isset($_GET['order']))
        {
            include "page_order.php";
        }else if(isset($_GET['category']))
        {
            include "page_category.php";
        }else if(isset($_GET['txt_search'])){
            include "search_page.php";
        }else if(isset($_GET['login_form'])){
            include "./login.php";
        }else{
            include('home.php');
        }
        include_once('./popup.php');
        include_once('./footer.php');
        include_once('./script.php');
    ?>

</body>
</html>