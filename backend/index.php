<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "html";
$conn = mysqli_connect($servername, $username, $password , $db);

if(isset($_POST ["register"]) ){
    $a  =  $_POST["name"];
   $b  =  $_POST["email"];
   $c  =  $_POST["psw"];
   $d  =  $_POST["pswr"];
   

   
   $mytable = "INSERT INTO css(`my_name`,`my_email`,`password`,`re_password`) VALUES('$a','$b' ,$c,$d)";              

  
      $conn->query($mytable);
      header("Location:../frondend/register.php");
}

if(isset($_POST ["form_submit"]) ){
   $a  =  $_POST["uname"];
   $b  =  $_POST["psw"];

   $select= "SELECT * FROM css WHERE my_name ='".$a."' AND password = '".$b."'";
    $data  =  $conn->query($select);
   
    
    if($data->num_rows == 0 ){
      header("Location:../frondend/login.php");    

    }else{

      $_SESSION['user'] = 1;

      header("Location:../frondend/index.php");      
    }
 

}
?>