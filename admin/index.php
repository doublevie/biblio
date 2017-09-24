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






   </body>
   <script type="text/javascript" src="../libs/jquery/dist/jquery.js">  </script>
   <script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.js">  </script>


  </html>
