<?php
    require "../dbconnect.php";
    $product_name = $_POST['product_name'];
    $desc = $_POST['desc'];
    $material = $_POST['material'];
    $discount_rate = $_POST['discount_rate'];
    $product_id = $_POST['product_id'];
    $status = $_POST['status'];
    $update_product = "UPDATE products_fashionshop SET product_name = '$product_name',description_prd = '$desc',
    discount_rate = '$discount_rate', material = '$material', status = '$status' WHERE product_id='$product_id'";
    mysqli_query($connect,$update_product);
    echo '<script type="text/JavaScript"> 
        window.open("http://localhost/FashionShop-phpServer/Web/detail_product.php?product_id='.$product_id.'","_self");
        </script>';
?>