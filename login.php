
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
  <td><input type="text" class="form-control" name="PSEUDO" dir="ltr" value="" required></td>
</tr>

<tr>
  <td> كلمة السر</td>
  <td><input type="text" class="form-control" name="PASSE" dir="ltr" value="" required></td>
</tr>
<tr>
  <td>اعادة كلمة السر</td>
  <td><input type="text" class="form-control" name="PASSE2" dir="ltr" value="" required></td>
</tr>


<tr>
  <td>الاسم </td>
  <td><input type="text" class="form-control" name="NOM" value="" ></td>
</tr>
<tr>
  <td>اللقب </td>
  <td><input type="text" class="form-control" name="PRENOM" value="" ></td>
</tr>
<tr>
  <td>تاريخ الميلاد </td>
  <td><input type="text" class="form-control" name="DATE_NAISSANCE" value="" ></td>
</tr>
<tr>
  <td>العنوان</td>
  <td><input type="text" class="form-control" name="ADRESSE" value="" ></td>
</tr>


<tr>
  <td> السنة الدراسية</td>
  <td><input type="text" class="form-control" name="ANNE" value="" ></td>
</tr>


<tr>
  <td >
   </td>
  <td >
<button type="submit" name="button" class="btn btn-info btn-block"><i class="fa fa-spin fa-circle-o-notch hide"></i>    تسجيل  </button>
  </td>
</tr>






</table>
</form>

<div class="alert alert-danger response" role="alert" style="display:none">

</div>




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
  let that = $(this) ,
  resultError = $('.response');
$('.fa-spin').removeClass('hide');
e.preventDefault();
console.log(that.serialize());

$.ajax({
  type: "POST",
  url: 'inc/inscription.php',
  data: that.serialize(),
  success: function(res){
    console.log(res);
    $('.fa-spin').addClass('hide');
    if (res.split(';')[0] !== '1') {
  resultError.html(res.split(';')[2]);
  $('[name="'+res.split(';')[1]+'"]').focus();
  resultError.slideDown();
} else {
window.location.href = "done.php?action=new";

}
  },
});
});
  });





function login() {
let username = $('[name="USERNAME"]').val() ,
userpass = $('[name="USERPASS"]').val();

$.ajax({
  type: "POST",
  url: '_login.php',
  data: 'user='+username+'&pass='+userpass,
  success: function(res){
if (res == '1') {window.location.href ="./"}
  },
});
}




</script>


 </html>
