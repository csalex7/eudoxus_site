<?php
   include('partials/header.php');
   include_once './Config.php';
?>




<link href="css/app.css" rel="stylesheet">
<link href="css/student.css" rel="stylesheet">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item active" aria-current="page">Αρχική/Αναζήτηση</li>
  </ol>
</nav>



<div class="container">
    <form action="">
    <div style="float: left;" > 
        <input type="text" placeholder="Search.." name="search">       
        <input type="radio" name="searchi" value="books" checked="checked"> Συγγράματα
        <input type="radio" name="searchi" value="bookstores"> Σημεία Διανομής
        <input type="radio" name="searchi" value="users"> Εκδότες
        <button type="submit" style="margin: 15px;"><i class="fa fa-search"></i></button>
    </div>      
    </form>
    <?php

if(isset($_GET["search"])) {
    echo "<div class='container' style='flaot: left;'> <br>";
    $tbl = $_GET["searchi"];
    $str = $_GET["search"];
    $query = "";
    if ($tbl == "books") {
        $query = "SELECT * FROM books WHERE title='$str' OR books.isbn='$str';";
        $result=mysqli_query($db,$query);
        if(!$result) {
            echo "Not found";
        }else{
            $resultCheck= mysqli_num_rows($result);
            echo $resultCheck." results fetched";
            if ($resultCheck > 0) {
                while($row= mysqli_fetch_assoc($result)){
                    echo '<p class="book_container">';
                    echo $row["title"];  
                    echo '<br> </p>';          
                }
            }
        }
    } elseif($tbl == "bookstores"){
        $query = "SELECT * FROM bookstores WHERE name='$str';";
        $result=mysqli_query($db,$query);
        if(!$result) {
            echo "Not found";
        }else{
            $resultCheck= mysqli_num_rows($result);
            echo $resultCheck." results fetched";
            if ($resultCheck > 0) {
                while($row= mysqli_fetch_assoc($result)){
                    echo '<p class="book_container">';
                    echo $row["name"];  
                    echo '<br> </p>';          
                }
            }
        }

    } elseif($tbl == "users"){
        $query = "SELECT * FROM users WHERE name='$str' and category='ekdotis';";
        $result=mysqli_query($db,$query);
        if(!$result) {
            echo "Not found";
        }else{
            $resultCheck= mysqli_num_rows($result);
            echo $resultCheck." results fetched";
            if ($resultCheck > 0) {
                while($row= mysqli_fetch_assoc($result)){
                    echo '<p class="book_container">';
                    echo $row["name"];  
                    echo '<br> </p>';          
                }
            }
        }

    }
        echo "</div>";
    }


?>
</div>

<?php 
include_once './partials/footer.html';
?>