<?php
include_once '../Config.php';
//$user=$_SESSION['login_user'];
$query="DELETE FROM suggramata_ekdoti WHERE isbn='$_GET[isbn]' and username_ekdoti='ekdotis2';"; //username_ekdoti=to user pou eimaste sundedemenoi
$result = mysqli_query($db,$query);
if($result){
	header("refresh:1; url=publisher2.php");
}
else{
	echo "Η αφαίρεση του βιβλίου απέτυχε.";
}
?>