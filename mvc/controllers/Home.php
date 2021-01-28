<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
class Home extends Controller {

  protected $usersModel;
  protected $kq;
  protected $erorr;


  public function __construct(){
    $this->usersModel = $this->model("usersModel");
  }

   
  // kiem tra tai khoan
   function logout(){
      // if(isset($_POST["logout"])){
      //   $_SESSION = array();
      //   session_unset();
      //   header("http://localhost:88/da1/logout");
      // }
      // else{
      //   header("location: http://localhost:88/da1/manager/listphongban");
      // }
    }

   function checkAccount(){
    //get du lieu tu Page thanh vien
     if(isset($_POST["submit"]) ){

       if( !$_POST["user_name"] == "" && !$_POST["password"]=="" ){
        $_SESSION["user_name"]  = $_POST["user_name"];
        $password = $_POST["password"];
         //truy van
         $this->kq =  $this->usersModel->checkAcc($_SESSION['user_name'], $password);
      
      }
     else{
         $this->erorr = "Vui lòng nhập đủ thông tin";
     }
     }
     $this->view("users", [
          "result"=>$this->kq,
          "erorr"=>$this->erorr,
          "session-username"=>$_SESSION['user_name']
          ]);
   }



}

?>