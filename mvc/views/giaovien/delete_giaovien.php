<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
      .form-left input{
      border: 2px solid #DDD;
     }
     .form-right input{
      border: 2px solid #DDD;
     }
     .form {
      display: flex;
     }
     .form-left{
      width: 40%;
      height: 400px;
      margin-left: 100px;
      display: flex;
      flex-direction: column;
     }
      .form-right{
      width: 40%;
      height: 400px;
      text-align: center;
      display: flex;
      flex-direction: column;
     }
     div label {
       
       margin-left: 50px;
       padding-left: 0;
       margin-bottom: 10px;
       width: 150px;
       margin-top: 20px;
       font-size: 16px;
       font-weight: 100;
       
       
     }
     div input {
       width: 350px;
       height: 30px;
       margin-left: 50px;
     }

     

      .button {
       background-color:#283054;
       color: white;
       width: 86.5px;
       margin: 0 auto;
       display: inline;
       font-size: 16px;
       
       display: block;
      }

      .btn-add {
        margin-bottom: 50px;
        color: white;
        text-decoration: none;
        padding: 6px 5px 6px 5px;
        margin: 0 auto;
        background-color: #283054;
        width: 70px;
      
       
      }

      h2 {
        margin-bottom: 20px;
      }
     .list {
         text-decoration: none;
         background-color:#283054;
         color: white;
         padding:5px;

 
     }
     select {
      width: 20px;
      height: 34px;
      padding: 5px;
      background-color: #707E6B;
      color: white;

     }
     .option4{
         margin-right: 30px;
     
     }
     

  </style>
    
  <script type="text/javascript">
      function ddlselect1(){
        var d = document.getElementById("ddselect1");
        var displaytext = d.options[d.selectedIndex].text;
        document.getElementById("txtvalue1").value = displaytext;
      } 
      function ddlselect2(){
        var d = document.getElementById("ddselect2");
        var displaytext = d.options[d.selectedIndex].text;
        document.getElementById("txtvalue2").value = displaytext;
      }  
      function ddlselect3(){
        var d = document.getElementById("ddselect3");
        var displaytext = d.options[d.selectedIndex].text;
        document.getElementById("txtvalue3").value = displaytext;
      } 

       function ddlselect4(){
        var d = document.getElementById("ddselect4");
        var displaytext = d.options[d.selectedIndex].text;
        document.getElementById("txtvalue4").value = displaytext;
      }   
    
  </script>

</head>
<body>
       <h2>Xóa giáo viên</h2>
       <a class="list" href="../listgiaovien">Danh sách</a>
       <form class= "form" action="../deletegiaovien/<?php  $dataID = $data["data"]; echo $dataID["id_gv"]?>" method="POST">

              <div class="form-left">
                 <label>Họ tên</label>
                 <input type="text" name="hoten_gv" value="<?php  $dataID = $data["data"]; echo $dataID["hoten_gv"]?>">

                 <label>Giới tính</label>
                 <div class="option4">

                      <input id="txtvalue4" type="text" name="gioitinh_gv" value="<?php  $dataID = $data["data"]; echo $dataID["gioitinh_gv"]==0?"Nam":"Nữ"   ?>">
              
                      <select id="ddselect4" onchange="ddlselect4();">
                         <option>Nam</option>
                         <option>Nữ</option>
                      </select>
                 </div>
                 <label>Ngày sinh</label>
                 <input type="date" name="ngaysinh_gv" value="<?php  $dataID = $data["data"]; echo $dataID["ngaysinh_gv"]?>">
              </div>
              <div class="form-right">

                 <label>Giảng dạy</label>
                 <div class="option1">

                      <input id="txtvalue1" type="text" name="ten_lophoc" value="<?php  $dataID = $data["ten_Of_Id_LopHoc"];
                      echo $dataID["ten_lophoc"] ?>">
              
                      <select id="ddselect1" onchange="ddlselect1();">
                         <?php
                           $row = $data["data_Ten_LH"];
                           foreach ($row as $value) {?>
                           <option><?php echo $value["ten_lophoc"];?></option>
                       
                         <?php
                          }
                          ?> 
                      </select>
                 </div>
                 <label>Phòng ban</label>
                  <div class="option2">

                      <input id="txtvalue2" type="text" name="ten_pb" value="<?php  $dataID = $data["ten_Of_Id_PhongBan"]; echo $dataID["ten_pb"]?>">
              
                      <select id="ddselect2" onchange="ddlselect2();">
                         <?php
                           $row = $data["data_Ten_PB"];
                           foreach ($row as $value) {?>
                           <option><?php echo $value["ten_pb"];?></option>
                       
                         <?php
                          }
                          ?> 
                      </select>
                 </div>
                 <label>Học vị</label>
                  <div class="option3">
                      <input id="txtvalue3" type="text" name="ten_hv" value="<?php  $dataID = $data["ten_Of_Id_HocVi"]; echo $dataID["ten_hv"]?>">
              
                      <select id="ddselect3" onchange="ddlselect3();">
                         <?php
                           $row = $data["data_Ten_HV"];
                           foreach ($row as $value) {?>
                           <option><?php echo $value["ten_hv"];?></option>
                       
                         <?php
                          }
                          ?> 
                      </select>
                     
                 </div>
                 <input style="margin-top: 20px"class="button" type="submit" name="delete" value="Xóa">
              </div>          
       </form>
        
        
      <?php
        

        if(isset($data["result"])) {?>
            <h3><?php 
               if($data["result"] == "true"){
                echo "Xóa thành công";
                die();
               }
               else{
                 echo "Xóa thất bại";
               }
            ?>
            </h3>
        <?php } ?>
           
</body>
</html>
 

 