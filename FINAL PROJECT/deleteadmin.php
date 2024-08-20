<?php 

include "connect.php"; 

if (isset($_GET['admin_id'])) {

    $admin_id = $_GET['admin_id'];

    $sql = "DELETE FROM `admininfo` WHERE `admin_id`='$admin_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {
        echo "<script> alert('Product Successfully Deleted'); </script>";
        echo "<script type='text/javascript'>document.location='admininfo.php'</script>";
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>