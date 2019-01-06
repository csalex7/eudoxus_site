<?php
include_once 'Config.php';

$query="DELETE FROM suggrammata WHERE id='$_GET[id]'";
$result = mysqli_query($db,$query);
if($result){
	header("refresh:1; url=publisher2.php");
}
else{
	echo "Η αφαίρεση του βιβλίου απέτυχε.";
}
?>