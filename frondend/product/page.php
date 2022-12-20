<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "html";
$conn = mysqli_connect($servername, $username, $password , $db);





if(isset($_POST ["submit"]) ){

  $imageFileType = strtolower(pathinfo($_FILES["product_image"]["name"],PATHINFO_EXTENSION));


$file_name  = uniqid().'.'.$imageFileType;

  $apple=  "../../image/".$file_name; 

  
  move_uploaded_file($_FILES["product_image"]["tmp_name"], $apple);

  $save_path = "image/".$file_name;

    $a  =  $_POST["productname"];
   $b  =  $_POST["productprice"];
   $c  =  $_POST["productqty"];

 

   

$mycustomer = "INSERT INTO pdetail(`productname`,`productprice`,`productqty`,`things`) VALUES('$a',$b,$c,'$save_path')";              

  
      $conn->query($mycustomer);
      
      header("Location:http://localhost/sankar/sunday/frondend/product/list.php");
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

    <form action="page.php" method="POST"  enctype="multipart/form-data">
  <div class="container">
    <h1>product detail</h1>
    <p>please fill the stock detail</p>
    <hr>
    <div>
    <label for="name"><b>productname</b></label>
    <input type="text" placeholder="product" name="productname"  required>
    </div>

    <div>
    <label for="name"><b>productprice</b></label>
    <input type="text" placeholder="price" name="productprice" required>
    </div>


    <div>
      <label for="name"><b>productqty</b></label>
    <input type="text" placeholder="Qty" name="productqty"  required>

    </div>
    <div>
    <label for="name"><b>productimage</b></label>
    <input type= "file" name= "product_image"> 
    </div>
 <hr>
    
    <button type="submit" name="submit" class="on">submit</button>

</div>
</form>
</div>
</div>
</body>
</html>
