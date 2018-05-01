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
background-image: url("o.jpg");

background-repeat:no-repeat;
background-size:cover;
}
.Servic-Information{
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
<div class="Servic-Information">

<form method="post" action="">
<h1> Proffessional  Information</h1>


  
  <tr>
    <td valign="top"><div align="left">Rank</div>
	<input type="text" list ="rank" id="Rank" placeholder="Select one from Below" name="Rank" required>
  <datalist id="rank">
        <option value="HCapt">Honorary Captain</option>
        <option value="HLt">Honorary Lieutenant</option>
        <option value="MWO">Master Warrant Officer</option>
        <option value="SWO">Senior Warrant Officer</option>
        <option value="WO">Warrant Officer</option>
        <option value="BSM">Battalion Sargent Major</option>
        <option value="BQMS">Battalion Quarter Master Sargent</option>
        <option value="CSM">Company Sargent Major</option>
        <option value="CQMS">Company Quarter Master Sargent</option>
        <option value="SGT">Sargent</option>
        <option value="CPL" >Corporal</option>
        <option value="LCPL">Lance Corporal</option>
        <option value="PVT">SAINIK</option>
      </datalist></td>
    
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Trdae</div></td>
  <td><input type="text" list = "trade" placeholder="Select one from Below" id="TRADE" name="TRADE" required>
   <datalist id="trade">
          <option value="Gnr">Gunner</option>
          <option value="TA">ATechnical Assistant</option>
          <option value="OCU">Operator Communication Unit</option>
          <option value="DMT">Driver Military Transport</option>
          <option value="CLK">Clerk</option>
          <option value="Cook">Cook</option>
          <option value="Carp">Carpentar</option>
       </datalist></td>
    
  </tr>
  <tr>
  
  <td width="82" valign="top"><div align="left">Joining Date</div></td>
  <td>
<div>
  <input type="date"  id="Jdate" name="Jdate" required>
  </div>
  </td>
  </tr>

 <tr>
  
  <td width="82" valign="top"><div align="left">Last Promotion Date</div></td>
  <td>
<div>
  <input type="date"  id="pdate" name="pdate"  required> *For Soldiers same as joining date
  </div>
  </td>
  </tr>
  
  
   
  
 <tr>
 
   <td width="82" valign="top"><div align="left">Company</div></td>
  <td><input type="text" list = "coy" placeholder="Select one from Below" id="COY" name="COY" required>
   <datalist id="coy">
          <option value="P">Papa</option>
          <option value="Q">Quebek</option>
          <option value="R">Romeo</option>
          <option value="HQ">Head Quarter</option>
          
       </datalist></td>
    
    
  </tr>  
  <tr>
    <td width="82" valign="top"><div align="left">
      <button type="Submit" name ="BasicInfo">Submit</button>
    </td>
  </tr>
    
  
  </form><br><br>

</div>
</div>



</body>
</html>
  
  
  
  
  
  