<?php
class lophocModel extends DB{
     // show list giao vien
   public function List_lophoc(){
   	 
   	 $qr = "SELECT * FROM lophoc";
   	 $list = mysqli_query($this->con, $qr);

   	 if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	 }
   	 return $data;

   }
}

   
    public function insertLopHoc($ten_lophoc)
   {
      $this->result = false;
      $qr = "INSERT INTO lophoc VALUES(null,'$ten_lophoc')";
      if(mysqli_query($this->con,$qr)){
              $this->result = true;
      }
      return json_encode($this->result);

   }


   public function getIdLh($id_lophoc){
    $qr = "SELECT * FROM lophoc WHERE id_lophoc= '$id_lophoc'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   }


   public function upDataLopHoc($id_lophoc,$ten_lophoc){
       $this->result = false;
       $qr = "UPDATE lophoc set
           ten_lophoc = '$ten_lophoc'
           
           WHERE id_lophoc = '$id_lophoc'";
 
       if(mysqli_query($this->con, $qr)){
        $this->result = true;
       }
       return $this->result;
   }


   public function deleteLopHoc($id_lophoc){
       $this->result = false;
       $qr = "DELETE FROM lophoc WHERE id_lophoc = '$id_lophoc'";
       if(mysqli_query($this->con, $qr)){
          $this->result = true;
       }
       return $this->result;
   }  
   

    public function getTenLopHoc(){
       $qr = "SELECT ten_lophoc FROM lophoc";

       $list = mysqli_query($this->con, $qr);

       if(mysqli_num_rows($list) > 0){
      while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
        }
            return $data;

     }
        
   }

    public function getIdOfTen($ten_lophoc){
    $qr = "SELECT id_lophoc FROM lophoc WHERE ten_lophoc= '$ten_lophoc'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   }


   public function getTenOfId($id_lophoc){
    $qr = "SELECT ten_lophoc FROM lophoc WHERE id_lophoc= '$id_lophoc'";
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