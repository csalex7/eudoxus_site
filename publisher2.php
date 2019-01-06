<?php
include_once 'Config.php';
include('partials/header.php');
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="publisher.html">Εκδότης</a></li>
    <li class="breadcrumb-item active" aria-current="page">Διαχείρηση Συγγραμμάτων</li>
  </ol>
</nav>




<div class="book_list">
  <?php
  
  $query="SELECT * FROM suggrammata WHERE publisher_username='publisher2';";
  $result = mysqli_query($db,$query);
  $resultCheck= mysqli_num_rows($result);
  if ($resultCheck > 0) {
    while($row= mysqli_fetch_assoc($result)){
      echo "Τίτλος:". $row['title']; echo "<br>"; 
      echo "ISBN:". $row['isbn']; echo "<br>";
      echo "Συγγραφέας:". $row['author']; echo "<br>";
      echo "Κατηγορία:". $row['category']; echo "<br>";
      echo "Διαθέσιμα Αντίτυπα:". $row['quantity']; echo "<br>";
      echo "<a href=delete_book.php?id=".$row['id'].">Αφαίρεση</a>";
      echo "<a href=update_book.php?id=".$row['id'].">Αλλαγή στοιχείων</a>";
      echo "<br>";
      echo "<br>";
      
    }
  } 
 
  ?>
</div>


<a href="publisher.html" class="previous">&#8678;Πίσω</a>
<a href="publisher3.php" class="publisher_add">Προσθήκη συγγράμματος</a>


<?php
   include('partials/footer.php');
?>