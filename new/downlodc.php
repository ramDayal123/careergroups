<?php
include '../Database.php';

	if(isset($_POST['submit'])){
	    $db = new Database();
	    $da=Date("d/m/Y");
	    $field2 ="";
	    $field3 ="";
	    $field4 ="";
	    $field5 ="";
	    $field6 ="";
	    $field7 ="";
	    $field8 ="";
	    $field9 ="";
        $ca="";
        $mo="";
        $dt="";
        $ty="";
        $htt="";
        $ht="";
        $ja="";
        $pm="";
        $pra="";
        //maximum number
        $cam="";
        $mom="";
        $dtm="";
        $tym="";
        $httm="";
        $htm="";
        $jam="";
        $pmm="";
        $pram="";
        $institute="Career Group Of Computer Education";
        $md="Sandeep kumar";

$father = $_POST["father"];
if(isset($_FILES["photo"])){
  $_FILES_name=$_FILES["photo"]["name"];
  $_FILES_tmp=$_FILES["photo"]["tmp_name"];

  move_uploaded_file($_FILES_tmp,"upload/".$_FILES_name);
}
            $Joing_Date = $_POST["Joing_Date"];
            $Issue_Date = $_POST["Issue_Date"];
            // $jdaar=explode("/",$Joing_Date );
            // $jd=$jdarr['0']."-".$jdarr['1']."-".$jdarr['2'];
    		$nm = $db->escapeString($_POST["nm"]);
    		$fnm = $db->escapeString($_POST["fnm"]);
    		$cnm = $db->escapeString($_POST["cnm"]);
    		$rno = $db->escapeString($_POST["rno"]);
    		$eno = $db->escapeString($_POST["eno"]);
    		$cno = $db->escapeString($_POST["cno"]);
    		$grd = $db->escapeString($_POST["grd"]);
    		$ADCA = $db->escapeString($_POST["ADCA"]);
    		
    		// mini number
    		$mo = $db->escapeString($_POST["mo"]);
    		$dt = $db->escapeString($_POST["dt"]);
    		$ca = $db->escapeString($_POST["ca"]);
        	$ty = $db->escapeString($_POST["ty"]);
        	$htt = $db->escapeString($_POST["htt"]);
        	$ht= $db->escapeString($_POST["ht"]);
			$ja = $db->escapeString($_POST["ja"]);
			$pm = $db->escapeString($_POST["pm"]);
			$pra = $db->escapeString($_POST["pra"]);
			//maximum number
			$cam = $db->escapeString($_POST["cam"]);
    		$mom= $db->escapeString($_POST["mom"]);
    		$dtm= $db->escapeString($_POST["dtm"]);
        	$tym = $db->escapeString($_POST["tym"]);
        	$httm = $db->escapeString($_POST["httm"]);
        	$htm= $db->escapeString($_POST["htm"]);
			$jam= $db->escapeString($_POST["jam"]);
			$pmn= $db->escapeString($_POST["pmm"]);
			$pram = $db->escapeString($_POST["pram"]);
			// All field
			$field2 = $db->escapeString($_POST["field2"]);
    		$field3= $db->escapeString($_POST["field3"]);
    		$field4= $db->escapeString($_POST["field4"]);
        	$field5 = $db->escapeString($_POST["field5"]);
        	$field6 = $db->escapeString($_POST["field6"]);
        	$field7= $db->escapeString($_POST["field7"]);
			$field8= $db->escapeString($_POST["field8"]);
			$field9= $db->escapeString($_POST["field9"]);
			
			
//total number
 $total= (int)$ca+(int)$mo+(int)$dt+(int)$ty+(int)$htt+(int)$ht+(int)$ja+(int)$pm+(int)$pra;
  $total1= (int)$cam+(int)$mom+(int)$dtm+(int)$tym+(int)$httm+(int)$htm+(int)$jam+(int)$pmm+(int)$pram;
  $total2 = "$total1/$total";

    $db->insert('user',array('nm'=>$nm,'father'=>$father,'fnm'=>$fnm,'cnm'=>$cnm,'rno'=>$rno,'eno'=>$eno,'cno'=>$cno,'grd'=>$grd,'mo'=>$mo,'dt'=>$dt,'ca'=>$ca,'ty'=>$ty,'htt'=>$htt,'ht'=>$ht,'ja'=>$ja,'pm'=>$pm,'pra'=>$pra,'cam'=>$cam,'mom'=>$mom,'dtm'=>$dtm,'tym'=>$tym,'httm'=>$httm,'htm'=>$htm,'jam'=>$jam,'pmm'=>$pmm,'pram'=>$pram,'field2'=>$field2,'field3'=>$field3,'field4'=>$field4,'field5'=>$field5,'field6'=>$field6,'field7'=>$field7,'field8'=>$field8,'field9'=>$field9,'total2'=>$total2,'FILES_tmp'=>$_FILES_name,'ADCA'=>$ADCA,'date'=>$Joing_Date,'issuseDate'=>$Issue_Date));
			
		
	}


