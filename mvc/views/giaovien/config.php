<!-- database conncection -->
<?php
 
 $con = mysqli_connect("localhost:3307","root","","da1");
 if(!$con){

    echo "failed to connect";
 }


 ?>