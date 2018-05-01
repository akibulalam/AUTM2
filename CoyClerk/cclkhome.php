<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AUTM - Coy CLerk - Insert </title>
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap-reboot.css" type="text/css" />
	<link rel="stylesheet" href="../css/main.css" type="text/css" />

	
<style>
body  {
    background-image: url("../images/homeback4.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
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

	  <a class="active" href="cclkhome.php">Home</a>
	   <a href="insertProfile.php">Insert Profile</a>
	    <a href="#contact">View Profile</a>
	     <a href="#contact">Update Profile</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
	  <a style="float:right" class="active" style="color: red;" href="../logout.php">Logout</a>
	</div>
</div>
<div class="container" style="background-color: hsla(89, 43%, 51%, 0.3); border-radius:10px;  " >
		<div class="row">
			<div class="col" align="right">
		        <label for="comment" style="color: white;" ><h3><b>Comment</b></h3></label>
		     </div>

			<div class="col">
        		<textarea id="viewcomment" name="viewcomment" placeholder ="Type Your Comment here" style="height:200px; width:500px;">
        			
        		</textarea>
        	</div>
        	
        	<div class="col" position ="relative">
      			<button name="commentSubmit">Submit</button>
      		</div>
      		
      	</div>
      	<br>
		<div class="row">
			<div class="col" align="right">
		        <label for="circular" style="color: white;"><h3><b>Comment</b></h3></label>
		     </div>
			<div class="col">
        		<textarea id="Comment" name="Comment" style="height:200px; width:500px;" disabled></textarea>
        	</div>
        	<div class="col" >
      			<button name="commentSeen">Seen</button>
      		</div>
      		
		</div><br>
		<div class="row">
			<div class="col" align="right">
		        <label for="circular" style="color: white;"><h3><b>Circular</b></h3></label>
		     </div>
			<div class="col">
        		<textarea id="circular" name="circular" style="height:200px; width:500px;" disabled></textarea>
        	</div>
        	<div class="col" >
      			<button name="circularSeen">Seen</button>
      		</div>
      		
		</div>

	
</div>
</div>
</body>
</html>

