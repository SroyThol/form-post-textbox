<?php 
  $cn = new mysqli("localhost","root","","postdata");
  //get auto id
  $sql = "SELECT id FROM tbl_customer ORDER BY id DESC";
  $result = $cn->query($sql);
  $num=$result->num_rows;
  if ($num == 0) {
      $id=1;
  }else{
      $row = $result->fetch_array();
      $id = $row[0]+1;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Post Data PHP</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <center><h3>PHP</h3></center>
    <div class="frm">
      <form action="action.php" method="post">
        <label for="">ID:</label>
        <input type="text" name="txt-id" id="txt-id" value="<?php echo $id; ?>" class="frm-control">
        <label for="">Name:</label>
        <input type="text" name="txt-name" id="txt-name" class="frm-control">
        <label for="">Price:</label>
        <input type="text" name="txt-price" id="txt-price" class="frm-control">
        <label for="">submit</label>
        <input type="submit" value="Post" name="btn-submit" class="frm-control">
      </form>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
            <th>Update</th>
        </tr>
        <?php 
          $sql="SELECT *FROM tbl_customer";
          $result = $cn->query($sql);
          $num = $result->num_rows;
          if ($num > 0) {
              while ( $row = $result->fetch_array() ) {
                  ?>
                     <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a>
                        </td>
                        <td>
                            <a href="update.php?upd=<?php echo $row[0]; ?>">Edit</a>
                        </td>
                    </tr>
                  <?php
              }
          }
        ?>
    </table>
</body>
</html>