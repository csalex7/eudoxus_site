<?php
include_once('../Config.php');
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



<?php
    $semester  = $_GET['semester'];

    $query="SELECT mathimata.mathima FROM mathimata WHERE mathimata.eksamino=$semester;"; /*anti gia ekdotis1 to kanoniko username*/
    $result = mysqli_query($db,$query);
    $resultCheck= mysqli_num_rows($result);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <?php
    if ($resultCheck > 0) {
        while($row= mysqli_fetch_assoc($result)){

            ?>
            <a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;<?php echo $row['mathima']; ?> </a>
            <?php
            echo "<br>";

        }
    }
    ?>
    </div>
        </div>
            </div>







<a href="declaration2.php">
<button id="back" type="button" class="btn btn-secondary btn-md">&#8678;Πίσω</button>
</a>

<?php
include_once('../partials/footer.html');
?>
