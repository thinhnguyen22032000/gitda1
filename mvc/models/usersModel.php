<?php
class usersModel extends DB{
  
   
   // them tai khoan
   public function insert($user_name, $password, $level)
   {
      $this->result = false;
      $qr = "INSERT INTO users VALUES(null,'$user_name', '$password', '$level')";
      if(mysqli_query($this->con,$qr)){
              $this->result = true;
      }
      return json_encode($this->result);

   }
   // dang nhap
   public function checkAcc($user_name, $password){

   	    $this->result = false; 
        
        $qr = "SELECT * FROM users  WHERE
          user_name = '$user_name'AND
          password = '$password' ";
         $user = mysqli_query($this->con, $qr);
        if(mysqli_num_rows($user) >0){
            $this->result = true;
        } 
        return json_encode($this->result);
        
    
   }
   // show list
   public function ListAcc(){
   	 
   	 $qr = "SELECT * FROM users";
   	 $list = mysqli_query($this->con, $qr);

   	 if(mysqli_num_rows($list) > 0){
   	 	while($datas =  mysqli_fetch_array($list)){
              $data[] = $datas;
   	 }
   	 return $data;

   }
}
   // edit acc
   public function getUserID($id_user){
    $qr = "SELECT * FROM users WHERE id_user = '$id_user'";
    $user = mysqli_query($this->con, $qr);
    if(mysqli_num_rows($user)!=0){
      $data = mysqli_fetch_array($user);
    }
    else{
      $data = 0;
    }
    return $data;
   }

   public function upDataUser($id_user,$user_name, $password, $level){
       $this->result = false;
       $qr = "UPDATE users set
           user_name = '$user_name',
           password = '$password',
           level = '$level'
           WHERE id_user = '$id_user'";
 
       if(mysqli_query($this->con, $qr)){
        $this->result = true;
       }
       return $this->result;
   } 

    public function deleteUser($id_user){
       $this->result = false;
       $qr = "DELETE FROM users WHERE id_user = '$id_user'";
       if(mysqli_query($this->con, $qr)){
          $this->result = true;
       }
       return $this->result;
   }  

}
?>