<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<style>

</style>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ΕΥΔΟΞΟΣ</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link href="../css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="../student/student.js"></script>
  </head>

  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/eudoxus_site/landing.php"> <i class="fas fa-book"></i> ΕΥΔΟΞΟΣ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link badge dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ΦΟΙΤΗΤΗΣ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/eudoxus_site/student/declaration.php">Δήλωση Συγγραμμάτων</a>
            <a class="dropdown-item" href="/eudoxus_site/student/edit_declaration.php">Τροποποίηση Δήλωσης</a>
            <a class="dropdown-item" href="/eudoxus_site/student/trade_books.php">Ανταλλαγή Συγγραμμάτων</a>
            <a class="dropdown-item" href="/eudoxus_site/student/book_list.php">Λίστα Συγγραμμάτων</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/eudoxus_site/search.php">Αναζήτηση Συγγραμμάτων</a>
            <a class="dropdown-item" href="#">Βοήθεια</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link badge dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ΕΚΔΟΤΗΣ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/eudoxus_site/publisher/publisher2.php">Διαχείρηση Συγγραμμάτων</a>
            <a class="dropdown-item" href="/eudoxus_site/construct.php">Υπηρεσία Ταχυμεταφοράς</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/eudoxus_site/search.php">Αναζήτηση Συγγραμμάτων</a>
            <a class="dropdown-item" href="/eudoxus_site/publisher/publisher_help.php">Βοήθεια</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link badge dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ΜΕΛΟΣ ΤΗΣ ΓΡΑΜΜΑΤΕΙΑΣ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link badge dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ΣΗΜΕΙΟ ΔΙΑΝΟΜΗΣ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link badge dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ΔΙΑΘΕΤΗΣ ΔΩΡΕΑΝ ΣΥΓΓΡΑΜΜΑΤΩΝ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
             <?php if(isset($_SESSION['login_user'])){  ?>
                    <li class="signUpIn" ><a  class="badge badge-light" href="/eudoxus_site/logout.php">ΑΠΟΣΥΝΔΕΣΗ<i class="fas fa-user-plus"></i></a></li>
            <?php }
             else {   ?>
                    <li class="signUpIn"><a class="badge badge-light" href="/eudoxus_site/login.php">ΕΙΣΟΔΟΣ<i class="fas fa-user"></i></a></li>
                    <li class="signUpIn" ><a  class="badge badge-light" href="/eudoxus_site/signup.php">ΕΓΓΡΑΦΗ<i class="fas fa-user-plus"></i></a></li>
            <?php } ?>
      </ul>
    </div>
  </div>

</nav>


<?php if(isset($_SESSION['login_user'])){ ?>
      <div id="profile">
        Συνδεδεμένος ως <?php echo $_SESSION['login_user']; ?>
          <a href="/eudoxus_site/edit_profile.php" class="badge badge-light" >
            Επεξεργασία Προφίλ
          </a>
      </div>
<?php } ?>
