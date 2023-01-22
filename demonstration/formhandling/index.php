<!DOCTYPE html>

<html>

<head>

<title>HTML Embedded Form with echo and \</title>

<style>

.form{color:blue;}

.formhandling{color:red;}

.display-name{color:green;}

</style>

</head>

<body>

<h1>HTML Form and PHP Form Handling</h1>

<h2>Display <span class="form">Form</span> first and <span class="formhandling">Form Handling</span> next in different pages</h2>

<hr>

<h3>Input your name I'll display it</h3>

<!--Form-->

<form id="form1" method="post" action="class3a_response.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputfname">Enter your First Name</label>

<br />

<input id="inputfname" type="text" name="fname" placeholder="your first name" required="required">

<br />

<label for="inputlname">Enter your Last Name</label>

<br/>

<input id="inputlname" type="text" name="lname" placeholder="your last name" required="required">

<br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="SEND IT" />

</form> <!--Closing form tag-->

</body>

</html>