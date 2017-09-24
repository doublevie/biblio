

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../libs/bootstrap-rtl/dist/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="../libs/css/main.css">
    <style media="screen">
      body {background: #FFF;padding-top: 150px}
      .bottomalert {position: fixed;bottom: 0;left:0;right:0;margin-bottom: 0}
    </style>
  </head>
  <body>

    <div class="alert alert-danger bottomalert" role="alert" style="display:none">اسم المستخدم او كلمة السر خاطئة</div>




<div class="container">
<div class="row">
<div class="col-md-3 col-lg-4"></div>
<div class="col-md-6 col-lg-4">

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">تسجيل الدخول</h3>
    </div>
    <div class="panel-body">
      <form class="loginform" action="" method="post">

<input type="text" name="user"  class="form-control" value="" placeholder="اسم المستخدم" required><br>
<input type="password" name="pass" class="form-control"  value="" placeholder="كلمة المرور" required><br>
<button type="submit" name="button" class="btn btn-primary btn-block">دخول</button>
</form>
    </div>
  </div>

</div>
<div class="col-md-3  col-lg-4"></div>
</div>


</div>






  </body>
  <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
  <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>

<script type="text/javascript">
  $(function(){
    $('.loginform').on('submit',function(e){
e.preventDefault();
var data = $(this).serialize();
$.ajax({
  type: "POST",
  url: '_post.php',
  data: data,
  success: function(x){checkresponse(x)}
});

    })
  })



  function checkresponse(z){
    if (z == '1'){
       window.location.href = "./";
     } else {
       $('[name="user"]').val('');
       $('[name="pass"]').val('');
       $('.bottomalert').slideDown()
     }
  }
</script>

 </html>
