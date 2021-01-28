<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
class Manager extends Controller {

    protected $usersModel;
    protected $kq;
    protected $kq2;
    protected $bool;
    protected $giaovienModel;
    protected $phongbanModel;
    protected $hocviModel;
    protected $lophocModel;
    protected $chamcongModel;
    protected $erorr; 
    protected $id_column;
    protected $data_Ten_HV; 
    protected $data_Ten_LH;
    protected $data_Ten_PB; 
    protected $ten_Of_Id_HocVi;
    protected $ten_Of_Id_LopHoc;
    protected $ten_Of_Id_PhongBan;
    
    



	public function __construct(){
    $this->usersModel = $this->model("usersModel");
    $this->giaovienModel = $this->model("giaovienModel");
    $this->phongbanModel = $this->model("phongbanModel");
    $this->hocviModel = $this->model("hocviModel");
    $this->lophocModel = $this->model("lophocModel");
    $this->chamcongModel = $this->model("chamcongModel");
    $id = $_POST['id'];
    	$this->giaovienModel->deleteGiaoVien($id);
   
    }

    



    // user

	function insertTV(){
    //get du lieu ve
       if(isset($_POST["submit"])){

       if(!$_POST["user_name"]=="" && !$_POST["password"] =="" && !$_POST["level"]==""){
          $user_name = $_POST["user_name"];
          $password = $_POST["password"];
          $level = $_POST["level"];
       
          $this->kq = $this->usersModel->insert( $user_name, $password, $level);

        }
        $this->view("master1", [
          "result"=>$this->kq,
          "link"=>"user/addUser",
          "erorr"=>$this->erorr
          ]);
        
    }
}
   

	function listAcc(){
         
    $this->kq = $this->usersModel->listAcc();
   
		$this->view("master1",[
			"data"=>$this->kq,
			"link"=>"user/ListAcc"
		]);
  		
  	}


  	function editAcc($id_user){
  		
  	    $this->kq = $this->usersModel->getUserID($id_user);
  	    if(isset($_POST["edit"])){
  	    	$user_name = $_POST['user_name'];
  	    	$password = $_POST['password'];
  	    	$level = $_POST['level'];
  	    	
  	    	$this->bool = $this->usersModel->upDataUser($id_user,$user_name, $password, $level);

  	    
  	}
  		$this->view("master1", [
  			"link"=>"user/editUser",
  			"data"=>$this->kq,
  			"flag"=>$this->bool
  		]);
  		
    }

    function deleteUser($id_user){
        $this->bool = $this->usersModel->deleteUser($id_user);
        if( $this->bool){
           header("location: http://localhost:88/da1/manager/ListAcc");
        }

    	
    }


    



    //  giao vien model

    // sanh sách giáo viên
   

    function listgiaovien(){


    if(isset($_GET['trang'])){
    		$trang = $_GET['trang'];
    		settype($trang, "int");

    }
    else {
           $trang = 1;

    }

    $sohang1trang = 4;
    
    $num_row_gv = $this->giaovienModel->num_id_gv(); 

    $vitri = ($trang-1) * $sohang1trang; 

    $this->kq = $this->giaovienModel->List_giaovien($vitri, $sohang1trang);
		$this->view("master1",[
			"data_gv"=>$this->kq,
			"num_id_gv"=>$num_row_gv,
			"link"=>"giaovien/list_giaovien",
			"sohang1trang"=>$sohang1trang
		]);
  		
  	}


  	//add giáo viên
  	function addgiaovien(){
    //get du lieu ve
       $this->data_Ten_HV = $this->hocviModel->getTenHocVi();
       $this->data_Ten_PB = $this->phongbanModel->getTenPhongBan();
       $this->data_Ten_LH = $this->lophocModel->getTenLopHoc();
       
       if(isset($_POST["submit"])){
       	if(!$_POST["hoten_gv"]==""){
         
          $hoten_gv = $_POST["hoten_gv"];
          

          $gioitinh_gv_text = $_POST["gioitinh_gv"];
          $gioitinh_gv = $gioitinh_gv_text =='Nữ'?1: 0 ;
          

          $ngaysinh_gv = $_POST["ngaysinh_gv"];
          

          $ten_lophoc = $_POST["ten_lophoc"];
          $id_lophoc_arr = $this->lophocModel->getIdOfTen($ten_lophoc);
          $id_lophoc = $id_lophoc_arr["id_lophoc"];
          
          

          $ten_pb = $_POST["ten_pb"];
          $id_pb_arr = $this->phongbanModel->getIdOfTen($ten_pb);
          $id_pb = $id_pb_arr["id_pb"];
          

          $ten_hv = $_POST["ten_hv"];
          $id_hv_arr = $this->hocviModel->getIdOfTen($ten_hv);
          $id_hv = $id_hv_arr["id_hv"];

          
          $this->bool = $this->giaovienModel->insertGiaoVien($hoten_gv, $gioitinh_gv, $ngaysinh_gv, $id_lophoc, $id_hv,$id_pb);

          
          
        }
        } 
        $this->view("master1", [
          "result"=>$this->bool,
          "link"=>"giaovien/add_giaovien",
          "data_Ten_HV"=>$this->data_Ten_HV,
          "data_Ten_PB"=>$this->data_Ten_PB,
          "data_Ten_LH"=>$this->data_Ten_LH
          ]);



        }



