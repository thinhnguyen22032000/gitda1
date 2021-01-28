<!-- <?php 
  session_start();
  if(isset($_SESSION["user_name"])){
        header("location: http://localhost:88/da1/manager/listphongban");
  }
  else{
    header("location: http://localhost:88/da1v2");
  }
?> -->
<!DOCTYPE html>
<html>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title></title>
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    	}
        body{
            background: #5433FF;  /* fallback for old browsers */
           background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);  /* Chrome 10-25, Safari 5.1-6 */
           background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            text-align: center;
           
        }
    	
    	.content{
    		width: 300px;
    		height: 300px;
    		
    		border-radius: 10px;
    		margin: 200px auto;
    		text-align: center;
            background-color: white;
    	}
    	h2{
    		color: white;
    		font-family: sans-serrif;
    		margin-bottom: 20px;
    		margin-top: 20px;
    	}

        h1{
              display: inline;
              margin-top: 100px;
              font-size: 50px;
              color: white;
              
        }

    	input{
    		width: 200px;
    		height: 40px;
    		margin-bottom: 10px;
    		outline: none;
    		border: none;
            border-bottom: 2px solid #adad;
    		padding-left: 20px;

    	}
        .button{ 
    		width: 220px;
    		height: 40px;
    		margin-bottom: 10px;
    		border-radius: 25px;
    		padding-left: 0px;
    		border: none;
    		background: #2691d9;
    		color: white;
            font-family: sans-serif;
    	}
    	.button:hover{
        font-size: 15px;
    	}

        .icon-login i{
            margin-top: 10px;
        }
    	

    </style>
</head>
<body>
 
 <div class="content">
  <div class="icon-login">
      <i class='fas fa-user-plus' style='font-size:36px'></i>
  </div>
 	<?php require_once "./mvc/views/user/login.php"; ?>
    <p style="color: red"><?php echo $data['erorr']?></p>
 </div>
</body>
</html>