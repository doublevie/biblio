<?php
include 'inc/conf.php';
$user = $_POST['user'] ;
$pass = md5($_POST['pass']);


$result = $conn->query("SELECT * FROM lecteurs WHERE PSEUDO LIKE '$user' AND PASSE='$pass'");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      setcookie('USERID',  $row["ID"], time() + (86400 * 30), "/");
      setcookie('USERNAME',  $row["PSEUDO"], time() + (86400 * 30), "/");
      setcookie('USERVALID',  $row["VALIDE"], time() + (86400 * 30), "/");
print '1';die();
    }
} else {
  include 'home.php';
}



 ?>
