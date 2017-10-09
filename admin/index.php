<?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
     unset($_COOKIE['ADMIN']);
     setcookie('ADMIN', null, -1, '/');
  }
}


include '_check.php';
include '../inc/conf.php';



if (isset($_GET['ret']) && $_GET['ret'] > 0) {
  $today = date('Y-m-d H:i');
  $ret = $_GET['ret'];
  $sql = "UPDATE reservation SET DATE_RECUP='$today' WHERE ID='$ret'";
  $conn->query($sql);
  $sql = "UPDATE  ouverages SET QT_DISPONIBLE=QT_DISPONIBLE+1 WHERE ID='$bid'";
  $conn->query($sql);
}

if (isset($_GET['add']) && $_GET['add'] > 0) {
  $add = $_GET['add'];
  $sql = "UPDATE reservation SET TOK='1' WHERE ID='$add'";
  $conn->query($sql);
}

if (isset($_GET['reject']) && $_GET['reject'] > 0) {
  $reject= $_GET['reject'];
  $bid= $_GET['bid'];
  $sql = "DELETE  FROM reservation WHERE ID='$reject'";
  $conn->query($sql);
  $sql = "UPDATE  ouverages SET QT_DISPONIBLE=QT_DISPONIBLE+1 WHERE ID='$bid'";
  $conn->query($sql);
}




/*-----------COUNNT --------------*/
$result = $conn->query("SELECT (SELECT COUNT(ID)FROM lecteurs)  AS QL ,(SELECT COUNT(ID)FROM ouverages)  AS QO,(SELECT COUNT(ID) FROM reservation WHERE TOK='1')  AS QRR ,  (SELECT COUNT(ID) FROM reservation WHERE TOK='0')  AS WQRR  ");
    while($row = $result->fetch_assoc()) {
      $QL = $row["QL"];
      $QO = $row["QO"];
      $QRR = $row["QRR"];
      $WQRR = $row["WQRR"];
}


$ouvs =array();

$result = $conn->query("SELECT * FROM ouverages ");
    while($row = $result->fetch_assoc()) {
$ouvs[$row["ID"]] = $row["TITRE"];
}

$lecteurs =array();
$result = $conn->query("SELECT * FROM lecteurs ");
    while($row = $result->fetch_assoc()) {
$lecteurs[$row["ID"]] = $row["NOM"];
}

/*-----------QUERYS --------------*/
$querys = '';
$result = $conn->query("SELECT * FROM reservation WHERE TOK='0' ");
    while($row = $result->fetch_assoc()) {
 $querys .= '<tr><td>'.$lecteurs[$row["LECTID"]].'</td><td>'.$ouvs[$row["OUVID"]].'</td><td>'.$row["DATE_RES"].'</td><td><a href="?add='.$row["ID"].'">تأكيد </a></td><td><a href="?reject='.$row["ID"].'&bid='.$row["OUVID"].'">رفض </a></td></tr>';
}


/*-----------RESERVATIONS --------------*/
$resv = '';
$result = $conn->query("SELECT * FROM reservation WHERE TOK='1' AND DATE_RECUP='' ");
    while($row = $result->fetch_assoc()) {
 $resv .= '<tr><td>'.$lecteurs[$row["LECTID"]].'</td><td>'.$ouvs[$row["OUVID"]].'</td><td>'.$row["DATE_RES"].'</td><td><a href="?ret='.$row["ID"].'&bid='.$row["OUVID"].'">إسترجاع</a></tr>';
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

<div class="col-md-3">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">القراء</h3>
    </div>
    <div class="panel-body">
      <h3 align="center"><?php print $QL; ?></h3>
    </div>
  </div>
  </div>

<div class="col-md-3">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">الكتب</h3>
    </div>
    <div class="panel-body">
      <h3 align="center"><?php print $QO; ?></h3>

    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">عدد الحجوزات</h3>
    </div>
    <div class="panel-body">
      <h3 align="center"><?php print $QRR; ?></h3>

    </div>
  </div>


</div>

<div class="col-md-3">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title"> طلبات الحجز</h3>
    </div>
    <div class="panel-body">
      <h3 align="center"><?php print $WQRR; ?></h3>

    </div>
  </div>
</div>


<div class="col-md-6">
<div class="well well-sm" style="min-height:500px;">
<h3>طلبات الحجز  (<?php print $WQRR ?>)</h3>

<table class="table table-bordered table-striped">
  <tr>
    <th>طالب الحجز</th>
    <th>الكتاب</th>
    <th>تاريخ الطلب</th>
    <th>تأكيد الحجز</th>
    <th>رفض الحجز</th>
  </tr>
<?php print $querys; ?>
</table>
</div>
</div>

<div class="col-md-6">
<div class="well well-sm" style="min-height:500px;">
<h3>الحجوزات (<?php print $QRR ?>)</h3>

<table class="table table-bordered table-striped">
  <tr>
    <th>طالب الحجز</th>
    <th>الكتاب</th>
    <th>تاريخ الطلب</th>
    <th>استرجاع</th>
   </tr>
<?php print $resv; ?>
</table>
</div>
</div>



</div>
</div>




   </body>
   <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
   <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>


  </html>
