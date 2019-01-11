<?php
include_once '../Config.php';
session_start();
if(!isset($_SESSION['login_user'])){
         echo "not set ";
         header("location: ../login.php");
    }
include_once '../partials/header.php';
include_once '../partials/footer.html';
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="../landing.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="../student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ανταλλαγή Συγγραμμάτων</li>
  </ol>
</nav>

<?php
$user=$_SESSION['login_user'];

$query="SELECT books.title,suggramata_mathimatwn.Mathima,suggramata_mathimatwn.eksamino,suggramata_foititi.exchange,suggramata_foititi.isbn FROM books,users,suggramata_foititi,suggramata_mathimatwn WHERE users.category='Foititis' and users.username='$user' and  suggramata_foititi.username_foititi='$user' and suggramata_foititi.isbn=books.isbn and suggramata_mathimatwn.isbn=books.isbn and suggramata_mathimatwn.isbn=suggramata_foititi.isbn and suggramata_mathimatwn.tmima=users.tmima and suggramata_foititi.delivered='1';";
$result= mysqli_query($db,$query);
$resultCheck= mysqli_num_rows($result);
  if ($resultCheck > 0) {
    while($row= mysqli_fetch_assoc($result)){
    ?>
   	  <p class="book_container">
   	 <?php

      echo "Μάθημα:". $row['Mathima']; echo "<br>";
      echo "Εξάμηνο:". $row['eksamino']; echo "<br>"; 
      echo "Τίτλος:". $row['title']; echo "<br>";
      if($row['exchange']==0){
      	echo "<a href=trade_books2.php?isbn=".$row['isbn']. "&exchange=1>Δήλωση Βιβλίου για ανταλλαγή</a>";
      }
      if($row['exchange']==1){
      	echo "<a href=trade_books2.php?isbn=".$row['isbn']. "&exchange=0>Ακύρωση ανταλλαγής</a>";
      }
      
      ?>
      </p>
        <?php
      	echo "<br>";
       ?>
 <?php
    }
  } 
 
  ?>