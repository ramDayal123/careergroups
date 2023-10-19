<?php
if(isset($_POST['submit'])){
    $Orgnization=$_POST['Orgnization'];
 $name=$_POST['name'];
 $lname=$_POST['lname'];
 $cname=$_POST['cname'];
 $sname=$_POST['sname'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $age=$_POST['age'];
  $time=$_POST['time'];
 $couresname=$_POST['coursename'];
 $phone=$_POST['phone'];
 $addher=$_POST['addher'];
 $msg=$_POST['message'];
 
 $city=$_POST['city'];
 $state=$_POST['state'];
 $city1=$_POST['city1'];
 $state1=$_POST['state1'];
 $sortname=$_POST['sortname'];
 $sortnamed=$_POST['sortnamed'];
 $dateragistration=$_POST['dateragistration'];
 $nchd=$_POST['nchd'];
 $nchd1=$_POST['nchd1'];
 $yearestablishment=$_POST['yearestablishment'];
 $pincode=$_POST['pincode'];
 $pac=$_POST['pac'];
 $dob=$_POST['dob'];
 $ech=$_POST['ech'];
 $married=$_POST['married'];
 $relision=$_POST['relision'];
 $term1=$_POST['term1'];
 

 
 $qualification=$_POST['qualification'];
  $year=$_POST['year'];
   $image=$_POST['image'];
   $image1=$_POST['image1'];
   $image2=$_POST['image2'];
   $image3=$_POST['image3'];

$To='careergroups2020@gmail.com';
$subject="Context Us";
$From = $email;
 $message="Name : ".$name."\n"."LName : ".$lname."\n" ."City Name : ".$cname."\n" ."State Name : ".$sname."\n" 
 ."Sort City Name : ".$city1."\n" ."Sort State Name : ".$state1."\n" ."Organizatopn : ".  $Orgnization."\n" ."Email : ". $email."\n"
 ."Age : ".$age."\n" ."Gender : ".$gender."\n" ."Phone : ". $phone."\n" ."Addher : ". $addher."\n" ."Message : ". $msg."\n"
 ."Term and Conditions : ". $term1."\n" ."Relision : ". $relision."\n" ."Marital Status : ". $married."\n" ."Experience of Center Head : ". $ech."\n" ."Date of Birth : ". $dob."\n"
 ."City : ". $city."\n" ."State : ". $state."\n"."Year-Establishment : ". $yearestablishment."\n" 
 ."Pincode : ". $pincode."\n" ."Sort Name State : ". $sortname."\n" ."Sort Name Distric : ". $sortnamed."\n" ."Pincode3 : ". $pincode."\n"
 ."Name Of Center Head : ". $nchd."\n" ."Designing & Postion Hold : ". $nchd1."\n" ."Postal Address Center Head : ". $pac."\n"."Qualification : ". $qualification."\n" 
 ."Year : ". $year."\n" ."Image : ". $image."\n" ."Durations time : ". $time."\n" ."Course Name : ". $coursename."\n"
 ."Photograp : ". $image1."\n" ."G.S.T. file : ". $image2."\n" ."Trade Licence : ". $image3."\n" ;
$headers="Form : $email";

if(mail($To,$subject,$message,$headers) == true){
echo"<h1>Sent Suecssfully ! Thank you ".$name.", we will contect you shortly! </h1>";
}else{
echo"Something went worng!";
}


}
?>


