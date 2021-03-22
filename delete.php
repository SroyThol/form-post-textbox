<?php
  $cn = new mysqli("localhost","root","","postdata");
  if ( isset($_GET['id']) ) {
      $id = $_GET['id'];
      $sql = "DELETE FROM tbl_customer WHERE id = $id";
      $cn->query($sql);
  }
      header('location:post-textbox.php');
?>