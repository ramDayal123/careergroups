 <?php 

	$to = "careergroups2020@gmail.com.com";
 	$subject = "Test mail";
 	$massage = "Hello! this is a simple email massage"; 
 	$from = "careergroups2020@gmail.com";
 	$header = "From : $from";

     if (mail($to , $subject , $massage , $header)){
         echo " this is a function mail send.";
     }
     else{
       echo "Mail faild.";  
     }
	
	

  ?>
 

 
 
