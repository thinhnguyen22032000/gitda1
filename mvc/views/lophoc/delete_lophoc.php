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
         margin-right: 100px;
         color: white;
         background-color: #283054;
         box-shadow: 2px 2px 1px grey;
         font-size: 16px;
     }

     .btn-edit a {
      list-style: none;
      background-color: #283054;
     
      color: white;
      padding: 6px;
      text-decoration: none;
      box-shadow: 2px 2px 1px grey;
      
     }
      
     form input {
      width: 300px;
      height: 30px;
      display: block;
      
      margin: 0 auto;
      padding-bottom: 5px solid black;
      background-color: #ddd;
      margin-bottom: 5px;
      }

      .edit_pb div {
      width: 306px;
      margin: 0 auto;
      height: 34px;
     }
     .edit_pb #txtvalue{
      width: 270px;
      padding: 0;
      margin: 0;
      float: left;
     }

     .edit_pb select{
        background-color: #ddd;
        width: 30px;
        height: 32px;
     }
     .edit_pb p {
      
      display: inline;
     
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
       <form class="edit_pb" action="../deletelophoc/<?php  $dataID = $data["data"]; echo $dataID["id_lophoc"]?>" method="POST">
            
               <h2>Xóa lớp học</h2>
               <p>Tên lớp học</p>
               <input type="text" name="ten_lophoc" value="<?php  $dataID = $data["data"]; echo $dataID["ten_lophoc"]?>" placeholder="">
              
              
               <div class="btn-edit">
               <input class="button" type="submit" name="delete" value="Xóa">
               <a href="../Listlophoc">Danh sách</a>
              </div>
       </form>
        
      <?php
        
        if(isset($data["flag"])) {?>
            <h3 style="margin-top: 20px;"><?php 
               if($data["flag"] == false){
                echo "Xóa không thanh công";
               }
               else{
                 echo "Xóa thành công";
               }
            ?>
            </h3>
        <?php } ?>
           
</body>
</html>

