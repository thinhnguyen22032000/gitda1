<div class="listAcc">
	<div class="top-content">
	  <h1>Danh sách lớp học</h1>
	  <a class="btn-list" href="./addlophoc">Thêm lớp học</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã lớp học</th>
				<th>Tên lớp học</th>
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
					<td><?php echo $value['id_lophoc'];?></td>
					<td><?php echo $value['ten_lophoc'];?></td>
					<td><a class="btn-edit" href="./editlophoc/<?php echo $value['id_lophoc']?>"><i class='fas fa-edit'></i></a>
					<a onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn-delete" href="./deletelophoc/<?php echo $value['id_lophoc']?>"><i class='far fa-trash-alt'></i></a></td>
		        </tr>
		     <?php
				 $count++;
			 }        
            // Code hiển thị danh sách bài viết

        ?>
    </tbody>
    </table>
</div>