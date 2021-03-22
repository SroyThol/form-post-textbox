<?php
  $cn = new mysqli("localhost","root","","postdata");
  if ( isset($_GET['upd']) ) {
      $update = $_GET['upd'];
      $sql="UPDATE tbl_customer SET WHERE upd=$upd";
      $cn->query($sql);
  }
  header('location:post-textbox.php');
?>