<?php
   include('../partials/header.php');
?>

<link href="../css/publisher.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="publisher.php">Εκδότης</a></li>
    <li class="breadcrumb-item"><a href="publisher2.php">Διαχείρηση Συγγραμμάτων</a></li>
    <li class="breadcrumb-item active" aria-current="page">Προσθήκη Συγγράμματος</li>
  </ol>
</nav>


<a href="publisher2.php" class="previous">&#8678;Πίσω</a>
<div align="center" class="container_form">
<form action="add_book.php?username=publisher2" method="POST">

<label for="title">Τίτλος:</label>  <input type="text" name="title" /><br/>
<label for="ISBN">ISBN:</label>  <input type="text" name="ISBN" /><br/>
<label for="author">Συγγραφέας:</label>  <input type="text" name="author" /><br/>
<label for="category">Κατηγορία:</label>  <input type="text" name="category" /><br/>
<label for="available_books">Διαθέσιμα αντίτυπα:</label>  <input type="number" name="available_books" /><br/>

<button class="publisher_add" type="submit" name="submit">Προσθήκη</button>
<!--<input type="submit" name="add" value="Προσθήκη"> -->
</form>
</div>


<?php
   include('../partials/footer.html');
?>
