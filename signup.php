
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
  border-radius:5px;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  /*display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<div id="id01" class="modal">
  <form class="modal-content" method="POST" action="./sup.php" style="width : 45%;">
    <div class="container">
      <h1>Εγγραφή</h1>
      <p>Παρακαλώ εισάγετε τα παρακάτω στοιχεία.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Εισάγετε Email" name="email" required>

      <?php 
      session_start();
        if(isset($_SESSION["errorL"])) {
          echo "<span style='color:red;'>".$_SESSION["error"]."</span><br>";
        }?>

      <label for="username"><b>Όνομα Χρήστη</b></label>
      <input type="text" placeholder="Εισάγετε username" name="username" required>

      <label for="name"><b>Όνομα</b></label>
      <input type="text" placeholder="Εισάγετε" name="name" required>

      <label for="surname"><b>Επίθετο</b></label>
      <input type="text" placeholder="Εισάγετε επίθετο" name="surname" required>

      <label for="psw"><b>Κωδικός</b></label>
      <input type="password" placeholder="Εισάγετε Password" name="psw" required>

      <label for="psw-repeat"><b>Επανάληψη Κωδικού</b></label>
      <input type="password" placeholder="Εισάγετε Password" name="psw-repeat" required>

      <label for="phone"><b>Τηλέφωνο</b></label>
      <input type="text" placeholder="Εισάγετε το τηλέφωνο" name="phone">

      <script src="../student/student.js"></script>
      
      <label for="category"> <b> Εγγραφή ως:</b> <br></label>
        <input type="radio" name="category" value="foititis" id="student" required> Φοιτητής<br>
        <input type="radio" name="category" value="ekdotis" required> Εκδότης<br>
        <input type="radio" name="category" value="grammateia" required> Γραμματεία<br><br>

        <label for="tmima"><b>Τμήμα</b></label>
    <input type="text" placeholder="Εισάγεται τμήμα" name="tmima">

        

        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Απομνημόνευση Κωδικού
        </label>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Εγγραφή</button>
        <a href="index.php">
        <button type="button"  class="cancelbtn">Ακύρωση</button>
        </a>
        
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    window.location = "./index.php";
  }
}
</script>

</body>
</html>

