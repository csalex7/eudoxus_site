<?php
ob_start();
include_once '../Config.php';
session_start();
if(!isset($_SESSION['login_user'])){
         echo "not set ";
         $_SESSION['prev_loc'] = '/eudoxus_site/student/trade_books.php';
         header("location: ../login.php");
    }
include_once '../partials/header.php';
include_once '../partials/footer.html';


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
    <li class="breadcrumb-item"><a href="../index.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="../student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ανταλλαγή Συγγραμμάτων</li>
  </ol>
</nav>

<?php
$user=$_SESSION['login_user'];

 $query="SELECT books.title,books.author,suggramata_mathimatwn.Mathima,suggramata_mathimatwn.eksamino,suggramata_foititi.exchange,suggramata_foititi.isbn FROM books,users,suggramata_foititi,suggramata_mathimatwn WHERE users.category='Foititis' and users.username='$user' and  suggramata_foititi.username_foititi='$user' and suggramata_foititi.isbn=books.isbn and suggramata_mathimatwn.isbn=books.isbn and suggramata_mathimatwn.isbn=suggramata_foititi.isbn and suggramata_mathimatwn.tmima=users.tmima and suggramata_foititi.delivered='1' and suggramata_foititi.mathima=suggramata_mathimatwn.Mathima;";
 $result= mysqli_query($db,$query);
$resultCheck= mysqli_num_rows($result);

?>
<div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin-left:40%;">
  <div class="card-header">Συγγράμματα για Ανταλλαγή</div>
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
                      echo "<br>";
                      echo "Μάθημα: ". $row['Mathima']; echo "<br>";
                      $mathima= $row['Mathima'];
                      ?>
                      <a class="badge badge-light " href="#" data-toggle="popover" data-html="true"  data-placement="top" data-content=" Συγγραφέας: <?php echo $row['author'] ?> <br/> isbn: <?php echo $row['isbn'] ?> <br/> Μάθημα: <?php echo $row['Mathima'] ?> <br/> Εξάμηνο: <?php echo $row['eksamino']; ?>">Πληροφορίες Συγγράμματος</a>
                      <?php
                      if($row['exchange']==0){
                          ?>
                            <a  class="btn btn-success" href="trade_books2.php?isbn=<?php echo $row['isbn'];?>&exchange=1 &mathima=<?php echo $mathima;?>" >Δήλωση Συγγράμματος για Aνταλλαγή</a> </button>
                          <?php
                      }
                      if($row['exchange']==1){
                          ?>
                            <a id="change_book" class="btn btn-warning" href="trade_books2.php?isbn=<?php echo $row['isbn'];?>&exchange=0 &mathima=<?php echo $mathima;?>" >Ακύρωση Aνταλλαγής</a> </button>
                          <?php
                      }
                      ?>

                      </p>
                        <?php
                      	echo "<br>";
                       ?>
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
  ?>
