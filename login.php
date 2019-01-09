 <link href="css/style.css" rel="stylesheet">

<?php
   include("Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: landing.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<style>



button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.c1ancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
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
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
   
   <head>
      <title>Login Page</title>
     <link rel="stylesheet" href="style.css">
     </head>
         
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:13px;"><b>Login</b></div>
				
            <div style = "margin:20px">
               
               <!-- <form class="modal-content animate" action="/action_page.php"> -->
			    <form action = "" method = "post">
					<div class="imgcontainer">
						<img src="av.png" alt="Avatar" class="avatar">
					</div>

					<div class="container">
						<label for="uname"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
						<button type="submit">Login</button>
						<label>
						<input type="checkbox" checked="checked" name="remember"> Remember me
						</label>
					</div>

					<div class="container" style="background-color:#f1f1f1;margin:14px 10 2px 10;">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						<span class="psw">Forgot <a href="#">password?</a></span>
					</div>
				</form>		
			
				</div>
				
				
			</div>
      </div>
			
		</div>

   </body>
</html>
