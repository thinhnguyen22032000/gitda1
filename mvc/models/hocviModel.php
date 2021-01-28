<?php
class hocviModel extends DB{
   

   public function List_hocvi(){
   	 
   	 $qr = "SELECT * FROM hocvi";
   	 $list = mysqli_query($this->con, $qr);

   	 if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	 }
   	 return $data;

     }
   }

   
    public function insertHocVi($ten_hv)
   {
      $this->result = false;
      $qr = "INSERT INTO hocvi VALUES(null,'$ten_hv')";
      if(mysqli_query($this->con,$qr)){
              $this->result = true;
      }
      return json_encode($this->result);

   }


   public function getIdHv($id_hv){
    $qr = "SELECT * FROM hocvi WHERE id_hv= '$id_hv'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   }


   public function upDataHocVi($id_hv,$ten_hv){
       $this->result = false;
       $qr = "UPDATE hocvi set
           ten_hv = '$ten_hv'
           
           WHERE id_hv = '$id_hv'";
 
       if(mysqli_query($this->con, $qr)){
        $this->result = true;
       }
       return $this->result;
   }


   public function deleteHocVi($id_hv){
       $this->result = false;
       $qr = "DELETE FROM hocvi WHERE id_hv = '$id_hv'";
       if(mysqli_query($this->con, $qr)){
          $this->result = true;
       }
       return $this->result;
   } 

   public function getTenHocVi(){
       $qr = "SELECT ten_hv FROM hocvi";

       $list = mysqli_query($this->con, $qr);

       if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	    }
   	        return $data;

     }
        
   }  

   public function getIdOfTen($ten_hv){
    $qr = "SELECT id_hv FROM hocvi WHERE ten_hv = '$ten_hv'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   } 



   public function getTenOfId($id_hv){
    $qr = "SELECT ten_hv FROM hocvi WHERE id_hv= '$id_hv'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   }   


}
?>