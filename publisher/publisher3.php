<?php
   //include('../partials/header.php');
?>

<link href="../css/publisher.css" rel="stylesheet">
<link href="../css/form.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/landing.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="publisher.php">Εκδότης</a></li>
    <li class="breadcrumb-item"><a href="publisher2.php">Διαχείρηση Συγγραμμάτων</a></li>
    <li class="breadcrumb-item active" aria-current="page">Προσθήκη Συγγράμματος</li>
  </ol>
</nav>


<a href="publisher2.php" class="previous">&#8678;Πίσω</a>
<?php 
 session_start();
 $username = $_SESSION['login_user'] ;
?>
<div id="id01" class="modal" >
<form action="add_book.php"  class="modal-content" method="POST" style="width : 45%;"> <!--allagi to username -->
<div class="container">
	<h1>Προσθήκη Συγγράμματος</h1>
    <hr>

<label for="title">Τίτλος:</label>  <input type="text" name="title" /><br/>
<label for="ISBN">ISBN:</label>  <input type="text" name="ISBN" /><br/>
<label for="author">Συγγραφέας:</label>  <input type="text" name="author" /><br/>
<label for="category">Κατηγορία:</label>  <input type="text" name="category" /><br/>
<label for="available_books">Διαθέσιμα αντίτυπα:</label>  <input type="number" name="available_books" style="width:10%; height: 1%;"/><br/>

<div class="clearfix">
        <button type="submit" class="signupbtn">Προσθήκη</button>
        <a href="./publisher2.php">
        <button type="button"  class="cancelbtn">Ακύρωση</button>
        </a>
<!--<input type="submit" name="add" value="Προσθήκη"> -->
</form>
</div>


<?php
   //include('../partials/footer.html');
?>
