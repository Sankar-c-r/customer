<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "html";
$conn = mysqli_connect($servername, $username, $password , $db);



if(isset($_POST["register"]) ){
    $a  =  $_POST["name"];
   $b  =  $_POST["email"];
   $c  =  $_POST["psw"];
   $d  =  $_POST["pswr"];
   $hash = password_hash($c, PASSWORD_DEFAULT);
   $mytable = "INSERT INTO css(`my_name`,`my_email`,`password`,`re_password`) VALUES('$a','$b' ,'$hash',$d)";              

  
      $conn->query($mytable);
      $_SESSION['user'] = 1;
      header("Location:../frondend/index.php");
}

if(isset($_POST ["form_submit"]) ){
   $a  =  $_POST["uname"];
   $b  =  $_POST["psw"];

   $select= "SELECT * FROM css WHERE my_name ='".$a."' ";
    $data  =  $conn->query($select);
    $row = mysqli_fetch_assoc($data);
  /*  $ans=$row["password"];  
    $decryption=openssl_decrypt($ans);
   
   
    
    if($b==$decryption){

      $_SESSION['user'] = 1;

      header("Location:../frondend/index.php");  
        

    }else */{

     
      header("Location:../frondend/login.php");      
    }
 

}
?> 