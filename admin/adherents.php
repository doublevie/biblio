<?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
     unset($_COOKIE['ADMIN']);
     setcookie('ADMIN', null, -1, '/');
  }
}


include '_check.php';
include '../inc/conf.php';


if (isset($_GET['accept']) && $_GET['accept'] > 0) {
  $accept = $_GET['accept'];
  $sql = "UPDATE lecteurs SET VALIDE='1' WHERE ID='$accept'";
  $conn->query($sql);
}

if (isset($_GET['remove']) && $_GET['remove'] > 0) {
  $remove = $_GET['remove'];
  $sql = "DELETE FROM lecteurs WHERE ID='$remove'";
  $conn->query($sql);
}




$table = '';
$result = $conn->query("SELECT * FROM lecteurs WHERE VALIDE='0' ORDER BY VALIDE");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    //  setcookie('USERID',  $row["ID"], time() + (86400 * 30), "/");
     $accept =  '<a class="btn btn-success" href="?accept='.$row["ID"].'">تفعيل</a>' ;
     $delete =  '<a class="btn btn-danger" href="?remove='.$row["ID"].'">حدف</a>' ;
$table .= '<tr><td>'.$row["NOM"].'</td><td>'.$row["PRENOM"].'</td><td>'.$row["PSEUDO"].'</td><td>'.$accept.'</td><td>'.$delete.'</td>';
}
}





$table2 = '';

$result = $conn->query("SELECT * FROM lecteurs WHERE VALIDE='1' ORDER BY VALIDE");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $delete =  '<a class="btn btn-danger" href="?remove='.$row["ID"].'">حدف</a>' ;
$table2 .= '<tr><td>'.$row["NOM"].'</td><td>'.$row["PRENOM"].'</td><td>'.$row["PSEUDO"].'</td><td>'.$delete.'</td>';
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
     </style>
   </head>
   <body>
<?php
include '../inc/navadmin.php';
 ?>



<div class="container">
<div class="well">

  <?php if ($table !== '') {?>
  <h1>قائمة الانتظار</h1>
<table class="table table-bordered table-striped">
<?php
print $table;
 ?>
</table>
<?php } ?>





<?php if ($table2 !== '') {?>
  <h1>قائمة القراء</h1>
<table class="table table-bordered table-striped">
<?php
print $table2;
 ?>
</table>
<?php } ?>

</div>
</div>









   </body>
   <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
   <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>


  </html>
