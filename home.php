
<?php
// Start the session
session_start();
?>

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
    background-image: url("images/homeback.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
body, html {
    height: 100%;
}
</style>
        

	
</head>
<script type="text/javascript">

// this will colse the parent window.

window.opener.close();

</script>
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="container">
<div class="topnav">
	<div style="overflow:auto;">

	  <a class="active" href="#home">Home</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<img style="width:40%;" src="images/army.png">
		</div>
		<div class="col-lg-4">
			<h1 style="color: #2b16a5;"><b>Welcome to AUTM</b></h1>
		</div>
		<div class="col-lg-4">
			<img style="width: 60%; float: right;" src="images/flag2.gif">
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 "></div>
		<div class="col-lg-6 " >
			<h2 class="" style="text-align: center; background-color: white; padding-bottom: 10px;">Login</h2>
			<form method="post" action="" >
			<table class="form-control" style="padding-top: 10px; background-color: rgba(0, 0, 0, 0.5);">
				<tr>
					<td ><font color="white"><b>Personal Number</b></font></td>
					<td><font color="white"><b>:</b></font></td>
					<td>
						<input type="text" name="PNO">
					</td>
				</tr>
				<tr>
					<td><font color="white"><b>Password</b></font></td>
					<td><font color="white"><b>:</b></font></td>
					<td>
						<input type="Password" name="PWD">
					</td>
				</tr>
				<tr>
					<td><font color="white"><b>Appointment</b></font></td>
					<td><font color="white"><b>:</b></font></td>
					<td>
					
			    	 <select name="APPT">
			    	 	 <option value="" >Select your Appointment</option>
			     		  <option value="CO">Commanding Officer</option>
						  <option value="2IC">Second in command</option>
						  <option value="CC">Company COmmander</option>
						  <option value="SO">Staff Officer</option>
						  <option value="OO">Other Officer</option>
						  <option value="JCO">Company JCO</option>
						  <option value="HCLK">Head Clerk</option>
						  <option value="TCLK">Training Clerk</option>
						  <option value="CCLK">Company Clerk</option>
						  <option value="PVT">User</option>	
			     </select>					
			 </td>
				</tr>
			</table>
			<br>
			<button class="" type="submit" style="color : black;" name="login"><b>Login</b></button>
			<button class="" style="background-color: blue;" name="set_pass" onclick="myFunction()"><b>Set Password</b></button>
			<span class="psw" style=""><a style="color:#2b16a5;" href="#"><b>Forgot password?</b></a></span>
		</form>

		<script>
		function myFunction() {
		    header('location:setPass.php');
		}
		</script>	

		</div>
		<div class="col-lg-3 "></div>
	</div>
</div>

	<?php
		ob_start();
		
		
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
				require 'connect.php';

				$pno = $_POST['PNO'];
				$pass =   $_POST['PWD'];
				$appt =  $_POST['APPT'];	
				$sql = "SELECT * FROM `login` WHERE `personal_no` = $pno";

				$_SESSION['LginID'] = $pno;

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

