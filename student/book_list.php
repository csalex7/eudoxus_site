<?php
    ob_start();
    include_once('../Config.php');
    session_start();
    if(!isset($_SESSION['login_user'])){
         echo "not set ";
         $_SESSION['prev_loc'] = '/eudoxus_site/student/book_list.php';
         header("location: ../login.php");
    }
    include_once('../partials/header.php');

    $username = $_SESSION['login_user'] ;
    $query = "SELECT * FROM users WHERE users.username='$username' and category='Foititis';";
    $result = mysqli_query($db,$query);
    $resultCheck= mysqli_num_rows($result);
    if ($resultCheck <= 0) {
      echo "Πρόσβαση μόνο σε φοιτητές";
      header("location: ./error_page2.php");
    }
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/app.css" rel="stylesheet">
<link href="../css/declaration.css" rel="stylesheet">




<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/index.php">Αρχική</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="/eudoxus_site/student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Λίστα Συγγραμμάτων</li>
        
  </ol>
</nav>

<?php
$user=$_SESSION['login_user'];
/*$query="SELECT books.title FROM suggramata_foititi,books,users WHERE users.category='Foititis' and users.username='$user' and  suggramata_foititi.username_foititi='$user' and suggramata_foititi.isbn=books.isbn;";*/
$query="SELECT books.isbn,books.title,suggramata_mathimatwn.Mathima,suggramata_mathimatwn.eksamino FROM books,users,suggramata_foititi,suggramata_mathimatwn WHERE users.category='Foititis' and users.username='$user' and  suggramata_foititi.username_foititi='$user' and suggramata_foititi.isbn=books.isbn and suggramata_mathimatwn.isbn=books.isbn and suggramata_mathimatwn.isbn=suggramata_foititi.isbn and suggramata_mathimatwn.tmima=users.tmima and suggramata_foititi.delivered='1' and suggramata_foititi.mathima=suggramata_mathimatwn.Mathima;";
$result= mysqli_query($db,$query);
$resultCheck= mysqli_num_rows($result);
?>
<div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin-left:40%;">
  <div class="card-header">Τα συγγράμματα σας</div>
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
                         $isbn = $row['isbn'];
                         $query2="SELECT books.author,books.category,books.date FROM books WHERE books.isbn = '$isbn';";
                         $result2= mysqli_query($db,$query2);
                         $resultCheck2= mysqli_num_rows($result2);
                         if ($resultCheck2 > 0) {
                              $row2 = mysqli_fetch_assoc($result2);
                              echo "<br>";
                              echo "Τίτλος: ". $row['title']; echo "<br>";
                              echo "Μάθημα: ". $row['Mathima']; echo "<br>";
                              echo "Εξάμηνο: ". $row['eksamino']; echo "<br>";
                          }
                          ?>

                          <a class="badge badge-light bookstore" href="#" data-toggle="popover" data-html="true"  data-placement="top" data-content=" Συγγραφέας: <?php echo $row2['author'] ?> <br/> Κατηγορία: <?php echo $row2['category']?> <br/> Ημερομηνία Έκδοσης: <?php echo $row2['date']?>">Πληροφορίες Συγγράμματος</a>

                          </p>
                     <?php
                        }
                      }
                      ?>


</div>
    </div>
        </div>
            </div>
                </div>
                    </div>
