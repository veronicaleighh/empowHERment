<?php 

include "connect.php"; 

if (isset($_GET['product_id'])) {

    $product_id = $_GET['product_id'];

    $sql = "DELETE FROM `products` WHERE `product_id`='$product_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "<script> alert('Product Successfully Deleted'); </script>";
        echo "<script type='text/javascript'>document.location='producttable.php'</script>";
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>