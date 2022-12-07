<?php 
    session_start();
    if(!isset($_SESSION['user']) ){
      header("Location:login.php");
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "html";
    $conn = mysqli_connect($servername, $username, $password , $db);


    $select= "SELECT * FROM customers"; 
$data  =  $conn->query($select);
while($row = $data->fetch_assoc()) {

    $customer[] = $row; 
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  

  <link rel="stylesheet" href  = "../css/sidebar.css">
  <script src = "../js/sidebar.js"></script> 
    

  
  <style>.container {
    padding-right: unset;
     padding-left: unset; 
    margin-right: unset; 
     margin-left: unset; 
}
</style>

</head>
<script>

function create() {
  location.replace("http://localhost/sankar/sunday/frondend/customer/create.php")
}
</script>




<body>


<div  class="one">

    <!--sidebard-->
    <?php include('../sidebar.php') ?>
    
    <!-- Page Content -->
    <div class = "my" >

      <div class="container">
      <button onclick="create()">create customer detail</button>
        <h2>customer detail</h2>
        <p>our company customer details:</p>            
        <table class="table table-striped">
          <thead>
            <tr>
              <th>firstname</th>
              <th>lastname</th>
              <th>email</th>
              <th>phonenumber</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($customer as $ans){ ?>
            <tr>
              <td><?php echo  $ans["firstname"] ?></td>
              <td><?php echo  $ans["lastname"] ?></td>
              <td><?php echo  $ans["email"] ?></td>
              <td><?php echo  $ans["phnumber"] ?></td>
            </tr>
            <?php } ?>
            
          </tbody>
        </table>
      </div>
    
      
      
         
    </div>
</div>

    


   

  </body>
</html>
