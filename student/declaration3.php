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

    $query="SELECT mathimata.mathima FROM mathimata WHERE mathimata.eksamino='$semester';";
    $result = mysqli_query($db,$query);
    $resultCheck= mysqli_num_rows($result);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <?php
    if ($resultCheck > 0) {
        $idName = "myDIV";
        $function = "myFunction";
        $end = "()";
        $i = 0;
        while($row= mysqli_fetch_assoc($result)){
            $i+=1;
            ?>
            <a onclick="<?php echo $function.$i.$end;?>" href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;<?php echo $row['mathima']; ?> </a>
            <div id=<?php echo $idName.$i;?> style="display: none;" >
                <?php
                    $mathima = $row['mathima'];
                    $query2="SELECT suggramata_mathimatwn.isbn FROM suggramata_mathimatwn WHERE suggramata_mathimatwn.Mathima='$mathima';";
                    $result2 = mysqli_query($db,$query2);
                    $resultCheck2= mysqli_num_rows($result2);
                    if ($resultCheck2 > 0) {
                        while($row2= mysqli_fetch_assoc($result2)){
                            $isbn = $row2['isbn'];
                            $query3="SELECT books.title FROM books WHERE books.isbn='$isbn';";
                            $result3 = mysqli_query($db,$query3);
                            $resultCheck3= mysqli_num_rows($result3);
                            if ($resultCheck3 > 0) {
                                while($row3= mysqli_fetch_assoc($result3)){
                                    echo $row3['title'];
                                }
                            }
                        }
                    }
                ?>



            </div>

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
