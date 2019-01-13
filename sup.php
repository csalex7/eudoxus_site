<?php 
  include_once './Config.php';
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      echo "OK";
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $surname = mysqli_real_escape_string($db,$_POST['surname']);
      $phone = mysqli_real_escape_string($db,$_POST['phone']);
      $category = mysqli_real_escape_string($db,$_POST['category']);
      $tmima = "DI";// mysqli_real_escape_string($db,$_POST['tmima']);

      echo $myusername;// = mysqli_real_escape_string($db,$_POST['username']);
      echo $email;// = mysqli_real_escape_string($db,$_POST['email']);
      echo $mypassword;// = mysqli_real_escape_string($db,$_POST['psw']);
      echo $name;//= mysqli_real_escape_string($db,$_POST['name']);
      echo $surname;// = mysqli_real_escape_string($db,$_POST['surname']);
      echo $phone ;//= mysqli_real_escape_string($db,$_POST['phone']);
      echo $tmima ;//= "DI";// mysqli_real_escape_string($db,$_POST['tmima']);


      
      $sql = "INSERT INTO users(username,email, password, Name, Surname, Phone, category,tmima) VALUES ('$myusername','$email', '$mypassword', '$name','$surname', '$phone','$category','$tmima');";
      //$sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      
      $result = mysqli_query($db,$sql);  
      if($result)
      {
      echo "Success";

      }
      else
      {
      echo "Error";

      }
      $_SESSION['login_user'] = $myusername;
      header("location: index.php");
   }


?>