        // phương thức sữa giáo viên

       function editgiaovien($id_gv){
       $this->kq = $this->giaovienModel->getIdGv($id_gv);

       $kq = $this->kq;
       
       $id_lophoc = $kq["id_lophoc"];
       $id_pb = $kq["id_pb"];
       $id_hv = $kq["id_hv"];

       $this->ten_Of_Id_LopHoc = $this->lophocModel->getTenOfId($id_lophoc);
       $this->ten_Of_Id_PhongBan = $this->phongbanModel->getTenOfId($id_pb);
       $this->ten_Of_Id_HocVi = $this->hocviModel->getTenOfId($id_hv);


    //get du lieu ve
       $this->data_Ten_HV = $this->hocviModel->getTenHocVi();
       $this->data_Ten_PB = $this->phongbanModel->getTenPhongBan();
       $this->data_Ten_LH = $this->lophocModel->getTenLopHoc();
       
       if(isset($_POST["edit"])){
       
         
          $hoten_gv = $_POST["hoten_gv"];
          

          $gioitinh_gv_text = $_POST["gioitinh_gv"];
          $gioitinh_gv = $gioitinh_gv_text =="Nam"?0:1;
         

          $ngaysinh_gv = $_POST["ngaysinh_gv"];
         

          $ten_lophoc = $_POST["ten_lophoc"];
          $id_lophoc_arr = $this->lophocModel->getIdOfTen($ten_lophoc);
          $id_lophoc = $id_lophoc_arr["id_lophoc"];
          
          

          $ten_pb = $_POST["ten_pb"];
          $id_pb_arr = $this->phongbanModel->getIdOfTen($ten_pb);
          $id_pb = $id_pb_arr["id_pb"];
          

          $ten_hv = $_POST["ten_hv"];
          $id_hv_arr = $this->hocviModel->getIdOfTen($ten_hv);
          $id_hv = $id_hv_arr["id_hv"];
         

          
          $this->bool = $this->giaovienModel->upDataGiaoVien($id_gv, $hoten_gv, $gioitinh_gv, $ngaysinh_gv, $id_lophoc, $id_hv, $id_pb);
          
        }
        
        $this->view("master1", [
          "data"=>$this->kq,
          "result"=>$this->bool,
          "link"=>"giaovien/edit_giaovien",
          "data_Ten_HV"=>$this->data_Ten_HV,
          "data_Ten_PB"=>$this->data_Ten_PB,
          "data_Ten_LH"=>$this->data_Ten_LH,
          "ten_Of_Id_LopHoc"=>$this->ten_Of_Id_LopHoc,
          "ten_Of_Id_PhongBan"=>$this->ten_Of_Id_PhongBan,
          "ten_Of_Id_HocVi"=>$this->ten_Of_Id_HocVi
          ]);



   }

   function deletegiaovien($id){
   	$this->bool = $this->giaovienModel->deleteGiaoVien($id);
   	if($this->bool){
   		header("location:http://localhost:88/da1/manager/listgiaovien");
   	}
   	else{
   		echo "xoa that bai";
   	}

   }

    


   function getKey(){
   	if(isset($_POST['search'])){
   		$key = $_POST['key'];
   		 $this->kq = $this->giaovienModel->search_GiaoVien($key);

   		 if($this->kq!=[]){
   		 	$this->view("master1",[
      	   "data_gv"=>$this->kq,
           "link"=>"giaovien/search_giaovien",
           "key"=>$key
            ]);
   		 }
   		 else{
   		 	
   		 	$this->view("master1",[
      	   "data_gv"=>$this->kq,
           "link"=>"giaovien/search_giaovien",
           "key"=>$key,
           "report"=>"không tìm thấy ....."
            ]);
   	
   		 }
   		
   	}
   }


   // phong ban


   //danh sách phòng ban

    function listphongban(){
        
    $this->kq = $this->phongbanModel->List_phongban();
    $this->id_column = $this->giaovienModel->getid_gv();
        

		$this->view("master1",[
			"data"=>$this->kq,
			
			"link"=>"phongban/phongban"
		]);
  		
  	}

  	function addphongban(){
       // $this->id_column = $this->giaovienModel->getid_gv();
       
  		if(isset($_POST["submit"])){
          
       	 
          $ten_pb = $_POST["ten_pb"];
       
          $this->kq = $this->phongbanModel->insertPhongBan($ten_pb);
          
        }
      
        
        $this->view("master1", [
          "result"=>$this->kq,
          "link"=>"phongban/add_phongban",
          "erorr"=>$this->erorr
          // "id_gv"=>$this->id_column
          ]);
  	}



    
  	function editphongban($id_pb){


  		// $this->id_column = $this->giaovienModel->getid_gv();
  	    $this->kq = $this->phongbanModel->getIdPb($id_pb);
  	    if(isset($_POST["edit"])){
  	    	$ten_pb = $_POST['ten_pb'];
  	    	
  	    	$this->bool = $this->phongbanModel->upDataPhongBan($id_pb, $ten_pb);
  	}
  		$this->view("master1", [
  			"link"=>"phongban/edit_phongban",
  			"data"=>$this->kq,
  			"flag"=>$this->bool
  			// "id_gv"=>$this->id_column
  		]);
  		
    }


