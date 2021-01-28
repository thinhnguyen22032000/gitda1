<div class="listAcc">
	<div class="top-content">
	  <h1>Danh sách phòng ban</h1>
	  <a class="btn-list" href="./addphongban">Thêm phòng ban</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã phòng</th>
				<th>Tên phòng</th>
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
					<td><?php echo $value['id_pb'];?></td>
					<td><?php echo $value['ten_pb'];?></td>
					
					<td><a class="btn-edit" href="./editphongban/<?php echo $value['id_pb']?>"><i class='fas fa-edit'></i></a>
					<a onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn-delete" href="./deletephongban/<?php echo $value['id_pb']?>"><i class='far fa-trash-alt'></i></a></td>
		        </tr>
		     <?php
				 $count++;
			 }        
            // Code hiển thị danh sách bài viết

        ?>
    </tbody>
    </table>
</div>
