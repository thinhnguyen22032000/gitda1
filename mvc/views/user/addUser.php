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
      display: block;
     
      margin: 0 auto;
      padding-bottom: 5px solid black;
      border:2px solid #ddd;
      margin-bottom: 5px;
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


     .button:hover{
      
     }
     .btn-add:hover{
       
     }
  </style>

</head>
<body>
  
   	   <form class= "add-user"action="insertTV" method="POST">
   	   	        
   	   	    	   <h2>Thêm tài khoản</h2>
   	   	    	   <input type="text" name="user_name" placeholder="Tên tài khoản...">
   	   	    	   <input type="password" name="password" placeholder="Mật khẩu...">
                 <input type="text" name="level" placeholder="Cấp độ...">
                 <div class="btn-bottom">
   	   	    	       <input class="button" type="submit" name="submit" value="Thêm">
                 </div>
   	   	    	  
   	   </form>
   	    
   	  <?php
        

   	    if(isset($data["result"])) {?>
   	  	    <h3><?php 
   	  	       if($data["result"] == "true"){
   	  	        header("location: http://localhost:88/da1/manager/ListAcc");
   	  	       	die();
   	  	       }
   	  	       else{
   	  	       	 echo "insert that bai";
   	  	       }
   	  	    ?>
   	  	    </h3>
   	  	<?php } ?>
   	   	   
</body>
</html>