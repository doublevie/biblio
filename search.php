<?php


include 'inc/conf.php';





$categ = array();
$cats = '';
$table = '';
$condition = '';

if (isset($_GET['q']) ) {
  $condition = " WHERE TITRE LIKE '%".$_GET['q']."%' OR AUTEUR LIKE '%".$_GET['q']."%'";
}



$result = $conn->query("SELECT * FROM categories ");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$categ[$row["ID"]] =  $row["NOM_CAT"];
}
}



$notmatch = true;
$result = $conn->query("SELECT * FROM ouverages $condition");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

  $table .= '<div class="col-sm-4"><div class="panel panel-default"><div class="panel-body"><h2>'.$row["TITRE"].'</h2>';
  $table .= '<p>'.$row["AUTEUR"].'</p></div><div class="panel-footer"> '.$categ[$row["CAT"]].'<a class="btn btn-primary pull-left btn-xs" onclick="reserver('.$row["ID"].')" ><i class="fa fa-plus"></i> حجز</a></div></div></div>';
  $notmatch = false;
}
}

if ($notmatch) {
  $table = '<div class="col-sm-12"><h1 align="center" style="font-weight:200">لا توجد نتائج</h1></div>';
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

body {padding-top: 70px}
h2 {padding-top: 5px;margin-top:0}
.panel-body {height:100px;overflow-y: hidden;}
     </style>
  </head>
  <body>
<?php include 'inc/nav.php'; ?>


<div class="container-fluid" >
<div class="row">


<div class="col-md-12">


<div class="well well-sm">
نتائج البحث
<b><?php print $_GET['q']; ?></b>
</div>
<div class="row" id="res">


<?php
print $table;
 ?>


</div>
</div>



</div>

</div>




<?php
include 'inc/dialog.php';

 ?>

  </body>
  <script type="text/javascript" src="libs/jquery/dist/jquery.js">  </script>
  <script type="text/javascript" src="libs/bootstrap/dist/js/bootstrap.js">  </script>
  <script type="text/javascript" src="app/main.js">  </script>




 </html>
