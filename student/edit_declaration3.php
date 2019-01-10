<?php
include_once '../Config.php';


session_start();
$user=$_SESSION['login_user'];
$old_isbn=$_GET['old_isbn'];
$isbn=$_GET['isbn'];

$query="UPDATE dhlwseis SET isbn='$isbn' WHERE isbn='$old_isbn' and foititis='$user';";
$result = mysqli_query($db,$query);
if($result){
	header("refresh:0; url=edit_declaration.php");
}
else{
	echo "Η αλλαγή δήλωσης του βιβλίου απέτυχε.";
}
?>