<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AUTM - Automated Unit Training Manager</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-reboot.css" type="text/css" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />

	
<style>
body  {
    background-image: url("../images/homeback.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
body, html {
    height: 100%;
}
</style>
        

	
</head>

<body data-spy="scroll" data-target=".navbar-collapse">
<div class="container">
<div class="topnav">
	<div style="overflow:auto;">

	  <a class="active" href="#home">Home</a>
	  <a href="2icProfile.php">Profile</a>
	  <a href="2icRequest.php">Request</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
	  <a style="float:right" class="active" style="color: red;" href="../logout.php">Logout</a>
	</div>
</div>


	<?php
		ob_start();
		require '../connect.php';
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
			
				$pno = $_POST['PNO'];
				$pass =   $_POST['PWD'];
				$appt =  $_POST['APPT'];	
				$sql = "SELECT * FROM `login` WHERE `personal_no` = $pno";

				 $result = mysqli_query($con,$sql);

				 if($result){
				 
										// Fetch one and one row
					  while ($row=mysqli_fetch_row($result))
					    {
					    
					    if($row[0]==$pno){
						    if($row[1] == $pass){
									if($row[2]==$appt){

										if($appt == 'CO'){
											header('location:CO/cohome.php');
											exit;
										}
										else if($appt == '2IC'){
											header('location:2ic/2ichome.php');
											exit;
										}
										else if($appt == 'CC'){
											header('location:CoyComd/cchome.php');
											exit;
										}
										else if($appt == 'SO'){
											header('location:StaffOffr/sohome.php');
											exit;
										}
										else if($appt == 'OO'){
											header('location:OtherOfficer/oohome.php');
											exit;
										}
										else if($appt == 'HCLK'){
											header('location:HeadClerk/hclkhome.php');
											exit;
										}
										else if($appt == 'TCLK'){
											header('location:TrgClerk/tclkhome.php');
											exit;
										}
										else if($appt == 'CCLK'){
											header('location:CoyClerk/cclkhome.php');
											exit;
										}
										else if($appt == 'PVT'){
											header('location:IndividualSoldier/pvthome.php');
											exit;
										}
										
									}
									else {
											echo '<script language="javascript">';
											echo 'alert("Appointment does not match")';
											echo '</script>';
											echo '
											<script type="text/javascript"> 
											
											</script>';
											exit;
									}
											
								}
								else {
								
									echo '<script language="javascript">';
									echo 'alert("Password does not match")';
									echo '</script>';
									echo '
									<script type="text/javascript"> 
									
									</script>';
									exit;
									
								}
							}
							
				 	}
					  
				 }
				 else{
				 	echo '<script language="javascript">';
					echo 'alert("Personal Number does not match")';
					echo '</script>';
					echo '<script type="text/javascript"> 
						</script>';
					exit;
				}

				 mysqli_free_result($result);

			}


			
?>
</div>
</body>
</html>

