<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Marvel" rel ="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Mina" rel ="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>DATA COLLECTOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<!--protita row scrollable korte from the beginning -->
// This container element gives us the scrollbars we want.
div.horizontal {
    width: 100%;
    height: 400px;
    overflow: auto;
}

// table-layout: fixed does a lot of the magic, here. It makes sure that the "table cells" retain the pixel dimensions you want.
.table {
    display: table;
    table-layout: fixed;
    width: 100%;
}
.white-text{
color:white !important;
}
.submit{

  padding: 15px 25px;
  font-size: 20px;
  text-align: center;
  alignment:center;
  cursor: pointer;
  outline: none;
  color:#fff;
  background-color:#892e59;
  border: none;
  border-radius: 15px;
  box-shadow: 0 4px #779;
  width:25%;
}

.submit:hover {background-color:#e295ba;}

.submit:active {
  background-color: #600a2a;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
 label{font-family:Mina;}
  body{ background-color:#EEE2DC;
   overflow:hidden; <!-- scroll off korte -->
  }

.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
  
    background-color: #BAB2B5;
    overflow-x: hidden;
    padding-top: 250px;
  padding-left:20px;
  font-family:Mina,sans-serif;
  box-shadow: 5px 10px 18px #888888;
}

.sidenav a {
   padding: 10px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #fff;
    display: block;
}

.sidenav a:hover {
display: block;
    color: #f1f1f1;
  border-radius:5%;
    background-color:#323066;
}

.main {
    margin-left: 210px; /* Same as the width of the sidenav */
    font-size: 14px; /* Increased text to enable scrolling */
    padding: 0px 10px;
  padding-top:80px;

}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 13px;}
}
<!-- top nav -->
  #myNavbar{
  font-family:Mina,Calibri;
  font-size:18px;
  color:#ffffff 
  }
    nav{
  background-color:#951829;
  color:#ffffff ;
  }
  h1{
  font-family:Marvel;
  }
  <!--navbar e hover color change korte 
  ul.nav.navbar-nav a:hover { background-color: #ff11ff !important; }
  -->
  .navbar-default .navbar-nav > ul > a:hover, .navbar-default .navbar-nav > ul > a:focus {
    background-color: #FFFF00;
    color: #FFF;
}
.navbar-right > li > a:hover,  .navbar-right > li > a:focus {
    
    color: #FFF;
}
#view{
padding-top:100px;
}
<!-- table -->

table {
  font-family: Mina;
  margin: 25px auto;
  border-collapse: collapse;
  border: 1px solid #eee;
  border-bottom: 2px solid #123c69;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.10),
     0px 10px 20px rgba(0,0,0,0.05),
     0px 1px 1px rgba(0,0,0,0.05),
     0px 30px 20px rgba(0,0,0,0.05);}
.table-hover tbody tr:hover td {
    background: #e8c2b2;
}
  th, td {
  font-family: Mina;
    color: #999;
    border: 1px solid #eee;
    padding: 12px 35px;
    border-collapse: collapse;
  }
  th {
    background: #123C69;
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    font-family: Mina;
  letter-spacing:2px;

    &.last {
      border-right: none;
    }
  }
 
<!-- fixed header rakhte for scrolling-->

.fixed{
  top:0;
  position:fixed;
  width:auto;
  display:none;
  border:none;
}
<!-- button -->


</style>
</head>
<body ><!--style="overflow:hidden"> -->


<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      <span class="icon-bar"></span>
          <span class="icon-bar"></span>                    
      </button>
      <a class="navbar-brand" href="#" id="heading" style="color:white;font-family:Marvel,Calibri;
  font-size:24px;">HelpRohingyas</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
      
     </ul> 
         <ul class="nav navbar-nav navbar-right">
     <li><a href="#" class="white-text" onMouseOver="this.style.backgroundColor = '#EDC7B7'";
  onMouseOut="this.style.backgroundColor = '#951829'"; id="profile">My profile <i class="fa fa-user"></i></a></li>
  
      <li><a href="#" class="white-text" onMouseOver="this.style.backgroundColor = '#EDC7B7'";
  onMouseOut="this.style.backgroundColor = '#951829'"; id="logout">Logout <i class="fa fa-sign-out"></i></a></li>
    </ul>
      </div>
      
    </div>
  </div>
</nav>    

<!-- -->
<div class="sidenav">
  <a href="#add">Add</a>
  <a href="#view">View</a>
  
</div>
<div id="add" class="container-fluid" style="overflow-y: scroll; height:650px;">
  <div class = "main">
    <form method="post" action="<?php echo base_url()?>/rohingya/rohingya_form">  
  <div class="row">

  <div class="col-sm-6">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>




  <div class="col-sm-6">
   <label for="pic">Enter Image</label>
    <input type="file" class="form-control-file" id="picture" name="picture">
  </div>
  </div>
  <div class="form-group">
    <label for="fname">Father's Name</label>
    <input type="text" class="form-control" id="fname" name="fname">
  </div>
  <div class="form-group">
    <label for="mname">Mother's Name</label>
    <input type="text" class="form-control" id="mname"  name="mname">
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob">
  </div>
  <div class="form-group">
  <label for="age">Age</label>
  <input type="number" class="form-control" id="age"name ="age">
  </div>
   <div class="form-group">
  <label for="birth">Place of Birth</label>
  <input type="text" class="form-control" id="birth" name="birth">
  </div>
  <div class="form-group">
  <label for="nationality">Nationality</label>
  <input type="text" class="form-control" id="nationality" name="nationality">
  </div>
  <div class="form-group">
  <label for="gender">Gender</label>
  <select class="form-control" id="gender" name=gender>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>

  </select>
