<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
     .add-user{
      margin: 0;
      padding: 0;
      text-align: center;
     }
     form {
         width: 100%;
       
         text-align: center;
     }
    .add-user h2{
        margin-bottom: 10px;  
        width: 200px;
        margin: 0 auto;
        margin-bottom: 10px;
        
        


    }

     form input {
      width: 400px;
      height: 35px;
      display: block; margin-top: 20px;
      margin: 0 auto;
      padding-bottom: 5px solid black;
      border:2px solid #ddd;
      margin-bottom: 5px;
     }
     .add-user div {
      width: 306px;
      margin: 0 auto;
      height: 34px;
     }
     .add-user #txtvalue{
      width: 270px;
      padding: 0;
      margin: 0;
      float: left;
     }

     .add-user select{
        background-color: #ddd;
        width: 30px;
        height: 32px;
     }
     .add-user p {
      
      display: inline;
     
     }

      .btn-bottom {
         height: 50px;
        
         line-height: 50px;
      }

      .button {
       background-color:green;
       color: white;
       width: 86.5px;
       margin: 0;
       display: inline;
       font-size: 16px;
       
       
      }

      .btn-add {
        
        color: white;
        text-decoration: none;
        padding: 6px 5px 6px 5px;

        background-color: #283054;
        width: 70px;
        box-shadow: 2px 2px 1px grey;
        margin-left: 100px;
      }

      .add-user input {

     
       margin-top: 20px;  
     
      }

     .button:hover{
      
     }
     .btn-add:hover{
       
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
  
   	   <form class= "add-user"action="addphongban" method="POST">
   	   	        
   	   	    	   <h2>Thêm phòng ban</h2>
                
   	   	    	   <input type="text" name="ten_pb" placeholder="Tên phòng ban...">
                

                 <div class="btn-bottom">
   	   	    	       <input class="button" type="submit" name="submit" value="Thêm">
                     
                 </div>
   	   	    	  
   	   </form>
   	    
   	  <?php
       
        
   	    if(isset($data["result"])) {?>
   	  	    <h3 style="margin-top:20px;"><?php 
   	  	       if($data["result"] == "true"){
   	  	       header("location: http://localhost:88/da1/manager/listphongban");
   	  	       	die();
   	  	       }
   	  	       else{
   	  	       	 echo "Thêm thất bại";
   	  	       }
   	  	    ?>
   	  	    </h3>
   	  	<?php } ?>
   	   	   
</body>
</html>