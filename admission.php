<?php
if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $age=$_POST['age'];
  $gender=$_POST['gender'];
 $phone=$_POST['phone'];
 $addher=$_POST['addher'];
 $addres=$_POST['addres'];
 $time=$_POST['time'];
 $couresname=$_POST['couresname'];
 
 $city=$_POST['city'];
 $state=$_POST['state'];
 $pincode=$_POST['pincode'];

 
 $qualification=$_POST['qualification'];
  $year=$_POST['year'];
   $image=$_POST['image'];

$To='ramdayalbharti1@gmail.com';
$subject="Context Us";
$From = $email;
 $message="Name : ".$name."\n"."LName : ".$lname."\n" ."Email : ". $email."\n" ."Phone : ". $phone."\n"  ."Age : ".$age."\n" ."Gender : ".$gender."\n" ."Addher : ". $addher."\n" 
 ."Address : ". $addres."\n"."City : ". $city."\n" ."State : ". $state."\n" ."Pincode : ". $pincode."\n" ."Durations time : ". $time."\n" 
 ."Course Name : ". $couresname."\n"."Qualification : ". $qualification."\n" ."Year : ". $year."\n" ."Image : ". $image."\n" ;
$headers="Form : $email";

if(mail($To,$subject,$message,$headers) == true){
echo"<h1>Sent Suecssfully ! Thank you ".$name.", we will contect you shortly! </h1>";
}else{
echo"Something went worng!";
}


}
?>


