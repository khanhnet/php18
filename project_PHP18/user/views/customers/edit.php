<?php 
include_once('views/layout/header.php');
 ?>
 <link rel="stylesheet" type="text/css" href="public/styles/product.css">
<link rel="stylesheet" type="text/css" href="public/styles/product_responsive.css">

<style type="text/css">
  label.error,.red{
    
  color: red;
  font-size: 15px;
  width: 100% !important;
    padding: 0px;
    margin: 10px 0px 0px;
}
.error{
  font-size: 15px;
}
input {
  width: 100% !important;
}
</style>

  <div class="home">
    <div class="home_container">
      <div class="home_background" style="
      background-image:url(../admin/public/images/employees/<?= $details['PICTURE']?>")></div>
      <div class="home_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content">
                <div class="home_title text-dark">Thay đổi thông tin khách hàng</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="container bootstrap snippet my-5">

 

          <form action="?mod=customer&act=update&CODE=<?= $details['CODE']?>"" method="POST" role="form" " enctype="multipart/form-data"  class='formValidate'>
  <div class="row">

    <div class="col-sm-3">
      <div class="text-center">
        <img src="../admin/public/images/customers/<?= $details['PICTURE']?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <input type="file" name="PICTURE" class="text-center center-block file-upload">
      </div><hr><br>              
    </div>
    
    <div class="col-sm-9">
      <div class="tab-content">
        <div class="tab-pane active" id="home">
          <hr>     
            <div class="form-group">
            <div class="col-xs-6">
              <label for=""><h4>Tên khách hàng</h4></label>
              <input type="text" class="form-control"  value="<?= $details['NAME']?>" name="NAME">
            </div>
          </div>
           <div class="form-group">
            <div class="col-xs-6">
              <label for=""><h4>Ngày sinh</h4></label>
              <input type="date" class="form-control" value="<?= $details['DATE']?>" name="DATE">
            </div>
          </div>
          <div class="form-group">

            <div class="col-xs-6">
              <label for=""><h4>Email</h4></label>
              <input type="email" class="form-control"  value="<?= $details['EMAIL']?>" name="EMAIL">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-xs-6">
             <label for=""><h4>Số điện thoại</h4></label>
             <input type="number" class="form-control"  value="<?= $details['MOBILE']?>" name="MOBILE">
           </div>
         </div>
         <div class="form-group">

          <div class="col-xs-6">
            <label for=""><h4>Địa chỉ</h4></label>
            <input type="text" class="form-control"  value="<?= $details['ADDRESS']?>" name="ADDRESS">
          </div>
        </div>
         <div class="col-xs-6">
            <label for=""><h4>Mật khẩu</h4></label>
            <input type="password" class="form-control"  name="PASSWORD">
          </div>
        </div>


        <div class="form-group">
         <div class="col-xs-12">
          <br>
          <button class="btn btn-lg btn-success" type="submit" name="submit">
            <i class="glyphicon glyphicon-ok-sign"></i>Lưu thông tin</button>
        </div>
      </div>


    <hr>

  </div>



</div> 
</div> 

</div> 
    </form>

<?php 
include_once('views/layout/footer.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {


    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
    

    $(".file-upload").on('change', function(){
      readURL(this);
    });
  });

  $(document).ready(function() {
 
        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $(".formValidate").validate({
            rules: {
                EMAIL: "required",
                NAME: "required",
                DATE: "required",
                MOBILE: "required",
                ADDRESS: "required",
                PASSWORD: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                EMAIL: "Vui lòng nhập email",
                NAME: "Vui lòng nhập họ và tên",
                DATE: "Vui lòng nhập ngày sinh",
                MOBILE: "Vui lòng nhập số điện thoại",
                ADDRESS: "Vui lòng nhập địa chỉ",
                PASSWORD: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu phải dài hơn 6 kí tự"
                }
            }
        });


    });
</script>
<?php if(isset($_COOKIE['notnew'])){ ?>
      <script type="text/javascript">
        toastr["error"]("Thêm mới thất bại","Thông báo:");
    </script>
<?php } ?>