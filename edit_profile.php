<?php
include_once 'Config.php';
?>
<link href="css/app.css" rel="stylesheet">
<link href="css/publisher.css" rel="stylesheet">

<?php
session_start();
$user=$_SESSION['login_user'];

$query="SELECT * FROM users WHERE username='$user' and category='Foititis'";
$result = mysqli_query($db,$query);
$row= mysqli_fetch_array($result);
$result=0;
if(isset($_POST['newpass'])){
	$newpass= $_POST['newpass'];
	$query="UPDATE users SET password='$newpass' WHERE username='$user' and category='Foititis'";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newmail'])){
	$newmail= $_POST['newmail'];
	$query="UPDATE users SET email='$newmail' WHERE username='$user' and category='Foititis'";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newphone'])){
	$newphone= $_POST['newphone'];
	$query="UPDATE users SET Phone='$newphone' WHERE username='$user' and category='Foititis'";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newtmima'])){
	$newtmima= $_POST['newtmima'];
	$query="UPDATE users SET tmima='$newtmima' WHERE username='$user' and category='Foititis'";
	$result = mysqli_query($db,$query);
}
if($result){
	header("refresh:0; url=student/student.php");
}
?>


<div class="container_form" >
<form action="edit_profile.php" class="container_form" method="POST">
Όνομα χρήστη: <input type="text" disabled name="newuser" value="<?php echo $row[0]; ?> "></br>
Κωδικός πρόσβασης: <input type="text" name="newpass" value="<?php echo $row[1]; ?> "></br>
Όνομα: <input type="text" disabled name="name" value="<?php echo $row[2]; ?> "></br>
Επώνυμο: <input type="text" disabled name="surname" value="<?php echo $row[3]; ?> "></br>
Email: <input type="text" name="newmail" value="<?php echo $row[4]; ?>"></br>
Τηλέφωνο: <input type="text" name="newphone" value="<?php echo $row[5]; ?>"></br>
Κατηγορία: <input type="text" disabled name="category" value="<?php echo $row[6]; ?>"></br>
Τμήμα: <input type="text" name="newtmima" value="<?php echo $row[7]; ?>"></br>



<input type="submit" value="Αποθήκευση">
</form>
</div>