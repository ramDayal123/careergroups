<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
  font-weight: bold;
  font-size: 17px;
  width:40%;
}
 

.input-text{
    width:100%;
}
</style>
</head>
<body>
<div class="container border mt-5 mb-5">
<h2 class="text-warning text-center">Student Details</h2>
<form action="downlodc.php" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="pwd">Enrollment No.:</label>
    <input type="text" name="eno" class="form-control" placeholder="Enter Enrollment No." id="pwd" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="pwd">Certificate No.:</label>
    <input type="text" name="cno" class="form-control" placeholder="Enter Certificate No." id="pwd" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="pwd">Registration No.:</label>
    <input type="text" name="rno" class="form-control" placeholder="Enter Register No." id="pwd" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="email">Certificate Name:</label>
    <input type="text" name="nm" class="form-control" placeholder="Enter Certificate Name" id="email" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="pwd"> Name:</label>
    <input type="text" name="fnm" class="form-control" placeholder="Enter Student Name" id="pwd" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="pwd"> Father Name:</label>
    <input type="text" name="father" class="form-control" placeholder="Enter Father Name" id="pwd" autocomplete="off" required >
  </div>
 
  <div class="form-group">
    <label for="pwd">Course Name:</label>
    <input type="text" name="cnm" class="form-control" placeholder="Enter Course Name" id="pwd" autocomplete="off" required>
  </div>
   <div class="form-group">
    <label for="pwd">Grade:</label>
    <input type="text" name="grd" class="form-control" placeholder="Enter Grade" id="pwd" autocomplete="off" required>
  </div>
 <div class="form-group">
    <label for="pwd">Photo:</label>
    <input type="file" name="photo" class="form-control" placeholder="select photo" autocomplete="off" required>
  </div>
  
  <div class="form-group">
    <label for="pwd">Joning Date:</label>
    <input type="date" name="Joing_Date" class="form-control" placeholder="Joning Date" autocomplete="off"required>
  </div>
   
  <div class="form-group">
    <label for="pwd">Issue Date:</label>
    <input type="date" name="Issue_Date" class="form-control" placeholder="Joning Date" autocomplete="off" required>
  </div>
  <section>
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <table>
             <tr style="text-align: center;"> 
             <th>Sr. No.</th>
              <th>Subject</th>
              <th>Max Mark</th>
              <th>Obtained Mark</th>
             </tr>
             <tr style="text-align: center;"><td> 1 -</td>
             
              <td><input type="text" name="ADCA" class="w-100" placeholder="Enter Subject ..............">
              </td>
              <td>
                  <input type=" text" name="ca" placeholder=".............."></td>
               <td>
                <input type=" tex" name="cam" placeholder="....................">
              </td>
             </tr>
              <tr style="text-align: center;"><td> 2 -</td><td><input type="text" class="input-text" name="field2" placeholder="Enter Subject....."></td><td><input type=" text" name="mo" placeholder=".............."></td><td><input type=" text" name=" mom" placeholder="...................."></td>
             </tr>
              <tr style="text-align: center;"><td> 3 -</td><td><input type="text" class="input-text" name="field3" placeholder="Enter Subject....."></td><td><input type=" text" name="dt" placeholder=".............."></td><td><input type=" text" name="dtm" placeholder="...................."></td>
             </tr>
              <tr style="text-align: center;"><td> 4 -</td><td><input type="text" class="input-text" name="field4" placeholder="Enter Subject....."></td><td><input type=" text" name="ty" placeholder=".............."></td><td><input type=" text" name="tym" placeholder="...................."></td>
             </tr>
             <tr style="text-align: center;"><td> 5 -</td><td><input type="text" class="input-text" name="field5" placeholder="Enter Subject....."> </td><td><input type=" text" name="htt" placeholder=".............."></td><td><input type=" text" name="httm" placeholder="...................."></td>
             </tr>
             
              <tr style="text-align: center;"><td> 6 - </td><td><input type="text" class="input-text" name="field6" placeholder="Enter Subject....."></td><td><input type=" text" name="ht" placeholder=".............."></td><td><input type=" text" name="htm" placeholder="...................."></td>
             </tr>
              <tr style="text-align: center;"><td> 7 - </td><td><input type="text" class="input-text" name="field7" placeholder="Enter Subject....."></td><td><input type=" text" name="ja" placeholder=".............."></td><td><input type=" text" name="jam" placeholder="...................."></td>
             </tr>
              <tr style="text-align: center;"><td> 8 -</td><td><input type="text" class="input-text" name="field8" placeholder="Enter Subject....."></td><td><input type=" text" name="pm" placeholder=".............."></td><td><input type=" text" name="pmm" placeholder="...................."></td>
             </tr>
             <tr style="text-align: center;"><td> 9 -</td><td><input type="text" class="input-text" name="field9" placeholder="Enter Subject....."></td><td><input type=" text" name="pra" placeholder=".............."></td><td><input type=" text" name="pram" placeholder="...................."></td>
             </tr>
           </table>
         </div>
       </div>
     </div>
   </section>
  
  <input type="submit" class="btn btn-primary mt-3" name="submit" value="Genrate">
</form>
<div>

</body>

</html>