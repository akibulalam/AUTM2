<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AUTM - Coy CLerk - Basic Info </title>
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap-grid.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap-reboot.css" type="text/css" />
        <link rel="stylesheet" href="../css/main.css" type="text/css" />

        
    
<style>
body  {
    background-image: url("m.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
body, html {
    height: 100%;
}
.Basic-Info{
border-radius:10px;
background:transparent;
padding:40px;
width:50%;
margin:auto;
color:#fff;
font-size:16px;
}
.wrap{
width:350px;
margin:auto;
margin-top:50px;
padding:5px;
}
form
{
padding:10px;
font-family:Arial;
border:1px dotted white;
margin:10px;
}


h2
{
text-align:center;
padding:10px;
border-radius:10px;

}

input
{
padding:10px;
margin:15px;
border-radius:10px;
border:none;


}
input[type=text],input[type=number]
{
width:50%
}
input[type=Submit]
{
width:50%;
cursor:pointer;
font-size:18px;
font-weight:bold;
color:black;
}
input[type=Submit]:hover
{
background:transparent:
}

</style>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
  <div class="container" ">
  <section id="home", class="home">
      <div class="topnav" style="border-radius:10px;">
      <div style="overflow:auto; ">

        <a class="active" href="cclkhome.php">Home</a>
         <a href="#eduinfo" >Educational Information</a>
         <a href="#svcinfo" >Service Information</a>
         <a href="#trgInfo" >Training Information</a>
        <a style="float:right" class="active" style="color: red;" href="../logout.php">Logout</a>
      </div>
    </div>
  </section>
</div>

<div class="Basic-Info">


<form method="post" action="" >
<h1> Basic-Info </h1>


  
  <tr>
    <td valign="top"><div align="left">Personal No:</div>
	 <input type="text" id="pno" name="PNO" required>
    </td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">First Name:</div>
  <input type="text" id="First Name" name="FName" required>
    </td>
  </tr>

  <tr>
    <td valign="top"><div align="left">Middle Name:</div>
  <input type="text" id="Middle Name" name="MName">
    </td>
  </tr>

  <tr>
    <td valign="top"><div align="left">Last Name:</div>
  <input type="text" id="Last Name" name="LName" required>
    
 </td>
</tr>

<tr>
  
  <td width="82" valign="top"><div align="left">Birth Date</div></td>
  <td>
<div>
  <input type="date"  id="bdate" name="bdate" required>
  </div>
  </td>
  </tr>

  <tr>
    
    <td width="82" valign="top"><div align="left">Religion</div></td>
	<td><input type="text" id="Religion" name="Religion" required></td>
    
  </tr>
  
  
   <tr>
    
    <td width="82" valign="top"><div align="left">Nationality </div></td>
	<td><input type="text" id="Nationality" name="Nationality" required></td>
    
  </tr>

  <tr>
    
    <td width="82" valign="top"><div align="left">Blood Group</div></td>
  <td><input type="text" list = "BG" placeholder="Select one from Below" id="Blood Group" name="BloodGroup" required>
   <datalist id="BG">
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option> 
       </datalist></td>
    
  </tr>
  
   <tr>
    
    <td width="82" valign="top"><div align="left">Gender</div></td>
  <td><input type="text" list = "gen" placeholder="Select one from Below" id="Gender" name="Gender" required>
   <datalist id="gen">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
       </datalist></td>
    
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left">
      <button type="Submit" name ="BasicInfo">Submit</button>
    </td>
  </tr>
  </div>


  </form><br>
   
  </div>
</div>

<?php
    ob_start();
    
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['BasicInfo'])){
        require '../connect.php';
        $pno = " ";
        $fname =   " ";
        $mname =  " ";  
        $lname =   " ";
        $religion = " ";  
        $nationality =  " "; 
        $bg =   " ";
        $gender = " ";  
        $bdate= " ";

    
        $pno = $_POST['PNO'];
        $fname = $_POST['FName'];
        $mname = $_POST['MName'];  
        $lname = $_POST['LName'];
        $religion = $_POST['Religion'];  
        $nationality = $_POST['Nationality']; 
        $bg =   $_POST['BloodGroup'];
        $gender =  $_POST['Gender'];
          $bdate =  $_POST['bdate'];
        
        $_SESSION['profileID'] = $pno;

        // echo "no ".$pno." fname ".$fname." mname ".$mname." lname ".$lname." religion ".$religion." nat ".$nationality." BloodGroup ".$bg." gender ".$gender;
      

        $sql1 = "INSERT INTO `profile`(`personalno`, `birthdate`) VALUES ('$pno', '$bdate')";

        $sql = "INSERT INTO `persons`(`pno`, `FirstName`, `MiddleName`, `LastName`, `gender`, `religion`,`Nationality`, `Blood_Group`) VALUES ( '$pno','$fname','$mname','$lname','$gender', '$religion','$nationality','$bg')";
        
        $result1= mysqli_query($con,$sql1);
        $result2 = mysqli_query($con,$sql);

        
         
                  header('location:Educational_info.php');

          
       

      }


      
?>


</body>
</html>
  
  
  
  
  
  