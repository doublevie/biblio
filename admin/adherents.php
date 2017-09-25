<?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
     unset($_COOKIE['ADMIN']);
     setcookie('ADMIN', null, -1, '/');
  }
}


include '_check.php';

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

  <h1>liste d'attente</h1>
<table class="table table-bordered table-striped">
<tr>
  <th>nom</th>
  <th>email</th>
  <th>pseudo</th>
  <td>categorie</td>
  <th width="50px">action</th>
  <th width="50px">suprimmer</th>
</tr>


<tr>
  <td>fares</td>
  <td>email@gmail.com</td>
  <td>pseudo</td>
  <td>categorie</td>
  <td><a href="?accept=15" class="btn btn-success">Accept</a></td>
  <td><a href="?del=15" class="btn btn-danger">del</a></td>
</tr>

<tr>
  <td>fares</td>
  <td>email@gmail.com</td>
  <td>pseudo</td>
  <td>categorie</td>

  <td><a href="?accept=15" class="btn btn-success">Accept</a></td>
  <td><a href="?del=15" class="btn btn-danger">del</a></td>
</tr>




</table>


</div>
</div>









   </body>
   <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
   <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>


  </html>
