<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AUTM - CO - Staff</title>
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
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

.btn2 {
    border: none;
    background-color: inherit;
    font-size: 16px;
    cursor: pointer;
    display: inline-block;
    
}

.btn2:hover {background: #eee;}

.Add {color: green;}
.Edit {color: orange;}
.Delete {color: red;}

</style>
</head>
<body>

<section id="home", class="home">
  <div class="container">
    <div class="prof_info">
      <div class="topnav">
        <div style="overflow:auto;">

          <a class="active" href="#home">Home</a>
          <a href="#staffs" onclick="myFunction()">Staffs</a>
          <a href="Profile.php">Profile</a>
          <a style="float:right" class="active" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

<table>

<tr>
    
    <th>Personal No</th>
    <th>Rank</th>
    <th>Appointment</th>

  </tr>

  <?php
  $conn = new mysqli('localhost','root','','autm');
$sql = 'SELECT * FROM `login` WHERE role = "staff"';

$result = $conn->query($sql);

 while($row = $result->fetch_assoc()) {

        echo '

          <tr>
            <td>'.$row['personal_no'].' </td> 
            <td>'.$row['user_type'].' </td>
            <td>'.$row['role'].' </td>
            <td><button style="width:100px;">Edit</button></td>
            <td><button style="width:100px;">Delete</button></td>
          </tr>

          

        ';
    }

?>



</table>

   <button  class="btn2 Add"><a href="Add.php">Add</a></button>
           
</section>

</body>
</html>
