<?php 
   $cn = new mysqli("localhost","root","","postdata");
   if ( isset($_POST['btn-submit']) ) {
      $name = $_POST['txt-name'];
      $price = $_POST['txt-price'];
      if (!empty($name) && !empty($price)) {
        $sql = "INSERT INTO tbl_customer VALUES(null,'$name','$price')";
        $cn->query($sql);
      }
   }
        header('location:post-textbox.php');
?>