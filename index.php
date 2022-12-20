<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "html";
$conn = mysqli_connect($servername, $username, $password , $db);


$select= "SELECT * FROM pdetail"; 
$data  =  $conn->query($select);
while($row = $data->fetch_assoc()) {

    $list[] = $row; 
 }

?>
<html>
    <head>
        <style>
 .nani{
    display:flex;
    font-size: 30px;

        }
        </style>

    </head>
    <body>
<div class="nani">
     <?php foreach($list as $ans){ ?>
 <div>
   <div>
   <img src ="<?php echo $ans["things"]?>">
    
   </div>
 </div>
<div>
     <button> <a href= "fronduser.php?model=<?php echo  $ans["id"] ?>">DETAIL</a></button>       
  
 </div>
   
  <?php } ?>
</div>
 </body>
    </html>     

 