</div>
 <div class="form-group">
 <label for="religion">Religion</label>
 <select class="form-control" id="religion" name="religion">
  <option>Islam</option>
  <option>Christianity</option>
  <option>Buddhism</option>
  <option>Hinduism</option>
  <option>Judaism</option>
  <option>Other</option>
  </select>
</div>
  
  <div class="form-group">
  <label for="address">Address in Myanmar</label>
  <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="form-group">
  <label for="dateofentry">Date of Entry</label>
  <input type="date" class="form-control" id="dateofentry" name="dateofentry">
  </div>
  <div class="form-group">
  <label for="dateofrecord">Date of Creation of Record</label>
  <input type="date" class="form-control" id="dateofrecord"name="dateofrecord">
  </div>
   
  <div class="form-group">
  <label for="camp">Assigned Camp</label>
  <input type="text" class="form-control" id="camp"name="camp">
  </div>
  <div class="text-center">
    <button type="submit" class="submit" id="signupbtn">Sign Up</button>
     </div>
  
</form>
</div>
</div>

<div id="view" class="container-fluid main" style="overflow-y: scroll; height:650px;  ">
<div style="padding-left:18px; padding-bottom:8px;">
<h1 class="text-center">Rohingya Database</h1>
<input type = "text" id="myInput" placeholder="Search" ><button id="searchbtn"><i class="fa fa-search"></i></button>
 
</div>

<div class="table-responsive">
<table class="table table-hover" id="table-1">
    <thead>
      <tr>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Date of Birth</th>
        <th>Age</th>
        <th>Place of Birth</th>
        <th>Nationality</th>
        <th>Gender</th>
        <th>Religion</th>
        <th>Address in Myanmar</th>
        <th>Date of Entry</th>
         <th>Date of Record</th>
        <th>Assigned Camp</th>
    <th>Edit</th>
        
      </tr>
       </thead>
    <tbody>
      <?php foreach ( $data as $row)
      {?>



         <tr>
        <td><?php echo $row->r_name; ?></td>
        <td><?php echo $row->r_father; ?></td>
        <td><?php echo $row->r_mother; ?></td>
         <td><?php echo $row->r_birthday; ?></td>
        <td><?php echo $row->r_age; ?></td>
        <td><?php echo $row->r_birthplace; ?></td>
         <td><?php echo $row->r_nationality; ?></td>
        <td><?php echo $row->r_gender; ?></td>
        <td><?php echo $row->r_religion; ?></td>
         <td><?php echo $row->r_address; ?></td>
        <td>01/12/2017</td>
        <td>01/02/2018</td>
         <td><?php echo $row->r_camp; ?></td>
       <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-edit"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <ul class= "fa-ul">
     
      <li  ><a href="<?php echo base_url()?>/rohingya/update_data/<?php echo $row->r_name; ?>"><i class="fas fa-pencil-alt" id="<?php echo $row->r_name; ?>" ></i>Update <i class="fas fa-pencil-alt"></i></a></li>
 
    <li><a href="<?php echo base_url()?>/rohingya/delete_data/<?php echo $row->r_name; ?>"><i class="fas fa-trash-alt"></i>Delete<i class="fas fa-trash-alt"></i></a></li>
  
   </ul>
  </div>
</div>

</td>
      </tr>
      <?php 


      }?>
   
     
    </tbody>
  </table>
</div>


</div>

<script>

// fixed header rakhte. jodio bujhini

(function($) {
   $.fn.fixMe = function() {
      return this.each(function() {
         var $this = $(this),
            $t_fixed;
         function init() {
            $this.wrap('<div class="container" />');
            $t_fixed = $this.clone();
            $t_fixed.find("tbody").remove().end().addClass("fixed").insertBefore($this);
            resizeFixed();
         }
         function resizeFixed() {
            $t_fixed.find("th").each(function(index) {
               $(this).css("width",$this.find("th").eq(index).outerWidth()+"px");
            });
         }
         function scrollFixed() {
            var offset = $(this).scrollTop(),
            tableOffsetTop = $this.offset().top,
            tableOffsetBottom = tableOffsetTop + $this.height() - $this.find("thead").height();
            if(offset < tableOffsetTop || offset > tableOffsetBottom)
               $t_fixed.hide();
            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && $t_fixed.is(":hidden"))
               $t_fixed.show();
         }
         $(window).resize(resizeFixed);
         $(window).scroll(scrollFixed);
         init();
      });
   };
})(jQuery);

$(document).ready(function(){
   $("table").fixMe();
   $(".up").click(function() {
      $('html, body').animate({
      scrollTop: 0
   }, 2000);
 });
});
// search korte  hoina
/*
function searchFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table-1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}*/
</script>
</body>
</html> 
