<?php
class phongbanModel extends DB{
     
     
     public function List_phongban(){
   	 
   	 $qr = "SELECT * FROM phongban";
   	 $list = mysqli_query($this->con, $qr);

   	 if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	 }
   	 return $data;

   }
   }


    public function insertPhongBan($ten_pb)
   {
      $this->result = false;
      $qr = "INSERT INTO phongban VALUES(null,'$ten_pb')";
      if(mysqli_query($this->con,$qr)){
              $this->result = true;
      }
      return json_encode($this->result);

   }


   public function getIdPb($id_pb){
    $qr = "SELECT * FROM phongban WHERE id_pb= '$id_pb'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   }


   public function upDataPhongBan($id_pb,$ten_pb){
       $this->result = false;
       $qr = "UPDATE phongban set
           ten_pb = '$ten_pb'
           WHERE id_pb = '$id_pb'";
 
       if(mysqli_query($this->con, $qr)){
        $this->result = true;
       }
       return $this->result;
   }


   public function deletePhongBan($id_pb){
       $this->result = false;
       $qr = "DELETE FROM phongban WHERE id_pb = '$id_pb'";
       if(mysqli_query($this->con, $qr)){
          $this->result = true;
       }
       return $this->result;
   }

    public function getTenPhongBan(){
       $qr = "SELECT ten_pb FROM phongban";

       $list = mysqli_query($this->con, $qr);

       if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	    }
   	        return $data;

     }
        
   } 

   public function getIdOfTen($ten_pb){
    $qr = "SELECT id_pb FROM phongban WHERE ten_pb = '$ten_pb'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   }


   public function getTenOfId($id_pb){
    $qr = "SELECT ten_pb FROM phongban WHERE id_pb= '$id_pb'";
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