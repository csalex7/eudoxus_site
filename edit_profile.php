<?php
include_once 'Config.php';
?>
<link href="css/app.css" rel="stylesheet">
<link href="css/publisher.css" rel="stylesheet">

<?php
session_start();
$user=$_SESSION['login_user'];

$query="SELECT * FROM users WHERE username='$user' ";
$result = mysqli_query($db,$query);
$row= mysqli_fetch_array($result);
$result=0;
if(isset($_POST['newpass'])){
	$newpass= $_POST['newpass'];
	$query="UPDATE users SET password='$newpass' WHERE username='$user' ";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newmail'])){
	$newmail= $_POST['newmail'];
	$query="UPDATE users SET email='$newmail' WHERE username='$user' ";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newphone'])){
	$newphone= $_POST['newphone'];
	$query="UPDATE users SET Phone='$newphone' WHERE username='$user' ";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newtmima'])){
	$newtmima= $_POST['newtmima'];
	$query="UPDATE users SET tmima='$newtmima' WHERE username='$user'";
	$result = mysqli_query($db,$query);
}
if($result){
	header("refresh:0; url=index.php");
}
?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
	border-radius: 5px;
  padding: 14px 20px;
  background-color: #f44336;
  float: right;
  width: 20%;
  margin: 20px;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
	border-radius: 5px;
  float: left;
  width: 20%;
  margin: 20px;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  /*display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

<div id="id01" class="modal" >
<form action="edit_profile.php" class="modal-content" method="POST" style="width : 45%;">
<div class="container">
	<h1>Επεξεργασία Προσωπικών Στοιχείων</h1>
    <hr>
Όνομα χρήστη: <input type="text" disabled name="newuser" value="<?php echo $row[0]; ?> "></br>
Κωδικός πρόσβασης: <input type="text" name="newpass" value="<?php echo $row[1]; ?> "></br>
Όνομα: <input type="text" disabled name="name" value="<?php echo $row[2]; ?> "></br>
Επώνυμο: <input type="text" disabled name="surname" value="<?php echo $row[3]; ?> "></br>
Email: <input type="text" name="newmail" value="<?php echo $row[4]; ?>"></br>
Τηλέφωνο: <input type="text" name="newphone" value="<?php echo $row[5]; ?>"></br>
Κατηγορία: <input type="text" disabled name="category" value="<?php echo $row[6]; ?>"></br>
<?php 
$username = $_SESSION['login_user'] ;
$query = "SELECT * FROM users WHERE users.username='$username' and category='ekdotis';";
$result = mysqli_query($db,$query);
$resultCheck= mysqli_num_rows($result);
if ($resultCheck <= 0) {
  echo 'Τμήμα: <input type="text" name="newtmima" value="'.$row[7].'"></br>';
}
?>

<div class="clearfix">
        <button type="submit" class="signupbtn">Αποθήκευση</button>
        <a href="index.php">
        <button type="button"  class="cancelbtn">Ακύρωση</button>
        </a>
        
</div>
</div>
</form>
</div>