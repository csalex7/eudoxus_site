<?php
include_once '../Config.php';
session_start();
if(!isset($_SESSION['login_user'])){
         echo "not set ";
         header("location: ../login.php");
    }
include_once('../partials/header.php');
include_once('../partials/footer.html');
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="../landing.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="../student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Τροποποίηση Δήλωσης</li>
  </ol>
</nav>

<?php
//session_start();
$user=$_SESSION['login_user'];

$query="SELECT suggramata_mathimatwn.Mathima,books.title,books.author,books.isbn,suggramata_mathimatwn.eksamino FROM books,dhlwseis,suggramata_mathimatwn,users WHERE users.category='Foititis' and users.username='$user' and dhlwseis.foititis='$user' and dhlwseis.isbn=suggramata_mathimatwn.isbn and books.isbn=dhlwseis.isbn;";
$result = mysqli_query($db,$query);
  $resultCheck= mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while($row= mysqli_fetch_assoc($result)){
    ?>
   	  <p class="book_container">
   	 <?php
      echo "Μάθημα:" . $row['Mathima']; echo "<br>";
      echo "Εξάμηνο:" . $row['eksamino']; echo "<br>";
      echo "Τίτλος:". $row['title']; echo "<br>"; 
      echo "Συγγραφέας:". $row['author']; echo "<br>";
      echo "ISBN:". $row['isbn']; echo "<br>"; 
      echo "<a href=edit_declaration2.php?mathima=".$row['Mathima']. "&old_isbn=".$row['isbn'].">Αλλαγή βιβλίου</a>";
      ?>
      </p>
        <?php
      echo "<br>";
       ?>
 <?php
    }
  } 
 ?>