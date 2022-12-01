<?php
 session_start();
 if(!isset($_SESSION['user']) ){
   header("Location:login.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 25px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;     
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}




</style>

</head>
<script>
function myFunction() {
  location.replace("login.php")
}
function loge() {
  location.replace("index.php")
}

</script>
<body>


<form action="../backend/index.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <div>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name"  required>
    </div>

    <div>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    </div>


    <div>
      <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  required>

    </div>

    <div>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pswr" required>
    </div>

    <hr>
    
    <button onclick="loge()" class="registerbtn" name="register">Register</button>
  </div>
  <button onclick="myFunction()">go to login</button>
  <button ><a href = "logout.php">Logout</a></button>




</form>
</div>


</body>
</html>
