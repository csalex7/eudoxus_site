<?php 
  include_once './Config.php';
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      echo "OK";
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
      
      $sql = "INSERT INTO `admin` (`username`, `passcode`, `id`) VALUES ('$myusername', '$mypassword', '88')";
      $result = mysqli_query($db,$sql);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
   }

?>