?>

	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
		<title>Career Certificate</title>
		<style>
			.imgstyle {
			width: 100%;
			height: auto;
		}
		
		h6 {
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
		
		.div {
			width: 100%;
			height: auto;
			text-shadow: 0px 2px 0px rgba(150, 150, 150, 1);
			font-size: 20px;
		}
		
		#img {
			opacity: 1;
			background-color: #f2ebe9;
			background-image: url("https://www.transparenttextures.com/patterns/old-map.png");
		}
		
		#imge {
			background-image: url(car22.png);
		}
		
		input {
			border-style: none;
			background-color: transparent;
			color: black;
			font-family: Georgia, serif;
			font-weight: bold;
		
		}
		
		td,
		th {
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
		
		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
			font-weight: bold;
		}
		/*End Table*/
		
		
			.logo1 {
				margin-top: 50px;
			}
		</style>
	</head>

	<body>
		<!-- <img src="car1.png"> -->
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
                                     
                                        </h5> </div>
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
											<div style="text-align: center;"> <img src="logo1.png"> </div>
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
							<div class="">
								<div class="row">
									
									<div class="col-sm-9">
										<div style="border-radius: 10px">
											<div>
												<p style="font-family: Brush Script MT, Brush Script Std, cursive;padding:0px 20px"><b style="font-size: 50px;font-family: serif;display: flow-root;text-align: center;"> Certified By</b>
													<input type="text" class="text-center" name="name"  disabled value="<?php if(isset($cnm)) echo $cnm;?>" style="font-size: 27px; width:100% ;"  > 
												</p>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div style="border-radius: 10px; height: 100px; width: 50%; max-height: 125px;max-width: 158px;
                                         red; text-align: center; margin-left: 60px;"> <img src='<?php echo "upload/".$_FILES_name ?>' class="imgstyle"> </div>
									</div>
								</div>
							</div>
						</section>

						<br>

				
						<div class="">
							<div class="row">
								<div class="col-sm-6">
									<div style="padding-left:20px;">
										<h5 style="display:flex;"><b>Enrollment No.:</b>
                                          <input type="text" name="name" disabled value="<?php if(isset($eno)) echo $eno;?>" >
                                        </h5> </div>
								</div>
								<div class="col-sm-6">
									<div style="padding-left:5px;">
								     <h5 style="display:flex;"><b>Student Reg. No.:</b>
                                          <input type="text" name="name" disabled value="<?php if(isset($rno)) echo $rno;?>" >
                                     </h5> </div>
								</div>
							</div>
						</div>



						<div class="">
							<div class="row">
								<div class="col-sm-6">
									<div style="padding-left:20px;">
										<h5 style="display:flex;"><b>Course Mode:</b>
                                        <input type="text" name="name" disabled value="<?php if(isset($nm)) echo $nm;?>">
                                       </h5> </div>
								</div>
								<div class="col-sm-6">
									<div  style="padding-left:5px;">
										<h5 style="display:flex;"><b>Certificate No.:</b>
                                      <input type="text" name="name" disabled value="<?php if(isset($cno)) echo $cno;?>">
                                    </h5> </div>
								</div>
							</div>
						</div>


						<br>
						<section>
							<div class="">
								<div class="row" style="border="1px solid red">
									<div class="col-sm-12">
										<p style=" text-align: justify;  font-weight: bold; font-size: 20px; margin-top: 20px;padding:0px 20px"> This is  to Certified by
											<b style="text-decoration:underline;"><?php if(isset($cnm)) echo $cnm;?> </b> S/O D/O W/O Mr :
											<b style="text-decoration:underline;"><?php if(isset($fnm)) echo $fnm;?></b> has successfully completed The final examination conducted by the Board Of examination CGCE and obtained
											<b style="text-decoration:underline;"><?php if(isset($grd)) echo $grd;?></b> Grade in the Examination.</p>
									</div>
								</div>
							</div>
						</section>


						<br>
						<br>
						<section>
							<div class="">
								<div class="row">
									<div class="col-sm-4">
										<div>
											<p style="text-align: center; "><b style="font-size: 21px;"> Joining Date</b>
												<br>
												<input type="text" name="" disabled value="<?php if(isset($Joing_Date)) echo $Joing_Date;?>" style="    margin-left: 74px;">
											</p>
										</div>
									</div>
									<div class="col-sm-8">
										<p style="background-color:transparent;text-align: center; border-style: none; border:1px solid black;width: 90%;margin:auto"> <b> GRADE LEGEND (%)</b> </p>
										<table style="width: 90%;margin:auto">
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
													<input type="checkbox"> >90</th>
												<th>
													<input type="checkbox"> 70-90</th>
												<th>
													<input type="checkbox"> 60-50</th>
												<th>
													<input type="checkbox"> 50-55</th>
												<th>
													<input type="checkbox"> 40-49</th>
												<th>
													<input type="checkbox"> 40</th>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</section>


						<br>
						<br>
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
														<input type="text" name="" disabled="" value="<?php if(isset($Issue_Date)) echo $Issue_Date;?>" style="margin-left: 89px;">
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
							<div class="">
								<div class="row">
									<div class="col-sm-12">
										<div style="text-align: center;">
											<p style="text-align: center;font-size: 21px;"><b>___________________________ Head Office: _______________________</b></p>
										</div>
									</div>
								</div>
							</div>
						</section>

						<br>
						<section>
							<div class="container">
								<div class="row">
									<div class="col-sm-1"> </div>
									<div class="col-sm-10">
										<div class="div" style="color: yellowgreen; text-align: justify;">
											<center>
												<p><b>Ashok Nagar Sheetalganj Tirha Near Hanuman Mandir, Bansi Siddharth Nagar, UP-272153 <br>  <a href="http://careergroups.in/">CGCE </a> Email ID: careergroups2020@gmail.com</b></p>
												<br>
												</center>
										</div>
									</div>
									<div class="col-sm-1"> </div>
								</div>
							</div>
						</section>
					<br>
				</div>
			</div>
		</div>
		</div>
	</div>
 <br>
 <br>
