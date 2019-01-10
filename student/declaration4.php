<?php
include_once('../Config.php');
include_once('../partials/header.php');
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/declaration.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/landing.php">Αρχική</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="/eudoxus_site/student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Δήλωση Συγγραμμάτων</li>
        <li class="options">
          <p id="option1"><a class="badge badge-light" href="#">ΒΟΗΘΕΙΑ</a></p>
          <p id="option12"><a class="badge badge-light" href="#">ΑΝΑΖΗΤΗΣΗ ΒΙΒΛΙΩΝ</a></p>
        </li>
  </ol>
</nav>


<?php
    $name = $_GET['isbn'];
    $student = $_SESSION['login_user'];
    foreach ($name as $isbn){
        $query="INSERT INTO dhlwseis(foititis,isbn) VALUES ('$student','$isbn');";
        mysqli_query($db,$query);
    }
?>


<div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Η ΔΗΛΩΣΗ ΣΑΣ ΟΛΟΚΛΗΡΩΘΗΚΕ
          <i class="fas fa-check"></i>
      </h1>
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-success btn-lg" href="student.php" role="button"><i class="fas fa-long-arrow-alt-left"></i>  Πίσω στον Φοιτητή</a>
      </p>
    </div>
</div>




<?php
include_once('../partials/footer.html');
?>
