<?php
include_once '../Config.php';
include('../partials/header.php');
?>
<link href="../css/publisher.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">Εκδότης</li>
    <li class="options">
          <p id="option1"><a class="badge badge-light" href="publisher_help.php">ΒΟΗΘΕΙΑ</a></p>
          <p id="option12"><a class="badge badge-light" href="/signin">ΑΝΑΖΗΤΗΣΗ ΒΙΒΛΙΩΝ</a></p>      
        </li>
  </ol>
</nav>


<div class="container">
  <div class="row text-center">
    <div class="col-lg-6 col-md-6 mb-4 zoom">
      <a href="publisher2.php" >
        <div class="card">
          <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="book image">
          <div class="card-body">
            <p class="card-text badge">ΔΙΑΧΕΙΡΙΣΗ ΣΥΓΓΡΑΜΜΑΤΩΝ</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-6 col-md-6 mb-4 zoom">
        <a href="/student" >
          <div class="card">
            <img src="https://st2.depositphotos.com/1074452/5600/i/950/depositphotos_56007745-stock-photo-express-delivery-represents-fast-track.jpg" alt="courier image">
            <div class="card-body">
              <p class="card-text badge">ΥΠΗΡΕΣΙΑ ΤΑΧΥΜΕΤΑΦΟΡΑΣ</p>
            </div>
          </div>
        </a>
    </div>
</div>

<?php
   include('../partials/footer.html');
?>
