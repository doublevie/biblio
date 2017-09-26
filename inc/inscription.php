<?php
sleep(1);
extract($_POST);
if (strlen($PSEUDO)   < 4 ) {
  print '0;PSEUDO;اسم المستخدم قصير جدا ';
  die();
}
if ($PASSE !==  $PASSE2) {
  print '0;PASSE2;كلمة السر غير متطابقة ';
  die();
}

if (strlen($PASSE) < 4) {
  print '0;PASSE; كلمة السر قصيرة جدا';
  die();
}





include 'conf.php';

$result = $conn->query("SELECT * FROM lecteurs WHERE PSEUDO LIKE '$PSEUDO'");
if ($result->num_rows > 0) {
print '0;PSEUDO;اسم المستخدم غير متوفر يرجى اختيار اسم مستخدم اخر';
die();
}

$PASSE = md5($PASSE);


$add = "INSERT INTO lecteurs (PSEUDO,NOM,PRENOM,DATE_NAISSANCE,ADRESSE,ANNE,PASSE,VALIDE) VALUES ('$PSEUDO','$NOM','$PRENOM','$DATE_NAISSANCE','$ADRESSE','$ANNE','$PASSE','0')";
if ($conn->query($add)){
  print '1;تمت العملية بنجاح';
} else {
  print '0;خطأ في الاتصال بقاعدة البيانات';
}










 ?>
