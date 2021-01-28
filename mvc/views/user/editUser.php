<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">


  
     form {
         width: 100%;
        
         text-align: center;
     }
     
     form h2 {
      
      width: 200px;
      margin: 0 auto;
      margin-bottom: 10px;
      
      

     }

     .btn-edit {
       text-align: center;
     }

     .btn-edit input{
         display: inline;
         width: 88px;
        
         color: white;
         background-color: green;
         
         font-size: 16px;
     }

     .btn-edit a {
      list-style: none;
      background-color: #283054;
     
      color: white;
      padding: 6px;
      text-decoration: none;
     
      
     }
      
     form input {
      width: 400px;
      height: 35px;
      display: block;
      
      margin: 0 auto;
      padding-bottom: 5px solid black;
      border:2px solid #ddd;
      margin-bottom: 5px;
     }
  </style>

</head>
<body>
       <form action="../editAcc/<?php  $dataID = $data["data"]; echo $dataID["id_user"]?>" method="POST">
            
               <h2>Cập nhật tài khoản</h2>
               <input type="text" name="user_name" value="<?php  $dataID = $data["data"]; echo $dataID["user_name"]?>" placeholder="username">
               <input type="password" name="password" value="<?php  $dataID = $data["data"]; echo $dataID["password"]?>" placeholder="password">
               <input type="text" name="level" value="<?php  $dataID = $data["data"]; echo $dataID["level"]?>" placeholder="level">
               <div class="btn-edit">
                <input class="button" type="submit" name="edit" value="Cập nhật">
              
              </div>
       </form>
        
      <?php
        
        if(isset($data["flag"])) {?>
            <h3><?php 
               if($data["flag"] == true){
                header("location: http://localhost:88/da1/manager/ListAcc");
                die();
               }
               else{
                 echo "Cập nhật không thành công thanh cong";
               }
            ?>
            </h3>
        <?php } ?>
           
</body>
</html>

