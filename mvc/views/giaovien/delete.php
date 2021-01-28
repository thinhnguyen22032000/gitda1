<?php

  include 'config.php';
 
  // sorry need to get id 

  $id = $_POST['id'];
  $query = mysqli_query($con,"DELETE FROM giaovien WHERE id_gv='$id'");

  

 ?>