<?php
include_once('../partials/header.php');
?>

<link href="../css/student.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/landing.php">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">Φοιτητής</li>
        <li class="options">
          <p id="option1"><a class="badge badge-light" href="/signin">ΒΟΗΘΕΙΑ</a></p>
          <p id="option12"><a class="badge badge-light" href="/signin">ΑΝΑΖΗΤΗΣΗ ΒΙΒΛΙΩΝ</a></p>      
        </li>
  </ol>
</nav>

<div class="container">
  <div class="row text-center">
    <div class="col-lg-6 col-md-6 mb-4 zoom">
      <a href="declaration.php" >
        <div class="card">
          <img src="data:image/jpeg;base64,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" alt="">
          <div class="card-body">
            <p class="card-text badge">ΔΗΜΙΟΥΡΓΙΑ ΝΕΑΣ ΔΗΛΩΣΗΣ</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-6 col-md-6 mb-4 zoom">
        <a href="book_list.php" > <!-- allagi se username -->
          <div class="card">
            <img src="https://images.unsplash.com/photo-1471970471555-19d4b113e9ed?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
            <div class="card-body">
              <p class="card-text badge">ΛΙΣΤΑ ΣΥΓΓΡΑΜΜΑΤΩΝ</p>
            </div>
          </div>
        </a>
    </div>
  </div>

  <div class="row text-center" id="row2">
    <div class="col-lg-6 col-md-6 mb-4 zoom">
      <a href="/publisher" >
        <div class="card">
          <img src="https://5.imimg.com/data5/YR/GU/GLADMIN-16290278/exchange-or-tradeoff-500x500.jpg" alt="">
          <div class="card-body">
            <p class="card-text badge">ΑΝΤΑΛΛΑΓΗ ΣΥΓΓΡΑΜΜΑΤΩΝ</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-6 col-md-6 mb-4 zoom">
        <a href="/eudoxus_site/student/edit_declaration.php" >
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0bUEKPoWfZ7ElVD0wKugFxRWTylC2GkwK88zBkR1RnziDJomYdw" alt="">
            <div class="card-body">
              <p class="card-text badge">ΤΡΟΠΟΠΟΙΗΣΗ ΔΗΛΩΣΗΣ</p>
            </div>
          </div>
        </a>
    </div>
  </div>

</div>









<?php
include_once('../partials/footer.html');
?>
