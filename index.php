<?php
include 'inc/conf.php';

$cats = "";
$result = $conn->query("SELECT * FROM categories");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row["ID"];
      $name =  $row["NOM_CAT"];
$cats .= "<option value='$id'>$name</option>";
    }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="libs/bootstrap-rtl/dist/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="libs/css/main.css">
    <style media="screen">
      body {background: url('assets/img/libraries.jpg');background-size: cover;}
      table.frm {width:100%}
      table.frm tr td {padding:5px}
      .hide {display: none}
      .well-inverse{color:#fff;background: #000;background: rgba(0,0,0,0.8);border-color: #000;padding-top: 80px;height:100%;height:100vh;margin-bottom: 0;border-radius: 0}
    </style>
  </head>
  <body>
<?php include 'inc/nav1.php'; ?>


<div class="container">
<div class="row">
<div class="col-md-6 ">

<div class="well well-inverse">
  <div class="signupform">

<h1>التسجيل</h1>
<form class="signup" action="index.html" method="post">

<table class="frm">

<tr>
  <td>اسم المستخدم</td>
  <td><input type="text" class="form-control" name="" value=""></td>
</tr>
<tr>
  <td>البريد الالكتروني</td>
  <td><input type="text" class="form-control" name="" value=""></td>
</tr>
<tr>
  <td> الصفة</td>
  <td>
  <!-- <select class="form-control" name="">
<?php print $cats; ?>
  </select></td> -->
</tr>
<tr>
  <td> المجال</td>
  <td><input type="text" class="form-control" name="" value=""></td>
</tr>


<tr>
  <td colspan="2">
<button type="submit" name="button" class="btn btn-primary btn-block"><i class="fa fa-spin fa-circle-o-notch hide"></i>    تسجيل  </button>
  </td>
</tr>



</table>
</form>





  </div>
  </div>
  </div>
</div>
</div>






  </body>
  <script type="text/javascript" src="libs/jquery/dist/jquery.js">  </script>
  <script type="text/javascript" src="libs/bootstrap/dist/js/bootstrap.js">  </script>

<script type="text/javascript">
  $(function(){

$('form.signup').on('submit',function(e){
e.preventDefault();
});

  });
</script>


 </html>
