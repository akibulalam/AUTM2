<!DOCTYPE html>
<html>
<head>
<title> Individual-Information</title>
<link rel ="stylesheet" href ="css/style.css" type="text/css">

<style>
body{


background-repeat:no-repeat;
background-size:cover;
}
.img{
background-image: url("w.jpg");

background-repeat:no-repeat;
background-size:cover;
}
.Individual-Info{
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
<div class="img">
<div class="Individual-Info">

<form>
<h1> Individual-Info</h1>


  
  <tr>
    <td valign="top"><div align="left">Father's Name:</div>
	<input type="text" id="Father's Name:" name="Father's Name:">
    
  </tr>
  
  
  
  <tr>
    
    <td width="82" valign="top"><div align="left">Father's Mobile:</div></td>
	<td><input type="text" id="Father's Mobile:" name="Father's Mobile:"</td>
    
  </tr>
  
  
   <tr>
    
    <td width="82" valign="top"><div align="left">Mother's Name:</div></td>
	<td><input type="text" id="Mother's Name:" name="Mother's Name:"</td>
    
  </tr>
  
   
   
    <div class ="date-of-birth">
<span style ="font-size:18px";>Date of Birth</span><br><br>
<select name ="DOBmonth">
<option> Month</option>
<option value="January">January</option>
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>

<select name ="DOBday">
<option> Day</option>
<option value="1st">1st</option>
<option value="2nd">2nd</option>
<option value="3rd">3rd</option>
<option value="4th">4th</option>

</select>

<select name ="DOByear">
<option> year</option>
<option value="2012">2012</option>
<option value="2015">2015</option>
</select>
  
 </div>


 <tr>
    
    <td width="82" valign="top"><div align="left">Birth Place</div></td>
	<td><input type="text" id="Birth Place" name="Birth Place"</td>
    
  </tr>
  

<tr>
    
    <td width="82" valign="top"><div align="left">Marital Status</div></td>
	<td><input type="text" id="Marital Status" name="Marital Status"</td>
    
  </tr>
  
  
  
  
 
  
  
  </form><br><br>
<input type="Save" value="Save" id ="butt">
</div>
</div>



</body>
</html>
  
  
  
  
  
  