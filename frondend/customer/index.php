<?php 
    session_start();
    if(!isset($_SESSION['user']) ){
      header("Location:login.php");
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
      <button onclick="create()">create_customer</button>
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>            
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>mary@example.com</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>july@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    
      
      
         
    </div>
</div>

    


   

  </body>
</html>
