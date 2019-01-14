<?php
include_once '../Config.php';
include_once('../partials/header.php');
include_once('../partials/footer.html');

?>

<style>
  .wrap{
    width: 30%;
    /*position: absolute;*/
    top: 20%;
    left: 50%;
    /*transform: translate(-50%, -50%);*/
  }
  #rcorners {
        border-radius: 15px 50px;
        background: #a3b1ce;
        padding: 20px; 
        width: 200px;
        height: 150px; 
  }
  </style>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="../student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item"><a href="../student/edit_declaration.php">Τροποποίηση Δήλωσης</a></li>
    <li class="breadcrumb-item active" aria-current="page">Αλλαγή βιβλίου</li>
  </ol>
</nav>
<br>

<?php
//session_start();
$user=$_SESSION['login_user'];
$old_isbn=$_GET['old_isbn'];
$result=0;
if(isset($_GET['mathima'])){
	$mathima=$_GET['mathima'];
  $_SESSION['mathima_dhlwsis']=$mathima;
	$query="SELECT books.title,books.author,books.isbn FROM suggramata_mathimatwn,books WHERE suggramata_mathimatwn.Mathima='$mathima' and books.isbn=suggramata_mathimatwn.isbn;";
	$result = mysqli_query($db,$query);
      while($row= mysqli_fetch_assoc($result)){

   	  echo "<div class='container' id='rcorners' style='width:15%;height:auto;clear: both;'> ";
      echo "<p style='color:#595959;'>";
   	  
      echo "<b>Τίτλος:</b>". $row['title']; echo "<br>"; 
      echo "<b>ISBN</b>:". $row['isbn']; echo "<br>";
      echo "<b>Συγγραφέας:</b>". $row['author']; echo "<br>";
      echo "<a href=edit_declaration3.php?isbn=".$row['isbn']. "&old_isbn=$old_isbn>Δήλωση Βιβλίου</a>"; //kratame to palio isbn gia na 3eroume ti 8a alla3oume
      echo "</div> </p>"
      ?>
      </div>
        <?php
      echo "<br>";
       ?>
 <?php
    }
  } 
 ?>
