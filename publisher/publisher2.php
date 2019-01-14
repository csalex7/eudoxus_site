<?php
include_once '../Config.php';
session_start();

if(!isset($_SESSION['login_user'])){
  echo "not set ";
  $_SESSION['prev_loc'] = '/eudoxus_site/publisher/publisher2.php';
  header("location: ../login.php");
}


$username = $_SESSION['login_user'] ;
$query = "SELECT * FROM users WHERE users.username='$username' and category='ekdotis';";
$result = mysqli_query($db,$query);
$resultCheck= mysqli_num_rows($result);
if ($resultCheck <= 0) {
  echo "Πρόσβαση μόνο σε εκδότες";
  header("location: ./error_page.php");
}
include('../partials/header.php');

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

<link href="../css/publisher.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/index.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="publisher.php">Εκδότης</a></li>
    <li class="breadcrumb-item active" aria-current="page">Διαχείρηση Συγγραμμάτων</li>
  </ol>
</nav>




  

  <?php
  $username = $_SESSION['login_user'] ;
  $query="SELECT books.title,books.isbn,books.author,books.category,suggramata_ekdoti.quantinty FROM users,suggramata_ekdoti,books WHERE users.username='$username' and suggramata_ekdoti.isbn=books.isbn and suggramata_ekdoti.username_ekdoti=users.username and users.category='ekdotis' ;"; /*anti gia ekdotis1 to kanoniko username*/
  $result = mysqli_query($db,$query);
  $resultCheck= mysqli_num_rows($result);
  echo "<p class='wrap container' style='align:center;color:#bfbfbf;'></p>";
  if ($resultCheck > 0) {
    $i=1;
    while($row= mysqli_fetch_assoc($result)){
    ?>
   	 <?php
      echo "<div class='container' id='rcorners' style='width:15%;height:auto;clear: both;'> ";
      echo "<p style='color:#595959;'>";
      echo $i.".";
      echo '<div float="right">';
      echo "<b>Τίτλος:</b>". $row['title']; echo "<br>"; 
      echo "<b>ISBN</b>:". $row['isbn']; echo "<br>";
      echo "<b>Συγγραφέας:</b>". $row['author']; echo "<br>";
      echo "<b>Κατηγορία:</b>". $row['category']; echo "<br>";
      echo "<b>Διαθέσιμα Αντίτυπα:</b>". $row['quantinty']; echo "<br>";
      echo "<a href=delete_book.php?isbn=".$row['isbn']."><b>Αφαίρεση </b></a>";// echo "<br>";
      echo "<a href=update_book.php?isbn=".$row['isbn']."><b> Αλλαγή στοιχείων</b></a>";
      echo "</p> </div>";
      $i = $i + 1;
      ?>
        <?php
      echo "</div> <br>";
       ?>
 <?php
    }
  } 
 
  ?>



<a href="publisher.php" class="previous2"><i style="font-size:36px" class="fas fa-angle-left"></i></a>
<a href="publisher3.php" class="publisher_add"><i class="fas fa-plus"></i><p>Προσθήκη Συγγράματος</p></a>


<?php
   include('../partials/footer.html');
?>
