<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AUTM - Coy CLerk - Insert Profile </title>
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap-grid.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap-reboot.css" type="text/css" />
        <link rel="stylesheet" href="../css/main.css" type="text/css" />

        
    
<style>
body  {
    background-image: url("o.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
body, html {
    height: 100%;
}
}
.Insert_profile{
border-radius:10px;
background:transparent;
padding:40px;
width:100%;
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
table{
	width:100%;
}
table, th, td {

    border: 1px solid black;
}


</style>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" >
	<div class="container" ">
  
     <div class="topnav" style="border-radius:10px;">
	    <div style="overflow:auto; ">
	        <a class="active" href="cclkhome.php">Home</a>
	        <a href="Basic info.php">Insert Profile</a>
		    <a href="#contact">View Profile</a>
		    <a href="#contact">Update Profile</a>
		  	<a href="#contact">Contact</a>
		  	<a href="#about">About</a>
	        <a style="float:right" class="active" style="color: red;" href="../logout.php">Logout</a>
	    </div>
    </div>

 

	<div class="Insert_profile">


		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
				
				<h1 style =" text-align: center;" > Insert Profile </h1>
					
			</div>
			<div class="col">
				
			</div>
		</div>


		<div class="row">
			<div class="col">
				<form method="post" action="">
					
					<button  style="background-color: blueviolet;" onclick="myFunction()"  >
								Complete A profile
							</button>
					
							
				</form>
				
			</div>
			<div class="col">
				
				<form method="post" action="">
					<button style="background-color: blue;">
						New Profile
					</button>
						
				</form>				
					
			</div>
			<div class="col">
				<form method="post" action="">
					<div >
						<button  style="background-color: midnightblue;"   >
								Update A profile
							</button>
					</div>
							
				</form>			
			</div>
		</div>

		
			<div class="row">
				<div class="col">
					<div class="col">
						<div class="col">
						 	<a href="Basic info.php"> <button style="background-color: saddlebrown;">Basic Information </button></a><br><br>
							<a href="Educational_info.php"><button style="background-color: seagreen;"> Educational Information</button></a><br><br>
							<a  href="Service_info.php"><button style="background-color: steelblue;"> Service Information</button></a><br><br>
							<a href="Training_info.php"><button style="background-color: olivedrab;">Training information</button></a><br>
						</div>
					</div>			
				</div>

				<div  class="col">
					
						 <div align="left">Personal No:</div>
					 		<input type="text" id="pno" name="PNO" required>
					
				</div>
				<div class="col" >
					<form method="post" action="">
					<div >
						<button  style="background-color: teal ;"   >
								Proceed
							</button>
					</div>

					<input type="button" value="Home" class="homebutton" id="btnHome" onClick="window.location = 'http://google.com'" />
							
				</form>	
				</div>
				
			</div>
		

		
   
  <script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

</div>

<?php
    ob_start();
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['BI'])){
    	 require '../connect.php';
    	header('location:Basic info.php');

    }
    
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
<!-- <button onclick="myFunction()">Try it</button> -->

<!-- <div id="myDIV">
This is my DIV element.
<form>
					 
					 	<button style="background-color: blue;" href="Basic info.php" name="BI">Basic Information</button><br>
						<button style="background-color: blue;" href="Educational_info.php"> Educational Information</button><br>
						<button style="background-color: blue;" href="Service_info.php"> Service Information</button><br>
						<button style="background-color: blue;" href="Training_info.php"> Training information </button><br>

					
				</form>
</div> -->




</div>
</div>
</body>
</html>
 
  
  
