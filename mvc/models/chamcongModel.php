<?php 

class chamcongModel extends DB {
    
   
   public function List_chamcong($vitri, $sohang1trang, $thang){
   	 
   	 $qr = "SELECT cc.id_cc, gv.id_gv, gv.hoten_gv, gv.gioitinh_gv, cc.so_ngay_cong, cc.thang  FROM giaovien gv inner join chamcong cc on gv.id_gv = cc.id_gv 
       WHERE cc.thang = $thang 
       LIMIT $vitri, $sohang1trang                   
   	         ";
   	 $list = mysqli_query($this->con, $qr);

   	 if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	 }
   	 return $data;

   }
   }

    public function num_id_cc($thang){
    $qr = "SELECT id_cc FROM chamcong where thang = $thang";
    $list = mysqli_query($this->con, $qr);
    $num_row = mysqli_num_rows($list);

    return $num_row;
   }


  public function insert_ChamCong($id_gv,$ngay_cong, $ngay_lap)
   {
      $this->result = false;
      $qr = "INSERT INTO chamcong VALUES(null,$id_gv,$ngay_cong, $ngay_lap)";
      if(mysqli_query($this->con, $qr)){
              $this->result = true;
      }
      return json_encode($this->result);

   }



}
 
?>