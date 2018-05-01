<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AUTM - CO</title>
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap-grid.css" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap-reboot.css" type="text/css" />
	<link rel="stylesheet" href="../css/main.css" type="text/css" />

		<link rel="stylesheet" href="../assets/css/iconfont.css">
        <link rel="stylesheet" href="../assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="../assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="../assets/css/responsive.css" />

        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	
<style>
body  {
    background-image: url("../images/homeback4.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
body, html {
    height: 100%;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

/*.Prof_info{
border-radius:10px;
background:transparent;
padding:40px;
width:50%;
margin:auto;
color:#fff;
font-size:16px;
}
*/
</style>
        
</head>

	
<?php
$s="string";
?>

<body data-spy="scroll" data-target=".navbar-collapse">

<section id="home", class="home">
	<div class="container">
		<div class="prof_info">
			<div class="topnav">
				<div style="overflow:auto;">

				  <a class="active" href="#home">Home</a>				  
				  <a href="staff.php">Staff</a>
				  <a href="Profile.php">Profile</a>
				  <a href="#contact">Contact</a>
				  <a href="#about">About</a>
				  <a style="float:right" class="active" href="../logout.php">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
		        <label for="comment" style="color: white;"><h3><b>Comment</b></h3></label>
		     </div>
			<div class="col-lg-4">
        		<textarea id="comment" name="comment" style="height:200px; width:500px;" disabled><?php echo $s;?></textarea>
      		</div>
      		<div class="col-lg-4">
      			<BUTTON>Seen</BUTTON>
      		</div>
		</div>
		<div class="row">
			<div class="col-25">
		        <label for="circular" style="color: white;"><h3><b>Circular</b></h3></label>
		     </div>
			<div class="col-75">
        		<textarea id="circular" name="circular" style="height:200px; width:500px;" disabled></textarea>
      		</div>
		</div>
	</div>

</section>



	
					<?php
						ob_start();
						$s="";
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

														// if($appt == 'CO'){
														// 	header('location:CO/cohome.php');
														// 	exit;
														// }
														// else if($appt == '2IC'){
														// 	header('location:2ic/2ichome.php');
														// 	exit;
														// }
														// else if($appt == 'CC'){
														// 	header('location:CoyComd/cchome.php');
														// 	exit;
														// }
														// else if($appt == 'SO'){
														// 	header('location:StaffOffr/sohome.php');
														// 	exit;
														// }
														// else if($appt == 'OO'){
														// 	header('location:OtherOfficer/oohome.php');
														// 	exit;
														// }
														// else if($appt == 'HCLK'){
														// 	header('location:HeadClerk/hclkhome.php');
														// 	exit;
														// }
														// else if($appt == 'TCLK'){
														// 	header('location:TrgClerk/tclkhome.php');
														// 	exit;
														// }
														// else if($appt == 'CCLK'){
														// 	header('location:CoyClerk/cclkhome.php');
														// 	exit;
														// }
														// else if($appt == 'PVT'){
														// 	header('location:IndividualSoldier/pvthome.php');
														// 	exit;
														// }
														
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
		





<p><b>Note:</b> The element will not take up any space when the display property set to "none".</p>

<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

</body>
</html>

