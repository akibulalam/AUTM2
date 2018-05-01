<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Enter Your Information</h1>
    <hr>

    <label for="pno"><b>Personal No</b></label>
    <input type="text" placeholder="Personal No" name="PNO" required>

    <label for="coy"><b>COY</b></label> <br> <br>

    <select style="width:200px; padding: 10px;">
        
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
        <option>E</option>

    </select> <br><br>

     <label for="trade"><b>TRADE</b></label> <br> <br>

    <select style="width:200px; padding: 10px;">
        
        <option>Gunner</option>
        <option>DMt</option>
        <option>DMT</option>
        <option>OCU</option>
        <option>TA</option>
        <option>Clerk</option>
        <option>Carpenter</option>
        <option>Cook</option>

    </select> <br><br>

    <label for="rank"><b>Rank</b></label> <br> <br>

    <select style="width:200px; padding: 10px;">
        
         <option>SOLDIER</option>
         <option>L CPL</option>
         <option>CPL</option>
         <option>SGT</option>
         <option>BSM/RSM</option>
         <option>BQSM/RQMS</option>
         <option>CSM/BSM</option>
         <option>CQMS/BQMS</option>
         <option>Honorary Captain</option>
         <option>Honorary Lieutenant</option>
         <option>Master Warrant Officer</option>
         <option>Senior Warrant Officer</option>
         <option>Warrant Officer</option>
         <option>Lieutenant</option>
         <option>Captain</option>
         <option>Major</option>
         <option>Lieutenant Colonel</option>
         <option>Colonel</option>
       

    </select> <br><br>
     <hr>
   
  <button type="submit" class="registerbtn">Submit</button>
  </div>

  <button type="view" class="registerbtn">View</button>
  </div>
  
  
</form>

</body>
</html>
    