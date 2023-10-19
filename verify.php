<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
      <title>Create CErtificate</title>
      <style>
         .imgstyle{
         width:100%;
         height: inherit;
         }
         h6{
         display: inline-flex;
         }
         input {
         border-style: none;
         background-color: transparent;
         }
         table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 97%;
         }
         th {
         border: 1px solid #dddddd;
         padding: 8px;
         }
         .div{
         width: 100%;
         height: auto;
         text-shadow: 0px 2px 0px rgba(150, 150, 150, 1);
         font-size: 20px;
         }
         #img{
         opacity: 1;  
         background-color: #f2ebe9;
         background-image: url("https://www.transparenttextures.com/patterns/old-map.png");
         }
         #imge{
         background-image: url(car22.png);
         }
         input {
         border-style: none;
         background-color: transparent;
         color: black;
         font-family: Georgia, serif;
         font-weight: bold;
         text-shadow: 0px 2px 0px rgba(150, 150, 150, 1);
         }
         td, th {
         border: 2px solid black;
         text-align: left;
         padding: 8px;
         font-weight: bold;
         font-size: 17px;
         }
         /*table*/
         table {
         border-collapse: collapse;
         border-spacing: 0;
         width: 100%;
         }
         td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         font-weight: bold;
         }
         /*End Table*/{
         .logo1{
         margin-top:50px;
         }
      </style>
   </head>
   <body style="background-color: transparent;">
      <section id="section1">
      <div class="container" style="border: 3px solid red; margin-top: 45px;border: 3px solid red;padding: 6px;" id="img">
         <div style="border-style: dashed;">
            <div style="border-style: dotted;">
               <div style="border-style: double;">
                  <div style="background-image: url(log2.png); background-repeat: no-repeat;">
                     <div class="row">
                        <br>
                        <div class="col-sm-4">
                           <div style="float: left;margin-left: 20px;">
                              <br>
                              <br>
                              <h5><b>Reg. No.:</b>
                                 <b>  24/21</b>
                              </h5>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div style="text-align: center;">
                              <br>
                              <br>
                              <h5><b>UDYAM-UP-16-0001084</b>
                              </h5>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div style=" margin-left:25px;">
                              <br>
                              <br>
                              <h5><b style="">An ISO No.: ISO 9001:2015</b>
                              </h5>
                           </div>
                        </div>
                     </div>
                     <br>
                     <section>
                        <div class="">
                           <div class="row">
                              <div class="col-sm-2">
                                 <div> </div>
                              </div>
                              <div class="col-sm-2">
                                 <div style="text-align: center;"> <img src="new/logo1.png"> </div>
                              </div>
                              <div class="col-sm-6">
                                 <div style="font-family: Algerian, Algerian, serif; text-align: center; ">
                                    <h2 style="font-size: 3.5rem;">CAREER</h2>
                                    <div style="border-radius: 20px;background-color:darkcyan; color: white;">
                                       <p style="padding: 1px;"><b> GROUP OF COMPUTER EDUCATION</b></p>
                                    </div>
                                    <div style="text-shadow: 0px 2px 0px rgba(150, 150, 150, 1);
                                       font-size: 20px;">
                                       <p style="font-family:Arial Black;">AN ISO 9001 : 2015 CERTIFIED ORGANIZATION</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div style="#"> </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <br>
                     <br>
                     <section>
                        <div class="">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div style="background: linear-gradient(to bottom, #313887 0%, #7c2235 100%);
                                    color: white; border-radius: 30px; text-align: center;width: 85%;margin:auto; ">
                                    <p style="font-family:Arial Black;padding: 5px;">Registered under govt. Udyam ragistatiaon portal of MSME government of India...</p>
                                 </div>
                                 <!--   <div style="text-align: center;       text-shadow: 0px 0   px 0px rgba(150, 150, 150, 1);-->
                                 <!--font-size: 20px;">-->
                                 <!--     <p style=" font-family:Georgia;">(Department Secondary and higher Education)<br>-->
                                 <!--      An Organization of IT Developement</p>-->
                              </div>
                           </div>
                        </div>
                     </section>
                     <br>
                     <section>
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-2">
                                 <div style="background-color: green;">
                                 </div>
                              </div>
                              <?php
                                 $institute="Career Group Of Computer Education";
                                  $md="Sandeep kumar";
                                 include 'Database.php';
                                 
                                 if(isset($_POST['submit'])){
                                  //echo("testing Rakesh".$_POST["organization"]);
                                   // $fnm = $db->$_POST["fnm"];
                                  	 $cno =$_POST["organization"];
                                  	 //echo("cno='$cno'");
                                    $db = new Database();
                                    $db->select('user','*',null,"cno='$cno'",null,null);
                                              $result = $db->getResult();
                                              //print_r($result);
                                              //die();
                                              if(count($result) > 0){
                                                  foreach($result as $row){ 
                                                     
                                 ?>
                              <div class="col-sm-6">
                                 <div style="border-radius: 10px;text-align: center;">
                                    <div>
                                       <p style="font-family: Brush Script MT, Brush Script Std, cursive;"><b style="font-size: 61px;"> Certificet By</b>
                                          <br>
                                          <input type="text" name="name" placeholder="..............." disabled value="<?php echo $row['cnm']; ?>" class="w-100" style="text-align: center;">
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div style="border-radius: 10px; height: 136px; width: 50%;  text-align: center; margin-left: 60px;">
                                    <img src='<?php echo "../new/upload/".$row['FILES_tmp'] ?>' class="imgstyle">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <br><br>
                     <div class="container">
                        <div class="row" >
                           <div class="col-sm-6">
                              <div style="float: left;margin-left: 20px;">
                                 <h5><b>Enrollment. No :</b>
                                    <input type="text" name="name" disabled value="<?php echo $row['eno'];?>">
                                 </h5>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div style="float: right; margin-right: 20px;">
                                 <h5><b>Student Reg. No:</b>
                                    <input type="text" name="name" disabled value="<?php echo $row['rno'];?>">
                                 </h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="container">
                        <div class="row" >
                           <div class="col-sm-6">
                              <div style="float: left;margin-left: 20px;">
                                 <h5><b>Coures Mode :</b>
                                    <input type="text" name="name" disabled value="<?php  echo $row['cnm'];?>">
                                 </h5>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div style="float: right; margin-right: 20px;">
                                 <h5><b>Certificate No :</b>
                                    <input type="text" name="name" disabled value="<?php echo $row['cno'];?>">
                                 </h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <section>
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-12">
                                 <p style=" text-align: justify;  font-weight: bold; font-size: 20px; margin-right: 45px;margin-left: 10px;"> <b>This is  to Certify</b> <input type="text" name="name" disabled value="<?php  echo $row['cnm'];?>">S/o D/o W/o Mr : <input type="text" name="" disabled value="<?php echo $row['fnm'];?>"/>has Successfully Completed The final Examination  Conducted by the Board Of examWing CGCE and obtained <input type="text" name="" disabled value="<?php  echo $row['grd'];?>"> Garde in the Examination.</p>
                              </div>
                           </div>
                        </div>
                     </section>
                     <br><br>
                     <section>
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div>
                                    <p style="text-align: center; "><b style="font-size: 21px;">  Joining Date</b> <br><input type="text" name="" disabled value="<?php  echo $row['date'];?>" style="text-align: center;"></p>
                                 </div>
                              </div>
                              <div class="col-sm-8">
                                 <p style="background-color:transparent;text-align: center; border-style: none; border:1px solid black;width: 90%; margin-bottom: 0rem;"  >
                                    <b> GRADE LEGEND (%)</b>
                                 </p>
                                 <table style="width: 90%">
                                    <tr style="text-align: center;">
                                       <th>S</th>
                                       <th>A</th>
                                       <th>B</th>
                                       <th>C</th>
                                       <th>D</th>
                                       <th>E</th>
                                    </tr>
                                    <tr>
                                       <th>
                                          <input type="checkbox"> >90
                                       </th>
                                       <th>
                                          <input type="checkbox"> 70-90
                                       </th>
                                       <th>
                                          <input type="checkbox"> 60-50
                                       </th>
                                       <th>
                                          <input type="checkbox"> 50-55
                                       </th>
                                       <th>
                                          <input type="checkbox"> 40-49
                                       </th>
                                       <th>
                                          <input type="checkbox"> 40
                                       </th>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </section>
                     <br><br>
                     <section>
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div>
                                    <p style="text-align: center;"><b style="font-size: 21px;">Seal Of Organization</b>
                                       <input type="text" name="" disabled="" value="Career Group Of Computer Education" style="width: 323px">
                                    </p>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div>
                                    <p style="text-align: center; margin-right: 40px;"><b style="font-size: 17px;">  Date Of Issue</b>
                                       <input type="text" name="" disabled="" value="<?php  echo $row['issuseDate'];?>" style="margin-left: 89px;">
                                    </p>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <p style="float: right;"><b style="font-size: 17px;">Authorize Signatory <br> CGCE-(CMO)  </b>
                                    <input type="text" name="" disabled="" value="Sandeep kumar">
                                 </p>
                              </div>
                           </div>
                        </div>
                     </section>
                     <br>
                     <section>
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div style="text-align: center;">
                                    <p style="text-align: center;font-size: 22px;"><b>___________________________ Head Office : _______________________</b></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <br><br>
                     <section>
                        <div class="container" >
                           <div class="row">
                              <div class="col-sm-1">
                              </div>
                              <div class="col-sm-10">
                                 <div class="div" style="color: yellowgreen; text-align: justify;">
                                    <center>
                                       <p><b>Ashok Nagar Sheetalganj Tirha Near Hanuman mandir, Bansi Siddhath Nagar (UP) 272153 <br>  <a href="http://careergroups.in/">CGCE</a> <b>Email Id: careergroups2020@gmail.com</b></p>
                                       <br>
                                    </center>
                                 </div>
                              </div>
                              <div class="col-sm-1">
                              </div>
                           </div>
                        </div>
                     </section>
                     <br><br>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br><br>
      <br>
      <section>
         <div class="container" style="border: 3px solid red;padding: 6px; padding: -50px; margin-top: 20px; " id="img">
            <div style="border-style: dashed;">
               <div style="border-style: dotted;">
                  <div style="border-style: double;">
                     <div style="background-image: url(log2.png); background-repeat: no-repeat;">
                        <br>
                        <div class="row">
                           <div class="col-sm-4">
                              <div style="float: left;margin-left: 20px;">
                                 <br>
                                 <h5><b>Reg. No.</b>
                                    <b>24/21</b>
                                 </h5>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div style="float: left;margin-left: 20px;">
                                 <br>
                                 <h5><b>UDYAM-UP-16-0001084</b></h5>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div style="float: right; margin-right: 20px;">
                                 <br>
                                 <h5 style="margin-left: 25px;"><b>An ISO No.</b>
                                    <b>ISO 9001:2015</b>
                                 </h5>
                              </div>
                           </div>
                        </div>
                        <br>
                        <section style=" padding-bottom: 20px; padding-top: 10px;">
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-2">
                                    <div> </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <div style="text-align: center;"> <img src="new/logo1.png"> </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div style=" font-family:Algerian, Algerian, serif; text-align: center;">
                                       <h2 style="font-size: 3.5rem;">CAREER</h2>
                                       <div style="border-radius: 20px;background-color:darkcyan; color: white;">
                                          <p style="padding: 1px;"><b> GROUP OF COMPUTER EDUCATION</b></p>
                                       </div>
                                       <div style="text-shadow: 0px 2px 0px rgba(150, 150, 150, 1);
                                          font-size: 20px;">
                                          <p style="font-family:Arial Black;">AN ISO 9001 : 2015 CERTIFIED ORGANIZATION</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <div style="#"> </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section>
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div style="background: linear-gradient(to bottom, #313887 0%, #7c2235 100%);
                                       color: white; border-radius: 30px; text-align: center;width: 85%;margin:auto; ">
                                       <p style="font-family:Arial Black;padding: 5px;">Registered under govt. Udyam ragistatiaon portal of MSME government of India...</p>
                                    </div>
                                    <div style="text-align: center; text-shadow: 0px 0px 0px rgba(150, 150, 150, 1);
                                       <font-size: 20px;">
                                       <!--     <p style=" font-family:Georgia;">(Department Secondary and higher Education)<br>-->
                                       <!--      An Organization of IT Developement</p>-->
                                       <!--   </div>-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <div class="container">
                           <div class="row" >
                              <div class="col-sm-6">
                                 <div >
                                    <h5 style="margin-left: 20px;"><b>Enrollment. No :</b>
                                       <input type="text" name="name" disabled value="<?php  echo $row['eno'];?>" placeholder="..............." style="width: 190px;">
                                    </h5>
                                 </div>
                              </div>
                              <!--<div class="col-sm-4">-->
                              <!--  <div >-->
                              <!--       <h5><b>Reg. No :</b>-->
                              <!--        <input type="text" name="name" disabled value="<?php echo $row['cnm'];?>" placeholder="..............." style="width: 90px;">-->
                              <!--       </h5>-->
                              <!--     </div>-->
                              <!--</div>-->
                              <div class="col-sm-6">
                                 <div >
                                    <h5><b>Certificate No :</b>
                                       <input type="text" name="name" disabled value="<?php echo $row['cno'];?>" placeholder="..............." style="width: 190px;">
                                    </h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <section>
                           <div>
                              <div class="container" style="margin-left: 20px;">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div >
                                          <h5><b> Student Name :</b>
                                             <input type="text" name="" disabled value="<?php echo $row['fnm'];?>"  placeholder=".........................">
                                          </h5>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div >
                                          <h5><b>Course :</b>
                                             <input type="text" name="name" disabled value="<?php echo $row['cnm'];?>"  placeholder="..........................">
                                          </h5>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <div >
                                          <h5><b>Father Name :</b>
                                             <input type="text"  style="width: 79%;" disabled value="<?php echo $row['father'];?>"  placeholder="...........................">
                                          </h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section style="text-align: center;">
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-4">
                                 </div>
                                 <div class="col-sm-4">
                                    <div style="background-color: blue; height: 2px;">
                                       <hr>
                                    </div>
                                    <h4><b style="color: #9d4443;">MEMORRANDUM OF MARKS</b></h4>
                                    <div style="background-color: blue;height: 2px;">
                                       <hr>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                 </div>
                              </div>
                           </div>
                        </section>
                        <br> 
                        <section>
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div style="overflow-x:auto;">
                                       <table>
                                          <tr style="text-align: center;">
                                             <th>Sno</th>
                                             <th>Subjects</th>
                                             <th>Max.Mark</th>
                                             <th>Obtained Marks</th>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td>1</td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['ADCA'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php  echo $row['ca'];?>" ></td>
                                             <td><input type=" tex" name=" text" disabled value="<?php  echo $row['cam'];?>"></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field2'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['mo'];?>" ></td>
                                             <td><input type=" text" name=" text" disabled value="<?php  echo $row['mom'];?>" ></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field3'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['dt'];?>" ></td>
                                             <td><input type=" tex" name=" text" disabled value="<?php  echo $row['dtm'];?>" ></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field4'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['ty'];?>" ></td>
                                             <td><input type=" text" name=" text" disabled value="<?php  echo $row['tym'];?>" ></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field5'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php  echo $row['htt'];?>" ></td>
                                             <td><input type=" text" name=" text" disabled value="<?php echo $row['httm'];?>" ></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field6'];;?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['ht'];?>" ></td>
                                             <td><input type=" tex" name=" text" disabled value="<?php echo $row['htm'];?>" ></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field7'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php  echo $row['ja'];?>"></td>
                                             <td><input type=" tex" name=" text" disabled value="<?php echo $row['jam'];?>" ></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field8'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['pm'];?>"></td>
                                             <td><input type=" tex" name=" text" disabled value="<?php  echo $row['pmm'];?>" ></td>
                                          </tr>
                                          <tr style="text-align: center;">
                                             <td></td>
                                             <td><input type=" text" name="text" disabled value="<?php echo $row['field9'];?>"></td>
                                             <td><input type=" text" name="text" disabled value="<?php  echo $row['pra'];?>"></td>
                                             <td><input type=" tex" name=" text" disabled value="<?php  echo $row['pram'];?>" ></td>
                                          </tr>
                                          <tr>
                                             <td></td>
                                             <td>Grade</td>
                                             <td>Total</td>
                                             <td><input type=" tex" name=" text"  disabled value="<?php echo $row['total2'];?>" ></td>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section>
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <p><b style="font-size: 20px;">Grade : </b> Above 90% -S, 70% to 90% -A, 60%-B, 50% to 59% -C, 40% to 49% -D Below 40%-Fall</p>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section>
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-4">
                                    <div>
                                       <p style="text-align: center;"><b style="font-size: 21px;">Seal Of Organization</b>
                                          <input type="text" name="" disabled value="<?php if(isset($institute)) echo $institute;?>"  style="width: 323px">
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div>
                                       <p style="text-align: center; margin-right: 40px;"><b style="font-size: 17px;">  Date Of Issue</b>
                                          <input type="text" name="" disabled value="<?php echo $row['issuseDate'];?>"  style="margin-left: 89px;">
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <p><b style="font-size: 17px;">Authorize Signatory <br> CGCE-(CMO)  </b>
                                       <input type="text" name="" disabled value="<?php if(isset($md)) echo $md;?>">
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <br>
                        <section>
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div style="text-align: center;">
                                       <p style="text-align: center;font-size: 21px;"><b>___________________________ Head Office : _______________________</b></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php  }
                              }
                              }
                              ?>
                        </section>
                        <section>
                           <div class="container" >
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="div" style="text-align: center; color: yellowgreen;">
                                       <p><b>Ashok Nagar Sheetalganj Tirha Near Hanuman mandir, Bansi Siddhath Nagar (UP) 272153 <br>
                                          <a href="http://careergroups.in/">CGCE</a> Email Id: careergroups2020@gmail.com</b>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <br>
      <section style="text-align: center;">
         <a href="<?php echo $output; ?>" class="btn btn-success"  onclick="window.print()">Download My Certificate</a>
         <br><br>
      </section>
      <br><br>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>