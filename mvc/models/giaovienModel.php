<?php
class giaovienModel extends DB{
     // show list giao vien
   public function List_giaovien($vitri, $sohang1trang){
   	 
   	 $qr = "SELECT gv.id_gv, gv.hoten_gv, gv.gioitinh_gv, gv.ngaysinh_gv, lh.ten_lophoc, pb.ten_pb, hv.ten_hv FROM giaovien gv inner join(lophoc lh, phongban pb, hocvi hv) on (gv.id_lophoc = lh.id_lophoc AND gv.id_pb = pb.id_pb AND gv.id_hv = hv.id_hv)
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

   public function num_id_gv(){
    $qr = "SELECT id_gv FROM giaovien";
    $list = mysqli_query($this->con, $qr);
    $num_row = mysqli_num_rows($list);

    return $num_row;
   }




   public function getid_gv(){
   	$qr = "SELECT id_gv FROM giaovien";
   	$list = mysqli_query($this->con, $qr);

   	if(mysqli_num_rows($list) > 0){
   		while($datas = mysqli_fetch_array($list)){
   			$data[] = $datas;
   		}
   		return $data;
   	}
   }
   //add giao vien

   public function insertGiaoVien($hoten_gv, $gioitinh_gv, $ngaysinh_gv, $id_lophoc,$id_hv, $id_pb)
   {
      $this->result = false;
      $qr = "INSERT INTO giaovien VALUES(null,'$hoten_gv', '$gioitinh_gv', '$ngaysinh_gv', '$id_lophoc','$id_hv', '$id_pb')";
      if(mysqli_query($this->con, $qr)){
              $this->result = true;
      }
      return json_encode($this->result);

   }


   public function getIdGv($id_gv){
    $qr = "SELECT * FROM giaovien WHERE id_gv= '$id_gv'";
    $kq = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($kq)!=0){
      $data = mysqli_fetch_array($kq);
    }
    else{
      $data = 0;
    }
    return $data;
   }


   public function upDataGiaoVien($id_gv,$hoten_gv, $gioitinh_gv, $ngaysinh_gv, $id_lophoc, $id_hv, $id_pb){
       $this->result = false;
       $qr = "UPDATE giaovien set
           hoten_gv = '$hoten_gv',
           gioitinh_gv = b'$gioitinh_gv',
           ngaysinh_gv = '$ngaysinh_gv',
           id_lophoc = '$id_lophoc',
           id_hv = '$id_hv',
           id_pb = '$id_pb'
           WHERE id_gv = '$id_gv'";
 
       if(mysqli_query($this->con, $qr)){
        $this->result = true;
       }
       return $this->result;
   }


   public function deleteGiaoVien($id){
       $this->result = false;
       $qr = "DELETE FROM giaovien WHERE id_gv = '$id'";
       if(mysqli_query($this->con, $qr)){
          $this->result = true;
       }
       return $this->result;
   } 




   public function search_GiaoVien($hoten_gv){
   	 
   	 $qr = "SELECT gv.id_gv, gv.hoten_gv, gv.gioitinh_gv, gv.ngaysinh_gv, lh.ten_lophoc, pb.ten_pb, hv.ten_hv FROM giaovien gv inner join(lophoc lh, phongban pb, hocvi hv) on (gv.id_lophoc = lh.id_lophoc AND gv.id_pb = pb.id_pb AND gv.id_hv = hv.id_hv)
   	     where gv.hoten_gv like '%$hoten_gv%' ORDER BY gv.id_gv DESC                   
   	         ";
   	 $list = mysqli_query($this->con, $qr);

   	 if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	 }     
     }
     else{
      $data = [];
     }
     return $data;
   
}  



}

?>