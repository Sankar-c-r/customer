<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "html";
$conn = mysqli_connect($servername, $username, $password , $db);


if(isset($_GET['model'])){
$full=$_GET['model'];
$sell= "SELECT * FROM pdetail WHERE id =$full "; 
$data  =  $conn->query($sell);

while($last = $data->fetch_assoc()) {

    $list[] = $last; 
    
 }
}

?>
<html>
    <head>


    </head>
    <script>
      function plus() {
        var a= document.getElementById("call").value;
        a++;
        var b =a;
         document.getElementById("call").value = b ; 
       }
       function minus() {
        var a= document.getElementById("call").value;
        if( a>"1" ){
        a--;
        var b =a;
         document.getElementById("call").value = b ; 
       }
      }




    </script>
    <body>
    <?php foreach($list as $ans){ ?>
     <div>
     <div>
   <img src ="<?php echo $ans["things"]?>">
    
   </div>
       
       <?php echo  $ans["productname"] ?>
     </div>
    <div>
       <?php echo  $ans["productprice"] ?>
    </div>    

    <?php } ?>
    <form>
    <button onclick="plus()" type="button">+</button>
    <input type="text" id="call" value ="1">
    <button onclick="minus()" type="button">-</button>
    </form>




    </body>
</html>