<?php
error_reporting(E_ALL);

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
     unset($_COOKIE['USERID']);
     setcookie('USERID', null, -1, '/');
     unset($_COOKIE['USERNAME']);
     setcookie('USERNAME', null, -1, '/');
  }
}





if(!isset($_COOKIE['USERID']) ||  !isset($_COOKIE['USERNAME'])) {
include 'login.php';
die();
} elseif ($_COOKIE['USERVALID'] == '0'){
$USERID = $_COOKIE['USERID'];
include 'inc/conf.php';
  $result = $conn->query("SELECT * FROM lecteurs WHERE ID='$USERID'");
  // print $result->num_rows ;die();
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         if ($row["VALIDE"] == '0') {
        include 'done.php';
        die();
      } else {
      //  print 'abc';
      }
      }
  }
}

include 'home.php';



 ?>