    // phương thức xóa phòng ban

    function deletephongban($id_pb){

    	$this->bool = $this->phongbanModel->deletePhongBan($id_pb);
    	if($this->bool){
            header("location: http://localhost:88/da1/manager/Listphongban");
    	}
  	
  		
    }


  	// hoc vi


  	// danh sách học vị

  	function listhocvi(){
         
     $this->kq = $this->hocviModel->List_hocvi();

		$this->view("master1",[
			"data"=>$this->kq,
			
			"link"=>"hocvi/hocvi"
		]);
  		
  	}

     

    function addhocvi(){
       
  		if(isset($_POST["submit"])){
          
       	 
          $ten_hv = $_POST["ten_hv"];
         
       
          $this->kq = $this->hocviModel->insertHocVi($ten_hv);
          
        }
      
        
        $this->view("master1", [
          "result"=>$this->kq,
          "link"=>"hocvi/add_hocvi",
          "erorr"=>$this->erorr
        
          ]);
  	}



    
  	function edithocvi($id_hv){
  		
  	    $this->kq = $this->hocviModel->getIdHv($id_hv);
  	    if(isset($_POST["edit"])){
  	    	$ten_hv = $_POST['ten_hv'];
  	    	
  	    	$this->bool = $this->hocviModel->upDataHocVi($id_hv, $ten_hv);
  	}
  		$this->view("master1", [
  			"link"=>"hocvi/edit_hocvi",
  			"data"=>$this->kq,
  			"flag"=>$this->bool
  		
  		]);
  		
    }


      
    function deletehocvi($id_hv){
  		
  		$this->bool = $this->hocviModel->deleteHocVi($id_hv);
  	    if($this->bool){
  	    	header("location: http://localhost:88/da1/manager/listhocvi");
  	    }
  	    else{
  	    	header("location: http://localhost:88/da1/manager/listhocvi");
  	    }
  		
    }

    



  	// lớp học 


  	//danh sách lớp học

    function listlophoc(){
         
     $this->kq = $this->lophocModel->List_lophoc();
   
	 $this->view("master1",[
			"data"=>$this->kq,
			
			"link"=>"lophoc/lophoc"
	]);
  		
    }
   

    
    function addlophoc(){
       
  		if(isset($_POST["submit"])){
          
       	 
          $ten_lophoc = $_POST["ten_lophoc"];
         
       
          $this->kq = $this->lophocModel->insertLopHoc($ten_lophoc);
          
        }
      
        
        $this->view("master1", [
          "result"=>$this->kq,
          "link"=>"lophoc/add_lophoc",
          "erorr"=>$this->erorr
        
          ]);
  	}



    
  	function editlophoc($id_lophoc){
  		
  	    $this->kq = $this->lophocModel->getIdLh($id_lophoc);
  	    if(isset($_POST["edit"])){
  	    	$ten_lophoc = $_POST['ten_lophoc'];
  	    	
  	    	$this->bool = $this->lophocModel->upDataLopHoc($id_lophoc, $ten_lophoc);
  	}
  		$this->view("master1", [
  			"link"=>"lophoc/edit_lophoc",
  			"data"=>$this->kq,
  			"flag"=>$this->bool
  		
  		]);
  		
    }


      
    function deletelophoc($id_lophoc){

    	$this->bool = $this->lophocModel->deletelophoc($id_lophoc);
  		
  	    if($this->bool){
  	    	header("location: http://localhost:88/da1/manager/listlophoc");
  	    }
  		
    }


    // Danh sách chấm công

    function listchamcong(){
     // xu li post month
    if(isset($_REQUEST["thang"])){
    	$thang = $_REQUEST['thang'];
    	
    }
    else{
    	$thang = 1;
    }
    
     echo $thang;
    // xu li trang dk chon , phan trang
    if(isset($_GET['trang'])){
    		$trang = $_GET['trang'];
    		settype($trang, "int");

    }
    else {
           $trang = 1;

    }

    $sohang1trang = 4;
    
    $num_row_cc = $this->chamcongModel->num_id_cc($thang); 

    $vitri = ($trang-1) * $sohang1trang;


         
    $this->kq = $this->chamcongModel->List_chamcong($vitri, $sohang1trang, $thang);

	$this->view("master1",[
			"data_cc"=>$this->kq,
			"num_row_cc"=>$num_row_cc,
			"sohang1trang"=>$sohang1trang,
			"link"=>"chamcong/chamcong",
			"thang"=>$thang
		]);
  		
  	}



    

}

?>