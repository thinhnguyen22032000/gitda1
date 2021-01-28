<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
    }
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
       outline: none;
     }

     

      .button {
       background-color:green;
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
    
    /*style the select*/
     select {
      width: 20px;
      height: 30px;
      padding: 5px;
      background-color: #098eb3;
      color: white;
      outline: none;
      border-radius: 1px;

     }
     .option4{
        margin-right: 40px;
     
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
   <h2>Thêm giáo viên</h2>
   
       <form class= "form" action="addgiaovien" method="POST"> 
               
              <div class="form-left">
                
                    <label>Họ tên</label>
                    <input type="text" name="hoten_gv">                                
                  
                    <label>Giới tính</label>
                      <div class="option4">

                         <input id="txtvalue4" type="text" name="gioitinh_gv" value="Nam">
              
                         <select id="ddselect4" onchange="ddlselect4();">
                         
                              <option>Nam</option>
                              <option>Nữ</option>
                      </select>
                      </div> 
                    
                    <label>Ngày sinh</label></td>
                    <input type="date" name="ngaysinh_gv" value="">
              </div>
              <div class="form-right">
                 <label>Giảng dạy</label>
                 <div class="option1">

                      <input id="txtvalue1" type="text" name="ten_lophoc" value="MN1">
              
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

                      <input id="txtvalue2" type="text" name="ten_pb" value="KT">
              
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
                      <input id="txtvalue3" type="text" name="ten_hv" value="TS">
              
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
                 <input style="margin-top: 20px" class="button" type="submit" name="submit" value="Thêm">  
              </div>

       </form>
        
        
      <?php
        

        if(isset($data["result"])) {?>
            <h3><?php 
               if($data["result"] == "true"){
                header("location: http://localhost:88/da1/Manager/listgiaovien");
                die();
               }
               else{
                 echo "Thêm that bai";
               }
            ?>
            </h3>
        <?php } ?>
           
</body>
</html>
