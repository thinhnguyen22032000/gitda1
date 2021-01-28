<div class="listAcc">
	<div class="top-content">
	  <h1>Danh sách học vị</h1>
	  <a class="btn-list" href="./addhocvi">Thêm học vị</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã học vị</th>
				<th>Tên học vị</th>
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
					<td><?php echo $value['id_hv'];?></td>
					<td><?php echo $value['ten_hv'];?></td>
					<td><a class="btn-edit" href="./edithocvi/<?php echo $value['id_hv']?>"><i class='fas fa-edit'></i></a>
						<a onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn-delete" href="./deletehocvi/<?php echo $value['id_hv']?>"><i class='far fa-trash-alt'></i></a></td>
		        </tr>
		     <?php
				 $count++;
			 }        
            // Code hiển thị danh sách bài viết

        ?>
    </tbody>
    </table>
</div>