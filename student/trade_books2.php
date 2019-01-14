<?php
include_once '../Config.php';


session_start();
$user=$_SESSION['login_user'];
$exchange=$_GET['exchange'];
$isbn=$_GET['isbn'];
$mathima=$_GET['mathima'];

$query="UPDATE suggramata_foititi SET exchange='$exchange' WHERE isbn='$isbn' and username_foititi='$user' and mathima='$mathima';";
$result = mysqli_query($db,$query);
if($result){
	header("refresh:0; url=trade_books.php");
}
else{
	echo "Η αλλαγή δήλωσης του βιβλίου απέτυχε.";
}
?>