<?php
   include('partials/header.php');
   include_once './Config.php';
?>




<link href="css/app.css" rel="stylesheet">

<style>
    #rcorners {
        border-radius: 15px 50px;
  background: #e6e6e6;
  padding: 20px; 
  width: 200px;
  height: 150px; 
    }
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 5px;
  height: 36px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  position: absolute;  
  right: -50px;
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  /*position: absolute;*/
  top: 20%;
  left: 50%;
  /*transform: translate(-50%, -50%);*/
}
    
</style>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item active" aria-current="page"><a style="color:grey;" href="/eudoxus_site/landing.php">Αρχική</a>/Αναζήτηση</li>
  </ol>
</nav>


<div class="wrap container">
   <div class="search">
   <form action="">
      <input name="search" type="text" class="searchTerm" placeholder="Αναζήτηση...">
      <button type="submit" class="searchButton"> <i class="fa fa-search"></i> </button>
        <input type="radio" name="searchi" value="books" checked="checked"> Συγγράματα
        <input type="radio" name="searchi" value="bookstores"> Σημεία Διανομής
        <input type="radio" name="searchi" value="users"> Εκδότες
    </form>
   </div>
</div>


<?php

if(isset($_GET["search"])) {
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
            echo "<p class='wrap container' style='align:center;color:#bfbfbf;'>".$resultCheck." Αποτελέσματα:</p>";
            if ($resultCheck > 0) {
                while($row= mysqli_fetch_assoc($result)){
                    echo "<div class='container' id='rcorners' style='width:19%;clear: both;'> ";
                    echo '<p style="color :#595959;">';
                    echo "<b>Τίτλος:</b> ".$row["title"]." <br>";  
                    echo "<b>Συγγραφέας: </b>".$row["author"]." <br>";
                    echo "<b>Κατηγορία: </b>".$row["category"]." <br>";
                    echo "<b>ISBN: </b>".$row["isbn"]." <br>";
                    echo ' </p>';          
                }
            }
            echo "</div> <br>";
        }
    } elseif($tbl == "bookstores"){
        $query = "SELECT * FROM bookstores WHERE name='$str';";
        $result=mysqli_query($db,$query);
        if(!$result) {
            echo "Not found";
        }else{
            $resultCheck= mysqli_num_rows($result);
            echo "<p class='wrap container' style='align:center;color:#bfbfbf;'>".$resultCheck." Αποτελέσματα:</p>";
            if ($resultCheck > 0) {
                while($row= mysqli_fetch_assoc($result)){
                    echo "<div class='container' id='rcorners' style='width:19%;clear: both;'> ";
                    echo '<p style="color :#595959;">';
                    echo "<b>Όνομα:</b> ".$row["Name"]." <br>";      
                    echo "<b>Επίθετο:</b> ".$row["Surname"]." <br>";
                    echo "<b>Username:</b> ".$row["username"]." <br>";
                    echo "<b>Τηλέφωνο:</b> ".$row["phone"]." <br>";
                    echo ' </p>';  
                }
            }
        }

    } elseif($tbl == "users"){
        $query = "SELECT * FROM users WHERE Name='$str' and category='ekdotis';";
        $result=mysqli_query($db,$query);
        if(!$result) {
            echo "Not found";
        }else{
            $resultCheck= mysqli_num_rows($result);
            echo "<p class='wrap container' style='align:center;color:#bfbfbf;'>".$resultCheck." Αποτελέσματα:</p>";
            if ($resultCheck > 0) {
                while($row= mysqli_fetch_assoc($result)){
                    echo "<div class='container' id='rcorners' style='width:19%;clear: both;'> ";
                    echo '<p style="color :#595959;">';
                    echo "<b>Όνομα:</b> ".$row["Name"]." <br>";      
                    echo "<b>Επίθετο:</b> ".$row["Surname"]." <br>";
                    echo "<b>Username:</b> ".$row["username"]." <br>";
                    echo "<b>Τηλέφωνο:</b> ".$row["Phone"]." <br>";
                    echo ' </p></div><br>';       
                }
            }
            echo "</div>";
        }

    }
        echo "</div>";
    }


?>
</div>
<?php 
include_once './partials/footer.html';
?>