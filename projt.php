<?php

// $Name=$row3['Name'];
// $Number=$row3['Number'];
// $Date_of_birth=$row3['Date_of_birth'];
// $joining_date=$row3['joining_date'];
// $village=$row3['village'];
// $post=$row3['post'];
// $police_station=$row3['police_station'];
// $district=$row3['district'];
// $courses=$row3['courses'];

$Name='s';
$Number='f';
$Date_of_birth='k';
$joining_date='y';
$village='y';
$post='h';
$police_station='t';
$district='e';
$courses='y';

?>
<html>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="home.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">Name:</div></td>
    <td width="165" valign="top"><?php echo $Name ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Number:</div></td>
    <td valign="top"><?php echo $Number ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Date_of_birth:</div></td>
    <td valign="top"><?php echo $Date_of_birth?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">joining_Date:</div></td>
    <td valign="top"><?php echo $joining_date?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"> village:</div></td>
    <td valign="top"><?php echo $village ?></td>
  </tr>
<tr>
    <td valign="top"><div align="left">post:</div></td>
    <td valign="top"><?php echo $post ?></td>
  </tr>
<tr>
    <td valign="top"><div align="left">police_station:</div></td>
    <td valign="top"><?php echo $police_station ?></td>
  </tr>
<tr>
    <td valign="top"><div align="left">district:</div></td>
    <td valign="top"><?php echo $district ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">courses:</div></td>
    <td valign="top"><?php echo $courses?></td>
  </tr>

</table>
<p align="center"><a href="home.php"></a></p>
</html>