<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AUTM - Coy CLerk - Insert </title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.css" type="text/css" />
        <link rel="stylesheet" href="css/main.css" type="text/css" />

<style>
body{


background-repeat:no-repeat;
background-size:cover;
}
.img{
background-image: url("f.jpg");

background-repeat:no-repeat;
background-size:cover;
}
.Educational-Info{
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
input[type=Save]
{
width:50%;
cursor:pointer;
font-size:18px;
font-weight:bold;
color:black;
}
input[type=Save]:hover
{
background:gray:
}

</style>
</head>
<body>
  <section id="home", class="home">
      <div class="topnav">
      <div style="overflow:auto; ">

        <a class="active" href="cclkhome.php">Home</a>
         <a href="" disable>Insert Profile</a>
        <a style="float:right" class="active" style="color: red;" href="../logout.php">Logout</a>
      </div>
    </div>
  </section>
<div class="img">
<div class="Educational-Info">

<form method="post" action="">
<h1> Educational-Info</h1>


  
  <tr>
    <td valign="top"><div align="left">SSC School</div>
	<input type="text" id="SSCS" name="SSCS" required>
    
  </tr>
  <tr>
    <td valign="top"><div align="left">SSC Result(Grade Point)</div>
  <input type="float" id="SSCR" placeholder = "GPA" name="SSCR" required>
    
  </tr>
  <tr>
    <td valign="top"><div align="left">HSC Collage</div>
  <input type="text" id="HSCC" name="HSCC" required>
    
  </tr>
  <tr>
    <td valign="top"><div align="left">HSC Result</div>
  <input type="float" id="HSCR" placeholder = "GPA" name="HSCR">
    
  </tr>
  
  <tr>
    
    <td width="82" valign="top"><div align="left">BA/BSc University</div></td>
  <td><input type="text" id="BABScU:" name="BABScU"></td>
    
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">BA/BSc Result</div></td>
  <td><input type="text" id="BABScR:" placeholder = "GPA or Division" name="BABScR"></td>
    
  </tr>

   <td width="82" valign="top"><div align="left">MA/MSc University</div></td>
  <td><input type="text" id="MAMScU:" name="MAMScU"></td>
    
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">MA/MSc Result</div></td>
  <td><input type="text" id="MAMScR:" placeholder = "GPA or Division" name="MAMScR"></td>
    
  </tr>

  <tr>
    <td width="82" valign="top"><div align="left">
      <button type="Submit" name ="EduInfo">Submit</button>
    </td>
  </tr>

  </form>
</div>
</div>

<?php
    ob_start();
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['EduInfo'])){
        require '../connect.php';
        $pno =  $_SESSION['profileID'];

        $SSCS = " ";
        $SSCR =   " ";
        $HSCC =  " ";  
        $HSCR =   " ";
        $BABScU = " ";  
        $BABScR =  " "; 
        $MAMScU =   " ";
        $MAMScR = " ";  
    
        $SSCS = $_POST['SSCS'];
        $SSCR = $_POST['SSCR'];
        $HSCC = $_POST['HSCC'];  
        $HSCR = $_POST['HSCR'];
        $BABScU = $_POST['BABScU'];  
        $BABScR = $_POST['BABScR']; 
        $MAMScU =   $_POST['MAMScU'];
        $MAMScR =  $_POST['MAMScR'];  

        // echo "no ".$pno." fname ".$fname." mname ".$mname." lname ".$lname." religion ".$religion." nat ".$nationality." BloodGroup ".$bg." gender ".$gender;
      echo $pno." pno ";

        $sql1 = "INSERT INTO `educational_info`(`SSC School`, `SSC RESULT`, `HSC Collage`, `HSC Result`, `BA/BSc University`, `BA/BSc Result`, `MA/MSc University`, `MA/MSc Result`, `pers_no`) VALUES ('$SSCS','$SSCR','$HSCC','$HSCR','$BABScU','$BABScR','$MAMScU','$MAMScR','$pno ')";

       
        $result1= mysqli_query($con,$sql1);
       
        

         
          
          if($result1){
           
                  header('location:Service_info.php');

          }
         else{
          echo '<script language="javascript">';
          echo 'alert("Could not upload Edcuation info, please try again")';
          echo '</script>';
          echo '<script type="text/javascript"> 
            </script>';
          exit;
        }

        
       

      }


      
?>



</body>
</html>
  
  
  
  
  
  