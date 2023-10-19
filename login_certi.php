<?php
     $user="CGCE";
     $pass="12345";

  $username=$_POST["username"];
    $password=$_POST["password"];
   if($username==$user && $password==$pass){
       header('Location:http://careergroups.in/new/certi.php');
   }else{
       echo "Invaild User Name and Password Please try Again";
   }


?>