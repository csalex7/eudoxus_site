<?php
    include_once('../Config.php');
    session_start();
    if(!isset($_SESSION['login_user'])){
         echo "not set ";
         $_SESSION['prev_loc'] = '/eudoxus_site/student/edit_declaration.php';
         header("location: ../login.php");
    }
    include_once('../partials/header.php');
    $user=$_SESSION['login_user'];
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">
<link href="../css/declaration.css" rel="stylesheet">


<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/landing.php">Αρχική</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="/eudoxus_site/student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Τροποποίηση Δήλωσης</li>
        <li class="options">
          <p id="option1"><a class="badge badge-light" href="#">ΒΟΗΘΕΙΑ</a></p>
          <p id="option12"><a class="badge badge-light" href="#">ΑΝΑΖΗΤΗΣΗ ΒΙΒΛΙΩΝ</a></p>
        </li>
  </ol>
</nav>

<?php

$query="SELECT suggramata_mathimatwn.Mathima,books.title,books.author,books.isbn,suggramata_mathimatwn.eksamino FROM books,dhlwseis,suggramata_mathimatwn,users WHERE users.category='Foititis' and users.username='$user' and dhlwseis.foititis='$user' and dhlwseis.isbn=suggramata_mathimatwn.isbn and books.isbn=dhlwseis.isbn;";
$result = mysqli_query($db,$query);
  $resultCheck= mysqli_num_rows($result);
  ?>

  <div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin-left:40%;">
    <div class="card-header">Η δήλωση σας</div>
      <div class="card-body">
          <div class="vscrolling_container">
              <div class="row">
                  <div class="col-lg-12">
                      <?php
                      if ($resultCheck > 0) {
                        while($row= mysqli_fetch_assoc($result)){
                      ?>
                       	  <p class="book_container">
                       	 <?php
                          echo "Σύγγραμμα: ". $row['title']; echo "<br>";
                          ?>

                          <a class="badge badge-light " href="#" data-toggle="popover" data-html="true"  data-placement="top" data-content=" Συγγραφέας: <?php echo $row['author'] ?> <br/> isbn: <?php echo $row['isbn'] ?> <br/> Μάθημα: <?php echo $row['Mathima'] ?> <br/> Εξάμηνο: <?php echo $row['eksamino']; ?>">Πληροφορίες Συγγράμματος</a>
                          <a id="change_book" class="btn btn-warning" href="edit_declaration2.php?mathima=<?php echo $row['Mathima'];?>&old_isbn=<?php echo $row['isbn']; ?>" >Αλλαγή Συγγράμματος</a> </button>

                          </p>
                         <?php
                          echo "<br>";
                        }
                      }
                     ?>



 </div>
     </div>
         </div>
             </div>
                 </div>
                     </div>
