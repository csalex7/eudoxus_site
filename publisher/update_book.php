<?php
include_once '../Config.php';
?>
<link href="../css/publisher.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">
<link href="../css/form.css" rel="stylesheet">

<?php
session_start();
$user=$_SESSION['login_user'];

$result=0;
if(isset($_GET['isbn'])){
	$isbn=$_GET['isbn'];
	$query="SELECT books.title,books.isbn,books.author,books.category,suggramata_ekdoti.quantinty FROM users,suggramata_ekdoti,books WHERE users.category='ekdotis' and users.username='$user' and suggramata_ekdoti.username_ekdoti='$user' and suggramata_ekdoti.isbn=books.isbn and books.isbn='$isbn';"; /*anti gia ekdotis1 to kanoniko username*/
	$res = mysqli_query($db,$query);
	$row= mysqli_fetch_array($res);
}
if(isset($_POST['newisbn'])){
	$newisbn= $_POST['newisbn'];
	$isbn=$_POST['isbn'];
	$query="UPDATE suggramata_ekdoti SET isbn='$newisbn' WHERE isbn='$isbn' ";
	$result = mysqli_query($db,$query);
	$query="UPDATE books SET isbn='$newisbn' WHERE isbn='$isbn' ";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newtitle'])){
	$newtitle= $_POST['newtitle'];
	$isbn=$_POST['isbn'];
	$query="UPDATE books SET title='$newtitle' WHERE isbn='$isbn' ; ";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newauthor'])){
	$newauthor=$_POST['newauthor'];
	$query="UPDATE books SET author='$newauthor' WHERE isbn='$isbn'";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newcategory'])){
	$newcategory=$_POST['newcategory'];
	$query="UPDATE books SET category='$newcategory' WHERE isbn='$isbn'";
	$result = mysqli_query($db,$query);
}
if(isset($_POST['newquantinty'])){
	$newquantinty=$_POST['newquantinty'];
	$query="UPDATE suggramata_ekdoti SET quantinty='$newquantinty' WHERE isbn='$isbn'";
	$result = mysqli_query($db,$query);
}
//echo "<meta http-equiv='refresh' content='0:url=publisher2.php'>";
if($result){
	header("refresh:0; url=publisher2.php");
}

?>
<div id="id01" class="modal" >
<form action="update_book.php" class="modal-content" method="POST" style="width : 45%;">
<div class="container">
	<h1>Τροποποίηση Συγγράμματος</h1>
    <hr>
Τίτλος: <input type="text" name="newtitle" value="<?php echo $row[0]; ?>"></br>
ISBN: <input type="text" name="newisbn" value="<?php echo $row[1]; ?>"></br>
Συγγραφέας: <input type="text" name="newauthor" value="<?php echo $row[2]; ?>"></br>
Κατηγορία: <input type="text" name="newcategory" value="<?php echo $row[3]; ?>"></br>
Διαθέσιμα αντίτυπα: <input type="text" name="newquantinty" value="<?php echo $row[4]; ?>"></br>
<input type="hidden" name="isbn" value="<?php echo htmlspecialchars($_GET["isbn"]); ?>">
<div class="clearfix">
        <button type="submit" class="signupbtn">Τροποποίηση</button>
        <a href="./publisher2.php">
        <button type="button"  class="cancelbtn">Ακύρωση</button>
        </a>
<!--<input type="submit" name="add" value="Προσθήκη"> -->
</form>
</div>

</form>
</div>
