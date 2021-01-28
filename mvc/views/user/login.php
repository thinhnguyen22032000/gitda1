<?php
session_start();
?>
   
      <form action="checkAccount" method="POST">
   	   	<h2>Đăng nhập</h2>
   	   	<input type="text" name="user_name" placeholder="username">
   	   	<input type="password" name="password" placeholder="password">
   	   	<input class="button" type="submit" name="submit" value="Login">  	  
   	</form>
   	 <!--  <?php
   	    if(isset($data["result"])) {?>
   	  	    <h3><?php 
   	  	       if($data["result"] == true && isset($data['session-username'])){
   	  	        header("location: http://localhost:88/da1/Manager/listgiaovien");
   	  	       }
   	  	       else{
   	  	       	 header("location: checkAccount");
   	  	       }
   	  	    ?>
   	  	    </h3>
   	  	<?php } ?> -->

