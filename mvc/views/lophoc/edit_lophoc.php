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
       height: 50px;
       line-height: 50px;
     }

     .btn-edit input{
         display: inline;
         width: 88px;
        
         color: white;
         background-color:green;
        
         font-size: 16px;
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

      .edit_pb div {
      width: 306px;
      margin: 0 auto;
      height: 34px;
     }
     
  </style>
  <script type="text/javascript">
      function ddlselect(){
        var d = document.getElementById("ddselect");
        var displaytext = d.options[d.selectedIndex].text;
        document.getElementById("txtvalue").value = displaytext;
      }  
    
  </script>

</head>
<body>
       <form class="edit_pb" action="../editlophoc/<?php  $dataID = $data["data"]; echo $dataID["id_lophoc"]?>" method="POST">
            
               <h2>Cập nhật lớp học</h2>
               
               <input type="text" name="ten_lophoc" value="<?php  $dataID = $data["data"]; echo $dataID["ten_lophoc"]?>" placeholder="">
              
              
               <div class="btn-edit">
               <input class="button" type="submit" name="edit" value="Cập nhật">
               
              </div>
       </form>
        
      <?php
        
        if(isset($data["flag"])) {?>
            <h3 style="margin-top: 20px;"><?php 
               if($data["flag"] == false){
                echo "Cập nhật không thành công";
               }
               else{
                header("location: http://localhost:88/da1/manager/listlophoc");
               }
            ?>
            </h3>
        <?php } ?>
           
</body>
</html>

