<?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
     unset($_COOKIE['ADMIN']);
     setcookie('ADMIN', null, -1, '/');
  }
}


include '_check.php';

include '../inc/conf.php';





if (isset($_POST['addcat'])) {
  $cat = $_POST['addcat'];
  $add = "INSERT INTO categories (NOM_CAT) VALUES ('$cat')";
$conn->query($add);
}






$cats = "";
$result = $conn->query("SELECT * FROM categories");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row["ID"];
      $name =  $row["NOM_CAT"];
$cats .= "<tr><td>$id</td><td>$name</td></tr>";

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

  <h3>اضافة  قسم</h3>
<form class="" action="categories.php" method="post">

<div class="row">
<div class="col-sm-4">
  <input type="text" class="form-control" name="addcat" value="" required>

</div>
<div class="col-md-3">
<button type="submit" class="btn btn-success" name="button">اضافة</button>
</div>
</div>

</form>


<hr>
  <h3>الاقسام</h3>
  <table class="table table-bordered table-striped">
<!-- <tr>
  <td>id</td>
  <td>categorie</td>
</tr> -->

<?php print $cats; ?>


</table>


</div>
</div>









   </body>
   <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
   <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>


  </html>
