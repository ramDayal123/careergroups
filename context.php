<?php
if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $msg=$_POST['message'];

$To='ramdayalbharti1@gmai.com';
$subject="Context Us";
$From = $email;
 $message="Name : ".$name."\n" ."Email : ". $email."\n"."Phone : ". $phone."\n" ."Message : ". $msg."\n";
$headers="Form : $email";

if(mail($To,$subject,$message,$headers) == true){
echo"<h1>Sent Suecssfully ! Thank you ".$name.", we will contect you shortly! </h1>";
}else{
echo"Something went worng!";
}


}
?>