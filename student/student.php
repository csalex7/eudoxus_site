<?php
include_once('../partials/header.php');
?>
<link href="../css/student.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/">Αρχική</a></li>
    <li class="breadcrumb-item active" aria-current="page">Φοιτητής</li>
  </ol>
</nav>



<div class="container">
  <div class="row text-center">
    <div class="col-lg-6 col-md-6 mb-4 zoom">
      <a href="/publisher" >
        <div class="card">
          <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text badge">ΑΝΑΖΗΤΗΣΗ ΣΥΓΓΡΑΜΜΑΤΩΝ</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-6 col-md-6 mb-4 zoom">
        <a href="/student" >
          <div class="card">
            <img src="https://medialib.aafp.org/content/dam/AAFP/images/ann/2016-May/MACRA_street-sign.jpg.daijpg.600.jpg" alt="">
            <div class="card-body">
              <p class="card-text badge">ΒΟΗΘΕΙΑ</p>
            </div>
          </div>
        </a>
    </div>
</div>







<?php
include_once('../partials/footer.html');
?>
