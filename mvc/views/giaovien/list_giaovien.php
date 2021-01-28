
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
    .phantrang{
    	
    }
    .phantrang a {
     padding: 5px 10px;
     text-decoration: none;
     background-color: #ddd;

    }
    

</style>

<!-- <script>
$(document).ready(function(){
  $("#btnSearch").click(function(){
    var keyword = $("#txtSearch").val();
    $.post("searchgiaovien.php",{tukhoa:keyword},function(data));
  });
});
</script>
 -->
<form action="./getKey" method="POST" >	
    <input class="key_search" type="text"  name="key" placeholder="Nhập từ khóa....">
    <input class="submit" type="submit" name="search" value="Tìm kiếm">
</form>


<div class="listAcc">    
     
	<div class="top-content">
	  <h1>Danh sách giáo viên</h1>
	  <a class="btn-list" href="./addgiaovien">Thêm giáo viên</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã GV</th>
				<th>Họ tên</th>
				<th>Giới tính</th>
				<th>Ngày sinh</th>
				<th>Giảng dạy</th>
				<th>Phòng ban</th>
				<th>Học vị</th>
				<th>Chỉnh sửa</th>
            </tr>
        </thead>
    <tbody>
        <?php
		    $count = 1;
		     $row = $data["data_gv"];
		     foreach ($row as $value) {

             ?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $value['id_gv']; ?></td>
					<td><?php echo $value['hoten_gv'];?></td>
					<td><?php echo $value['gioitinh_gv']=='1'?"Nữ": "Nam" ;?></td>
					<td><?php echo date('d/m/Y',strtotime($value['ngaysinh_gv'] ));?></td>
					<td><?php echo $value['ten_lophoc'];?></td>
					<td><?php echo $value['ten_pb'];?></td>
					<td><?php echo $value['ten_hv'];?></td>
					<td><a class="btn-edit" href="./editgiaovien/<?php echo $value['id_gv']?>"><i class='fas fa-edit'></i></a>
					<a onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn-delete" href="./deletegiaovien/<?php echo $value['id_gv']?>"><i class='far fa-trash-alt'></i></a></td>

					<!-- <td><button onclick="deletegv(<?php echo $value['id_gv']?>)">xóa</button></td> -->

					
					


		        </tr>
		     <?php
				 $count++;
			 }        
            // Code hiển thị danh sách bài viết

        ?>
    </tbody>
    </table>
</div>

<script type="text/javascript">
	function deletegv(id){
		
   
       if(confirm('are You sure?')){
         
         $.ajax({

              type:'post',
              url:'delete.php',
              data:{'id':id},
              success:function(data){
              
                  console.log(data)

              }

         });

       }


	 }
	
</script>



<!-- phan trang -->

<div class="phantrang"style="margin-top: 40px;">
	<?php 
	    $sohang1trang = $data["sohang1trang"];
        $sotrang = ceil($data["num_id_gv"]/$sohang1trang);

        // echo $data["num_id_gv"];
        
        for($t=1; $t<= $sotrang; $t++) { 
        	# code...
        	echo "<a href=http://localhost:88/da1/Manager/listgiaovien&trang=$t> $t </a>";
        }
	?>

</div>
  


