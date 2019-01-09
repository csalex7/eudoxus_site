<?php
include_once('../partials/header.php');
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/declaration.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">Φοιτητής</li>
    <li class="breadcrumb-item active" aria-current="page">Δήλωση Μαθημάτων</li>
        <li class="options">
          <p id="option1"><a class="badge badge-light" href="/signin">ΒΟΗΘΕΙΑ</a></p>
          <p id="option12"><a class="badge badge-light" href="/signin">ΑΝΑΖΗΤΗΣΗ ΒΙΒΛΙΩΝ</a></p>
        </li>
  </ol>
</nav>




<div class="container" id="uni">
    <h5> Σε ποιο πανεπιστήμιο ανήκετε; </h5>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Πανεπιστήμια
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a class="badge " href="declaration2.php">
              <button class="dropdown-item" type="button">EKΠΑ</button>
          </a>
          <a class="badge " href="declaration2.php">
              <button class="dropdown-item" type="button">ΠΑΠΕΙ</button>
          </a>
          <a class="badge " href="declaration2.php">
              <button class="dropdown-item" type="button">ΑΣΣΟΕ</button>
          </a>
      </div>
    </div>
</div>





<?php
include_once('../partials/footer.html');
?>