<br>
<br
<br>
<br>
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
                                         </h5> </div>
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
                                             </h5> </div>
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
												<div style="text-align: center;"> <img src="logo1.png"> </div>
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
									<div class="row" style="padding-top:30px;">
										<div class="col-sm-6">
											<div>
												<h5 style="margin-left: 20px;"><b>Enrollment No.:</b>

                                                <input type="text" name="name" disabled value="<?php if(isset($eno)) echo $eno;?>"  style="width: 50%;">
                                               </h5>
                                             </div>
										</div>
										<!--<div class="col-sm-4">-->
										<!--	<div>-->
										<!--		<h5><b>Reg. No.:</b>-->
								          <!-- <input type="text" name="name" disabled value="<?php if(isset($cnm)) echo $cnm;?>"  style="width: 90px;">-->
								          <!-- </h5> </div>-->
										<!--</div>-->
										<div class="col-sm-6">
											<div>
												<h5><b>Certificate No.:</b>
                                                <input type="text" name="name" disabled value="<?php if(isset($cno)) echo $cno;?>" style="width: 266px;">
                                               </h5>
                                             </div>
										</div>
									</div>
								</div>



								<section>
									<div>
										<div class="container" style="margin-left: 20px;">
											<div class="row">
												<div class="col-12">
													<div>
														<h5><b>Name:</b>
                                                            <input type="text" name="" disabled value="<?php if(isset($fnm)) echo $fnm;?>" style="width: 85%;" >
                                                        </h5>
                                                    </div>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<div>
														<h5><b>Father Name:</b>
                                                        <input type="text"  style="width: 79%;" disabled value="<?php if(isset($father)) echo $father;?>" >
                                                       </h5>
                                                    </div>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<div>
														<h5><b>Course:</b>
                                                        <input type="text" name="name" disabled value="<?php if(isset($cnm)) echo $cnm;?>" style="width: 85%;" >
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
											<div class="col-sm-4"> </div>
											<div class="col-sm-4">
												<div style="background-color: blue; height: 2px;">
													<hr> </div>
												<h4 style="padding: 10px;"><b style="color: #9d4443;">MEMORANDUM OF MARKS</b></h4>
												<div style="background-color: blue;height: 2px;">
													<hr> </div>
											</div>
											<div class="col-sm-4"> </div>
										</div>
									</div>
								</section>
								


								<section>
									<div class="container">
										<div class="row">
											<div class="col-sm-12">
												<div style="overflow-x:auto;">
													<table style="width:96%;margin:auto">
														<tr style="text-align: center;">
															<th>Sr No.</th>
															<th>Subject</th>
															<th>Max Mark</th>
															<th>Obtained Mark</th>
														</tr>
														<tr style="text-align: center;">
															<td>1</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($ADCA)) echo $ADCA;?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($ca)) echo $ca;?>" >
															</td>
															<td>
																<input type=" tex" name=" text" disabled value="<?php if(isset($cam)) echo $cam;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field2 !="") echo 2; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field2)) echo $field2; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($mo)) echo $mo;?>">
															</td>
															<td>
																<input type=" text" name=" text" disabled value="<?php if(isset($mom)) echo $mom;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field3 !="") echo 3; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field3)) echo $field3; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($dt)) echo $dt;?>">
															</td>
															<td>
																<input type=" tex" name=" text" disabled value="<?php if(isset($dtm)) echo $dtm;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field4!="") echo 4; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field4)) echo $field4; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($ty)) echo $ty;?>">
															</td>
															<td>
																<input type=" text" name=" text" disabled value="<?php if(isset($tym)) echo $tym;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field5!="") echo 5; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field5)) echo $field5; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($htt)) echo $htt;?>">
															</td>
															<td>
																<input type=" text" name=" text" disabled value="<?php if(isset($httm)) echo $httm;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field6!="") echo 6; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field6)) echo $field6; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($ht)) echo $ht;?>">
															</td>
															<td>
																<input type=" tex" name=" text" disabled value="<?php if(isset($htm)) echo $htm;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field7!="") echo 7; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field7)) echo $field7; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($ja)) echo $ja;?>">
															</td>
															<td>
																<input type=" tex" name=" text" disabled value="<?php if(isset($jam)) echo $jam;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field8!="") echo 8; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field8)) echo $field8; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($pm)) echo $pm;?>">
															</td>
															<td>
																<input type=" tex" name=" text" disabled value="<?php if(isset($pmm)) echo $pmm;?>">
															</td>
														</tr>
														<tr style="text-align: center;">
															<td><?php if($field9!="") echo 9; ?></td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($field9)) echo $field9; ?>">
															</td>
															<td>
																<input type=" text" name="text" disabled value="<?php if(isset($pra)) echo $pra;?>">
															</td>
															<td>
																<input type=" tex" name=" text" disabled value="<?php if(isset($pram)) echo $pram;?>">
															</td>
														</tr>
														<tr>
															<td></td>
															<td>Grade <input type="text" name="" disabled value="<?php if(isset($grd)) echo $grd;?>"></td>
															<td>Total</td>
															<td>
																<input type=" tex" name=" text" disabled value="<?php echo $total2;?>">
															</td>
													</table>
												</div>
											</div>
										</div>
									</div>
								</section>


								<section>
									<div class="container">
										<div class="row">
											<div class="col-sm-12"><p style="font-size: 20px;padding-top: 15px;font-weight: 600;
                                               padding-bottom: 20px;"><b style="font-size: 20px;">Grade : </b> Above 90% -S, 70% to 90% -A, 60%-B, 50% to 59% -C, 40% to 49% -D Below 40%-Fall</p>
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
														<input type="text" name="" disabled value="<?php if(isset($Issue_Date)) echo $Issue_Date;?>"  style="margin-left: 89px;">
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

								<section>
									<div class="container">
										<div class="row">
											<div class="col-sm-12">
												<div style="text-align: center;">
													<p style="text-align: center;font-size: 21px;"><b>___________________________ Head Office: _______________________</b></p>
												</div>
											</div>
										</div>
									</div>
								</section>

                            
								<section>
									<div class="container">
										<div class="row">
											<div class="col-sm-12">
												<div class="div" style="text-align: center; color: yellowgreen;">
													<p><b>Ashok Nagar Sheetalganj Tirha Near Hanuman Mandir, Bansi Siddharth Nagar, UP-272153 <br>  <a href="http://careergroups.in/">CGCE </a> Email ID: careergroups2020@gmail.com</b></p>
												</div>
											</div>
										</div>
									</div>
								</section>
                             <br>
                              
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>	
                       




		<section style="text-align: center;padding-top:40px;margin-bottom:50px;" ><a href="<?php echo $output; ?>" class="btn btn-success"  onclick="window.print()">Download My Certificate</a>
		
			
			</section>
			      
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	     <!--<script type="text/javascript">-->
      <!--      function printSection(el){-->
      <!--          var getFullContent = document.body.innerHTML;-->
      <!--          var printsection = document.getElementById(el).innerHTML;-->
      <!--          document.body.innerHTML = printsection;-->
      <!--          window.print();-->
      <!--          document.body.innerHTML = getFullContent;-->
      <!--      }-->
      <!--  </script>-->
      
	</body>

	</html>