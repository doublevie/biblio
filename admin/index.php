<?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
     unset($_COOKIE['ADMIN']);
     setcookie('ADMIN', null, -1, '/');
  }
}


include '_check.php';
include '../inc/conf.php';


/*-----------COUNNT --------------*/
$result = $conn->query("SELECT (SELECT COUNT(ID)FROM lecteurs)  AS QL ,(SELECT COUNT(ID)FROM ouverages)  AS QO,(SELECT COUNT(ID) FROM reservation)  AS QRR  ");
    while($row = $result->fetch_assoc()) {
      $QL = $row["QL"];
      $QO = $row["QO"];
      $QRR = $row["QRR"];


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
      <h3 class="panel-title">القراء</h3>
    </div>
    <div class="panel-body">
      <h1 align="center"><?php print $QL; ?></h1>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">الكتب</h3>
    </div>
    <div class="panel-body">
      <h1 align="center"><?php print $QO; ?></h1>

    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">عدد الحجوزات</h3>
    </div>
    <div class="panel-body">
      <h1 align="center"><?php print $QRR; ?></h1>

    </div>
  </div>


</div>


</div>
</div>




   </body>
   <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
   <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>


  </html>
