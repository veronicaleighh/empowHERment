<?php 

include "connect.php"; 

if (isset($_GET['customer_id'])) {

    $customer_id = $_GET['customer_id'];

    $sql = "DELETE FROM `customers` WHERE `customer_id`='$customer_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "<script> alert('User Account Record Successfully Deleted'); </script>";
        echo "<script type='text/javascript'>document.location='customertable.php'</script>";
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>