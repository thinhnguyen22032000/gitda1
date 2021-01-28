<?php
session_start();
if(isset($_SESSION["user_name"])){
}  
else{
	header("location: ../Home/checkAccount");
}
?>
<div class="listAcc">
	<div class="top-content">
	  <h1>Danh sách tài khoản</h1>
	  <a class="btn-list" href="./insertTV">Thêm tài khoản</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tài khoản</th>
				<th>Mật khẩu</th>
				<th>Cấp độ</th>
				<th>Chỉnh sửa</th>
            </tr>
        </thead>
    <tbody>
        <?php
		    $count = 1;
		     $row = $data["data"];
		    foreach ($row as $value) {

             ?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $value['user_name'];?></td>
					<td><?php echo $value['password'];?></td>
					<td><?php echo $value['level'];?></td>
					<td><a class="btn-edit" href="./editAcc/<?php echo $value['id_user']?>"><i class='fas fa-edit' ></i></a>

					<a onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn-delete" href="./deleteUser/<?php echo $value['id_user']?>"><i class='far fa-trash-alt'></i></a></td>
		        </tr>
		     <?php
				 $count++;
			 }        
            // Code hiển thị danh sách bài viết

        ?>
    </tbody>
    </table>
</div>

