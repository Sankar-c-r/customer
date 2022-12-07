
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 15px 0;
  
  border: 5px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}
.container {
  padding: 15px;
}

</style>
</head>
<script>
  function myFunction() {
    location.replace("register.php")
  }
  </script>
  
<body>
  
<h2>Login Form</h2>

<form action="../backend/index.php" method="post">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <div><label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
</div>
        
    <button type="submit" name = "form_submit">Login</button>
   
  </div>
  
  <button onclick="myFunction()">go to register</button>

  
  

 
</form>

</body>
</html>
