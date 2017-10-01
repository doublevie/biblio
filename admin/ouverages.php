<?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
     unset($_COOKIE['ADMIN']);
     setcookie('ADMIN', null, -1, '/');
  }
}

include '_check.php';
include '../inc/conf.php';

if (isset($_POST['TITRE'])) {
  $TITRE = $AUTEUR = $QT = $PAGES = $TYPE ='';
  extract($_POST);
  $add = "INSERT INTO ouverages (TITRE,CAT,TYPE,AUTEUR,DATE_SORTIE,QT,QT_DISPONIBLE,PAGES) VALUES ('$TITRE','$CAT','$TYPE','$AUTEUR',NOW(),'$QT','$QT','$PAGES')";
  $conn->query($add) or die(mysqli_error($conn));
}





$list = '';
$result = $conn->query("SELECT * FROM ouverages ORDER BY ID DESC");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
 $list .= '<tr><td>'.$row["ID"].'</td><td>'.$row["TITRE"].'</td><td>'.$row["AUTEUR"].'</td><td>'.$row["QT"].'</td><td>'.$row["QT_DISPONIBLE"].'</td>';
}
}



 ?>





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
       body {padding-top: 70px}
       table.frm {width:100%}
       table.frm tr td {padding:5px}

     </style>
   </head>
   <body>
<?php
include '../inc/navadmin.php';
 ?>



<div class="container-fluid">
  <div class="row">

<div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">إضافة ملف</h3>
    </div>
    <div class="panel-body">
      <form  action="ouverages.php" method="post">

 <table class="frm">
<tr>
  <td>العنوان</td>
  <td><input type="text" name="TITRE" autofocus value="" class="form-control" required></td>
</tr>
<tr>
  <td>القسم</td>
  <td><select class="form-control" name="CAT">
<option value="">CAT1</option>
<option value="">CAT2</option>
  </select></td>
</tr>
<tr>
  <td>المؤلف</td>
  <td><input type="text" name="AUTEUR" value="" class="form-control" required></td>
</tr>
<tr>
  <td>الكمية</td>
  <td><input type="number" name="QT" value="" class="form-control" required></td>
</tr>
<tr>
  <td>الصفحات</td>
  <td><input type="number" name="PAGES" value="" class="form-control" ></td>
</tr>
<tr>
   <td colspan="2"><button type="submit" class="btn btn-block btn-info" name="button">إضافة</button></td>
</tr>

 </table>
</form>
    </div>
  </div>
</div>


<div class="col-md-8">

<div class="well">


  <h1> قائمة الملفات</h1>
<table class="table table-bordered table-striped">
  <tr>
    <th>الرقم</th>
    <th>العنوان</th>
    <th>المؤلف</th>
    <th>الكمية</th>
    <th>متوفرة</th>
  </tr>
<?php

print $list;
 ?>

</table>


</div>





</div>
</div>
</div>









   </body>
   <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
   <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>


  </html>
