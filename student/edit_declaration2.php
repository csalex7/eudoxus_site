<?php
include_once '../Config.php';
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">

<?php
session_start();
$user=$_SESSION['login_user'];
$old_isbn=$_GET['old_isbn'];
$result=0;
if(isset($_GET['mathima'])){
	$mathima=$_GET['mathima'];
	$query="SELECT books.title,books.author,books.isbn FROM suggramata_mathimatwn,books WHERE suggramata_mathimatwn.Mathima='$mathima' and books.isbn=suggramata_mathimatwn.isbn;";
	$result = mysqli_query($db,$query);
      while($row= mysqli_fetch_assoc($result)){
?>
   	  <p class="book_container">
   	  <?php
      echo "Τίτλος:". $row['title']; echo "<br>"; 
      echo "Συγγραφέας:". $row['author']; echo "<br>";
      echo "ISBN:". $row['isbn']; echo "<br>";
      echo "<a href=edit_declaration3.php?isbn=".$row['isbn']. "&old_isbn=$old_isbn>Δήλωση Βιβλίου</a>"; //kratame to palio isbn gia na 3eroume ti 8a alla3oume
      ?>
      </p>
        <?php
      echo "<br>";
       ?>
 <?php
    }
  } 
 ?>
