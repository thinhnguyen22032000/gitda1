<style type="text/css">

    .timkiem table {
    	margin: 0 auto;
    	width: 
    }

    .timkiem  i {
    	height: 30px;
    	border:2px solid #ddd;
    	width: 40px;
    	line-height: 30px;
    }

     .key_search  {
        border:2px solid #ddd;
        width: 500px;
        height: 30px;
    }

    .submit {
    	height: 36px;
    }

    .form-fillter-month {
        margin-left: 20px;
        
    }
    .form-fillter-month .input {
        width: 30px;
        border: 2px solid #ddd;
    }
    

</style>


<form action="./getKey" method="post" >	
    <input class="key_search" type="text"  name="key" placeholder="Nhập từ khóa....">
    <input class="submit" type="submit" name="search" value="Tìm kiếm">
</form>


<form class="form-fillter-month" action="./listchamcong" method="post">
    <table >
        <tr>
           <td><p>Chấm công tháng:</p></td>
           <td><input class="input" type="text" name="thang" value="<?php echo $data["thang"]; ?>"></td>
           
           
        </tr>
    </table>
</form>


<div class="listAcc">    
     
	<div class="top-content">
	  <h1>Danh sách chấm công</h1>
	 
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã công</th>
                <th>Mã GV</th>
				<th>Họ tên</th>
				<th>Giới tính</th>
                <th>Số ngày công</th>
                <th>Tháng lập</th>
                <th>Lương</th>
				<th>Chỉnh sửa</th>
            </tr>
        </thead>
    <tbody>
        <?php
		    $count = 1;
		     $row = $data["data_cc"];
		    foreach ($row as $value) {

             ?>
				<tr>
					<td><?php echo $count; ?></td>
                    <td><?php echo $value['id_cc']==""?'null':$value['id_cc']; ?></td>
					<td><?php echo $value['id_gv']; ?></td>
					<td><?php echo $value['hoten_gv'];?></td>
					<td><?php echo $value['gioitinh_gv']=='1'?"Nữ": "Nam" ;?></td>
					<td><?php echo $value['so_ngay_cong']==""?'null':$value['so_ngay_cong'] ;?></td>
					<td><?php echo $value['thang']==""?'null':$value['thang'] ;?></td>
					<td><?php 

                    if (!function_exists('tinhLuong')) {
                            // ... proceed to declare your function
                        function tinhLuong($ngaycong, $suffix = 'đ'){
                          $lcb = 4000000;
                          $luong = ceil(($ngaycong * $lcb)/30);

                        if (!empty($luong)) {
                          return number_format($luong, 0, ',', '.') . "{$suffix}";
                               }
                             }
                          
                      }

                     
                     
                     
                      echo tinhLuong($value['so_ngay_cong'])==""?"0đ":tinhLuong($value['so_ngay_cong']);
                    ?></td>
					<td><a class="btn-edit" href="./editgiaovien/<?php echo $value['id_gv']?>"><i class='fas fa-edit'></i></a>
					</td>
		        </tr>
		     <?php
				 $count++;
			 }        
            // Code hiển thị danh sách bài viết

        ?>
    </tbody>
    </table>
</div>


<div style="margin-top: 20px;">
    <?php 
        $sohang1trang = $data["sohang1trang"];
        $sotrang = ceil($data["num_row_cc"]/$sohang1trang);

        // echo $data["num_id_gv"];
        $thang = $data["thang"];
        for($t=1; $t<= $sotrang; $t++) { 
            # code...
            echo "<a href=http://localhost:88/da1/Manager/listchamcong&trang=$t&thang=$thang> Trang - $t -> </a>";
        }
    ?>

</div>