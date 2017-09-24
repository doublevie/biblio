<?php

$login = $_POST['user'];
$pass = $_POST['pass'];


if ($login == 'admin' && $pass == '0000') {
  setcookie('ADMIN', '1', time() + (86400 * 30), "/"); // 86400 = 1 day
print 1;
} else {
  print '0';
}


 ?>
