<?php 
ob_start();

session_start();

if(isset($_SESSION["user_name"])){

}
else{
  header("location: http://localhost:88/da1");
}

// if(isset($_POST["logout"])){
//   session_destroy();
//   header("location: http://localhost:88/da1");
// }

?> 
<html>
<head>
  <title></title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style type="text/css">
    body{
      
    }
      *{
        margin: 0;
        border: 0;
        font-family: sans-serif;
      }
      .container{
        width: 100%;
        margin: 0 auto;
      }
      .header{
        width: 100%;
        height: 100px;
        background-color: #ddd; 
        text-align: center;
        margin-bottom: 5px;
        color: white;
      }

      /*style menu left*/

      .menu-admin {
        width: 15%;
        background: #536976;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #292E49, #536976);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #292E49, #536976); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



        float: left;
        height: 800px;


        
      }
       .content{
        width: 85%;
        background-color: #ddd; 
        float: left;
        height: 800px;
        text-align: center;
       }

       .size-content{
          padding-top:100px;
          margin: 0 auto;
          width: 90%;
          padding-bottom: 100px;
          box-shadow: 2px 2px 1px grey;
          background-color: white;
       }


       .listAcc {
        width: 80%;
        margin: 0 auto;
        /*text-align: center;*/

        
       }

       .listAcc h1 {
        display: inline;
        margin-right: 50%;
        margin-left: 2%;
        font-family: sans-serif;

       }


       div .btn-list {
        display: inline;
        text-decoration: none;
        color: white;
        margin-bottom: 10px;
        background-color: #1537d1;
        border-radius: 5px;
        padding: 5px;
       }

       div .btn-list:hover {
        background-color: #041b85;
       }

       .listAcc table {
 
        width: 98%;
         border-collapse: collapse;
        border-spacing: 0;
      
       border: 1px solid #ddd;
        
        background-color: white;
       /* box-shadow: 2px 2px 1px grey;*/
        /*margin: 0 auto;*/
       }
       .listAcc table thead th {
        height: 100%;
        border-top: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        border-left: 1px solid #ddd;
        
        height: 30px;
       }
       .listAcc table tbody tr td {
        
        
        border-right: 1px solid #ddd;
        /*border-bottom: 1px solid #ddd;*/
        border-left: 1px solid #ddd;
        color: #3c494a;
        height: 40px;
        padding-left: 10px;
        
       }
       .listAcc table tbody tr{
        text-align: left;

       }
       .listAcc table tbody tr td .btn-edit{
          text-decoration: none;
          color:#033585 ;
          margin-right: 10px;
       }
       .listAcc table tbody tr td .btn-delete{
           text-decoration: none;
           color:#033585;
       }
       tr:nth-child(even) {
            background-color: #f2f2f2;
       }

       .listAcc table tbody tr td .btn-delete:hover{
                color: #5482cc;
       }
       .listAcc table tbody tr td .btn-edit:hover{
                color: #5482cc;
       }

       /*sytle menu*/

       section .title-menu{
         color:white;
         
         height: 100px;
         line-height: 100px;
         text-align: center;
         border-bottom: 1px solid #ddd;
       }

       /*listAcc top content*/
      .menu-admin ul{
         padding: 0;
      }

      .menu-admin ul li {
         list-style: none;
         
      } 
      .menu-admin ul li h3{
        height: 30px;
        background-color: #27caf2;
        color:white;
        height: 50px;
        line-height: 50px;
        text-align: center;
      }

      .menu-admin ul li a{
        height: 50px;
       
        color:white;
        text-decoration: none;
        display: inline;
        line-height: 50px;
        padding-left: 20px;

      }
      

      .top-content{
        height: 100px;
        line-height: 100px;
        
      }

      .menu-admin ul li a:hover {
        margin-left: 20px;
        transition: .2s;
        transition-delay: .3s;

      }

      .fa-angle-double-right{
        padding-right: 10px;
      }
      .logout {
        width: 100px;
        float: right;
        margin-right: 20px;
        padding: 5px;
        color:white;
        border-radius: 5px;
        
        background-color: #eb2513;
        outline: none;
      }
      .logout:hover{
        background-color: #b51607;
      }
 
      
  </style>
</head>
<body>
 <div class="container">
     <section class="menu-admin">
        <h3 class="title-menu">Admin Page</h3>
        <ul>
          <!-- <li><h3>Quản lí danh mục</h3></li> -->
          <li><a href="http://localhost:88/da1/manager/listphongban"><i class='fas fa-angle-double-right' style='font-size:16px ;color:white'></i>Phòng ban</a></li>
          <li><a href="http://localhost:88/da1/manager/listhocvi"><i class='fas fa-angle-double-right' style='font-size:16px ;color:white'></i>Học vị</a></li>
          <li><a href="http://localhost:88/da1/manager/listlophoc"><i class='fas fa-angle-double-right' style='font-size:16px ;color:white'></i>Lớp học</a></li>
          <li><a href="http://localhost:88/da1/manager/listgiaovien"><i class='fas fa-angle-double-right' style='font-size:16px ;color:white'></i>Giáo viên</a></li>
          <li><a href="http://localhost:88/da1/Manager/listchamcong"><i class='fas fa-angle-double-right' style='font-size:16px;color:white'></i>Chấm công</a></li>
        </ul>
        <ul>
          <!-- <li><h3>Quản lí tài khoản</h3></li> -->
          <li><a href="http://localhost:88/da1/manager/ListAcc" value="quantri"><i class='fas fa-angle-double-right' style='font-size:16px ;color: white'></i>Quản trị</a></li>
        </ul>
     </section>
     <section class="content">
      <header class="header">
        <form   method="post">
        <!-- <input onclick="return confirm('Bạn có muốn đăng xuất?')" class="logout" type="submit" name="logout" value="Đăng xuất">
        </form> -->
         <?php require_once "./mvc/views/user/logout.php"?>
        <?php require_once "./mvc/views/user/userOn.php"?>

      </header>
      <div class="size-content">
       <?php require_once "./mvc/views/".$data["link"].".php" ;?>
     </div>
    </section>
     <footer class="footer"></footer>
 </div>
</body>
</html>

