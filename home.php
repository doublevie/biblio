<?php


include 'inc/conf.php';





$categ = array();
$cats = '';
$table = '';
$condition = '';
$currentCat = 0;

if (isset($_GET['cat']) && $_GET['cat'] > 0) {
  $condition = " WHERE CAT='".$_GET['cat']."'";
  $currentCat = $_GET['cat'];
}



$result = $conn->query("SELECT * FROM categories");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$categ[$row["ID"]] =  $row["NOM_CAT"];
  $active = ($currentCat == $row["ID"] ? 'active':'');
$cats .='  <a href="?cat='.$row["ID"].'" class="list-group-item '.$active.'">'.$row["NOM_CAT"].'</a>';
}
}


$result = $conn->query("SELECT * FROM ouverages $condition LIMIT 100");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
  $table .= '<div class="col-sm-4"><div class="panel panel-default"><div class="panel-body"><h2>'.$row["TITRE"].'</h2>';
  $table .= '<a href="search.php?q='.$row["AUTEUR"].'">'.$row["AUTEUR"].'</a></div><div class="panel-footer"> '.$categ[$row["CAT"]].'<a class="btn btn-primary pull-left btn-xs" onclick="reserver('.$row["ID"].')"><i class="fa fa-plus"></i> إضافة</a></div></div></div>';
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

body {padding-top: 70px}
h2 {padding-top: 5px;margin-top:0}
.panel-body {height:100px;overflow-y: hidden;}
     </style>
  </head>
  <body>
<?php include 'inc/nav.php'; ?>


<div class="container-fluid" >
<div class="row">
<div class="col-md-4">
  <div class="list-group">
  <!-- <a href="#" class="list-group-item ">
    categories
  </a>
  <a href="#" class="list-group-item">categories</a>
  <a href="#" class="list-group-item">categories</a>
  <a href="#" class="list-group-item">categories</a>-->
  <a href="?cat=0" class="list-group-item ">كل الأقسام</a>
  <?php
print $cats;
   ?>
</div>
</div>

<div class="col-md-8">

<div class="row" id="res">

<!-- <div class="col-sm-4">
  <div class="panel panel-default">
  <div class="panel-body">
    <h2>titre</h2>
    <p>auteur</p>
  </div>
  <div class="panel-footer">
    categorie
    <a class="btn btn-primary pull-left btn-xs"><i class="fa fa-plus"></i> إضافة</a></div>
</div>
</div> -->


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
