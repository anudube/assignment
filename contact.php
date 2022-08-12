<head>
<title>Contact</title>
</head>
<body>
<div>
<?php

if(isset($_POST['create'])){
$firstname= $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
echo " Hello " .$firstname.' '.$lastname;
echo "<br>Thank You for Contacting us!";
echo "<br>";
$email = $_REQUEST['email'];
echo "Email:".$email;
echo"<br>";
$mobilenumber = $_REQUEST['mobilenumber'];
echo "Mobile:".$mobilenumber;
echo"<br>";
$birthdate = $_REQUEST['birthdate'];
echo "BirthDate:".$birthdate;
echo"<br>";
$message = $_REQUEST['message'];
echo "Message:".$message;
}
?>
</div>
<div>
<form action = "contact.php" method = "post">
<div class ="container">
<h1>Contact Form</h1>
<lable for = "firstname"><br>First Name</b></lable>
<input type = "text" name= "firstname" required><br>
<lable for = "lastname"><br>Last Name</b></lable>
<input type = "text" name= "lastname" required><br>
<lable for = "mobilenumber"><br>Mobile No.</b></lable>
<input type = "text" name= "mobilenumber" required><br>
<lable for = "birthdate"><br>BirthDate</b></lable>
<input type = "date" name= "birthdate" required><br>
<lable for = "email"><br>Email Id</b></lable>
<input type = "email" name= "email" required><br>
<lable for = "message" ><br>Message</b></lable>
<input textarea  name = "message" required><br>
<input type = "submit" name = "create" value = "submit">
</div>
</form>
</div>
</body>
</html>
