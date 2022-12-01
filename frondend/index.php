<?php 
    session_start();
    if(!isset($_SESSION['user']) ){
      header("Location:login.php");
    }
?>
<html>
  
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <head>

    <link rel="stylesheet" href  = "css/sidebar.css">
    <script src = "js/sidebar.js"></script> 
    
  </head>

<body>

  <div  class="one">

    <!--sidebard-->
    <?php include('sidebar.php') ?>
    
    
    <!-- Page Content -->
    <div class = "my" >

      <h1 >My Company</h1>

    </div>

  </div>


      
</body>
</html>
