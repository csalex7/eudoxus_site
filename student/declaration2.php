<?php
include_once('../partials/header.php');
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/declaration.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/index.php">Αρχική</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="/eudoxus_site/student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Δήλωση Συγγραμμάτων</li>
        
  </ol>
</nav>

<br>




<div class="container" id="uni">
    <h5> Ποιο εξάμηνο σας ενδιαφέρει; </h5>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Εξάμηνα
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <a class="badge " href="declaration3.php?semester=1">
            <button class="dropdown-item" type="button">1o</button>
        </a>
        <a class="badge " href="declaration3.php?semester=2">
            <button class="dropdown-item" type="button">2o</button>
        </a>
        <a class="badge " href="declaration3.php?semester=3">
            <button class="dropdown-item" type="button">3ο</button>
        </a>
        <a class="badge " href="declaration3.php?semester=4">
            <button class="dropdown-item" type="button">4ο</button>
        </a>
        <a class="badge " href="declaration3.php?semester=5">
            <button class="dropdown-item" type="button">5ο</button>
        </a>
        <a class="badge " href="declaration3.php?semester=6">
            <button class="dropdown-item" type="button">6ο</button>
        </a>
        <a class="badge " href="declaration3.php?semester=7">
            <button class="dropdown-item" type="button">7ο</button>
        </a>
        <a class="badge " href="declaration3.php?semester=8">
            <button class="dropdown-item" type="button">8ο</button>
        </a>

      </div>
    </div>
</div>


<div class="progress" style="height:20px; width:25%; margin-left:40%; ">
  <div class="progress-bar" style="width:50%;height:20px">50%</div>
</div>


<div id="back2">
    <a href="declaration.php" class="previous2"><i style="font-size:36px" class="fas fa-angle-left"></i></a>
    </a>
</div>



<?php
include_once('../partials/footer.html');
?>
