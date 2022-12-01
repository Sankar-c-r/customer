<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "html";
$conn = mysqli_connect($servername, $username, $password , $db);

if(isset($_POST ["submit"]) ){
    $a  =  $_POST["fname"];
   $b  =  $_POST["lname"];
   $c  =  $_POST["email"];
   $d  =  $_POST["phnumber"];
   

   
   $mycustomer = "INSERT INTO customers(`firstname`,`lastname`,`email`,`phnumber`) VALUES('$a','$b' ,'$c',$d)";              

  
      $conn->query($mycustomer);
      print_r($mycustomer);
      header("Location:http://localhost/sankar/sunday/frondend/customer/index.php");
}
?>

<html>
    <head>
    <link rel="stylesheet" href  = "../css/sidebar.css">
    <script src = "../js/sidebar.js"></script> 
    <style>
        .container {
  padding: 16px;
  background-color: white;
}
        /* Full-width input fields */
input[type=text], input[type=email] {
  width: 100%;
  padding: 25px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;     
}
.on {
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

   
    <body>
    <div  class="one">

<!--sidebard-->
<?php include('../sidebar.php') ?>

<!-- Page Content -->
<div class = "my" >

    <form action="create.php" method="POST">
  <div class="container">
    <h1>CREATE DETAIL</h1>
    <p>Please fill in this Form.</p>
    <hr>
    <div>
    <label for="name"><b>firstName</b></label>
    <input type="text" placeholder="Enter Name" name="fname"  required>
    </div>

    <div>
    <label for="name"><b>lastname</b></label>
    <input type="text" placeholder="Enter name" name="lname" required>
    </div>


    <div>
      <label for="email"><b>email</b></label>
    <input type="email" placeholder="Enter email" name="email"  required>

    </div>

    <div>
      <label for="phnumber"><b>ph_number</b></label>
      <input type="text" placeholder="enter ph_number" name="phnumber" required>
    </div>

    <hr>
    
    <button type="submit" name="submit" class="on">submit</button>
    <!-- <button ><a href = "logout.php">Logout</a></button> -->
  </div>
</form>
</div>
</div>
</body>
</html>
