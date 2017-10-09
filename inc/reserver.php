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
  die(' <div class="alert alert-danger" role="alert"><h3>لقد تجاوزت عدد الكتب المتاحة للحجز</h3></div>');
} else {
//  print $row["CID"];
}
}
}

$result = $conn->query("SELECT * FROM ouverages WHERE ID =$ouvID  ");
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
 if ($row["QT_DISPONIBLE"] < 1) {

   die(' <div class="alert alert-danger" role="alert"><h3>الكتاب غير متوفر حاليا</h3></div>');
 } else {
   $Qtdisp = $row["QT_DISPONIBLE"];
 }

}
}

$Qtdisp--;

$addQuery ="INSERT INTO reservation (LECTID,OUVID,DATE_RES,DATE_DELAI,DATE_RECUP,TOK)VALUES ('$lectID','$ouvID',NOW(),DATE_ADD(CURDATE(), INTERVAL 15 DAY),'','0' )";
$update =" UPDATE ouverages SET QT_DISPONIBLE = $Qtdisp WHERE ID =$ouvID ";




if ($conn->query($addQuery) && $conn->query($update)){
  print '<div class="alert alert-success" role="alert"><h3>تم اضافة الكتاب الى قائمة حجوزاتك</h3></div>';
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
