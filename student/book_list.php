<?php
include_once '../Config.php';
include_once '../partials/header.php'
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">


<?php
$user=$_GET['username'];
/*$query="SELECT books.title FROM suggramata_foititi,books,users WHERE users.category='Foititis' and users.username='$user' and  suggramata_foititi.username_foititi='$user' and suggramata_foititi.isbn=books.isbn;";*/
$query="SELECT books.title,suggramata_mathimatwn.Mathima,suggramata_mathimatwn.eksamino FROM books,users,suggramata_foititi,suggramata_mathimatwn WHERE users.category='Foititis' and users.username='$user' and  suggramata_foititi.username_foititi='$user' and suggramata_foititi.isbn=books.isbn and suggramata_mathimatwn.isbn=books.isbn and suggramata_mathimatwn.isbn=suggramata_foititi.isbn and suggramata_mathimatwn.tmima=users.tmima and suggramata_foititi.delivered='1';";
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
      
      ?>
      </p>
        <?php
      	echo "<br>";
       ?>
 <?php
    }
  } 
 
  ?>

