<?php 

	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	include_once('connection.php');

  if (isset($_GET['CODENV'])) {
	$CODE = $_GET['CODENV'];
	$query = "SELECT * FROM employees WHERE CODE='".$CODE."'";
  }
  if (isset($_GET['CODEKH'])) {
    $CODE = $_GET['CODEKH'];
  $query = "SELECT * FROM customers WHERE CODE='".$CODE."'";
  }


  // Cau lenh truy van co so du lieu

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

	$details= $result->fetch_assoc();
 ?>




 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
 </head>  
 <body>
    <legend><h1 class="text-center">Chi tiết</h1></legend>
 
    <div class="container">
  <a href="7.2.php" class="btn btn-success">Quản lí khách hàng</a>
    <a href="7.1.php" class="btn btn-success">Quản lí nhân viên</a>
   <table class="table table-striped">
 <thead>
   <tr>
     <th scope="col">Mã</th>
     <th scope="col">Tên</th>
      <th scope="col">Email</th>
     <th scope="col">Số điện thoại</th>
     <th scope="col">Địa chỉ</th>
   </tr>
 </thead>
 <tbody>
    <tr>
        <td><?= $details['CODE'] ?></td>
       <td><?= $details['NAME']?></td>
       <td><?= $details['EMAIL']?></td>
       <td><?= $details['MOBILE']?></td> 
       <td><?= $details['ADDRESS'] ?></td>

       
       
    </tr>
 </tbody>
</table>    
</div> 
 </body>
 </html> 