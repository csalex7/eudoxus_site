<?php
session_start();
include_once('../Config.php');
include_once('../partials/header.php');
?>

<link href="../css/student.css" rel="stylesheet">
<link href="../css/declaration.css" rel="stylesheet">


<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/landing.php">Αρχική</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="/eudoxus_site/student/student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Δήλωση Συγγραμμάτων</li>
  </ol>
</nav>



<?php
    $semester  = $_GET['semester'];

    $query="SELECT mathimata.mathima FROM mathimata WHERE mathimata.eksamino='$semester';";
    $result = mysqli_query($db,$query);
    $resultCheck= mysqli_num_rows($result);
    ?>
    <form action="declaration4.php" method="get">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin-left:40%;">
      <div class="card-header">Μαθήματα <?php echo $semester ?>ου εξαμήνου</div>
        <div class="card-body">
            <div class="vscrolling_container">
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
                    <a onclick="<?php echo $function.$i.$end;?>" href="#" class="big" data-value="option1" tabIndex="-1"><?php echo $row['mathima']; ?> </a>
                    <div id=<?php echo $idName.$i;?> class="card_divs" style="display: none;" >
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
                                            $book = $row3['title'];
                                            ?>
                                            <div class="card_divs">
                                                <a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="isbn[]" value="<?php echo $isbn;?>" />&nbsp;<?php echo $book; ?>
                                                    <?php
                                                        $query4="SELECT books.bookstore FROM books WHERE books.isbn ='$isbn';";
                                                        $result4 = mysqli_query($db,$query4);
                                                        $row4= mysqli_fetch_assoc($result4);
                                                        $bookstore_id = $row4['bookstore'];

                                                        $query5="SELECT bookstores.name,bookstores.address,bookstores.phone,bookstores.hours FROM bookstores WHERE bookstores.id ='$bookstore_id';";
                                                        $result5 = mysqli_query($db,$query5);
                                                        $row5= mysqli_fetch_assoc($result5);
                                                        $bookstore_name = $row5['name'];
                                                        $bookstore_address = $row5['address'];
                                                        $bookstore_phone = $row5['phone'];
                                                        $bookstore_hours = $row5['hours'];

                                                    ?>
                                                    <p class="signUpIn inner">
                                                            <?php $content="lslsl"; $content.="<\n>";  $content.="slspss"; ?>
                                                          <a class="badge badge-light bookstore" href="#" data-toggle="popover" data-html="true" title="ΠΛΗΡΟΦΟΡΙΕΣ" data-placement="top" data-content="Όνομα βιβλιοπωλείου: <?php echo $bookstore_name ?> <br/> Διεύθυνση: <?php echo $bookstore_address ?> <br/> Τηλέφωνο: <?php echo $bookstore_phone ?> <br/> Ώρες Λειτουργείας: <?php echo $bookstore_hours ?>">Παραλαβή από..</a>
                                                    </p>
                                                </a>
                                            </div>
                                            <?php
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
            </div>
        </div>
    </div>


    <div class="progress" style="height:20px; width:25%; margin-left:40%; ">
      <div class="progress-bar" style="width:75%;height:20px">75%</div>
    </div>

    <div id="outer">
        <div class="inner" id="back">
            <a href="declaration2.php">
                <button  type="button" class="btn btn-secondary btn-md">&#8678;Πίσω</button>
            </a>
        </div>
        <div class="inner">
            <a href="declaration4.php">
                <button type="submit" value="submit" class="btn btn-lg btn-success">Υποβολή Δήλωσης</button>
            </a>
        </div>
    </div>
</form>



<?php
include_once('../partials/footer.html');
?>
