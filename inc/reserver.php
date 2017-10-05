<?php
sleep(1);
if (!$_COOKIE['USERID']) die();
include 'conf.php';


$ouvID= $_GET['ouv'];
$lectID = $_COOKIE['USERID'];




$result = $conn->query("SELECT COUNT(ID) AS CID FROM reservation WHERE LECTID =$lectID  AND DATE_RECUP ='' ");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
if ($row["CID"] >= 2) {
  die(' u cant res more than 2');
} else {
  print $row["CID"];
}
}
}





$addQuery ="INSERT INTO
reservation (LECTID,OUVID,DATE_RES,DATE_DELAI,DATE_RECUP)VALUES ('$lectID','$ouvID',NOW(),DATE_ADD(CURDATE(), INTERVAL 15 DAY),'' )";

if ($conn->query($addQuery)){
  print '';
} else {
  print '';
  die(mysqli_error($conn));
}

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }







/*
reservation

ID
LECTID
OUVID
DATE_RESERV
DELAI
DATE_RECUP





*/
 ?>
