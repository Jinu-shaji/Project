<!DOCTYPE html>
    <head>
        <!--meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script-->
        <title>Users</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
        <link rel="stylesheet" type="text/css" href="form.css">

        
        <script type="text/javascript">
          function add(value){

            var x;
            x=value-2+4;
           
          document.getElementById('end').value=x;
    
          
        }

        </script>
    </head>
    <body>
<header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">

<center><h2>ADD ADVISOR</h2>
<form name="form2" method="post" action="" class="f2" >
  <fieldset >
<legend><h4>BATCH</h4></legend>
<div class="input-group"><table  width=90%>
        <tr><td>
<label>Star year:</label></td><td>
<input type="text" name="" onkeyup="add(this.value);" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>End year:</label></td><td>
<input type="text" name="" id="end" required></div>
<div class="input-group"><tr><td>
<label>Batch:</label></td><td>
<input type="text" name="batch" id="batch" required></div></table>
</fieldset>
<fieldset>
<legend><h4></h4></legend>
<div class="input-group">
  <table  width=100%>
<tr><td>
<label>Advisor Name:</label></td><td>
<input type="text" name="name"  required></div>

<div class="input-group"><tr><td>
<label>Email:</label></td><td>
<input type="email" name="email" required></div>
<div class="input-group"><tr><td>
<label>PhoneNo:</label></td><td>
<input name="phone"   required></div></fieldset>


       
       <div class="input-group"><tr><td>
<button type="reset" name="reset" class="btn" >RESET</button>
</td><td>
<button type="submit" name="save" class="btn" >ADD</button>
</td></tr></font>
</div>
</form> 

<?php

$con=mysqli_connect('localhost','root','','project');
 

/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('PHPMailer\Exception.php');
require('PHPMailer\SMTP.php'); 
require('PHPMailer\PHPMailer.php'); */

if (isset($_POST['save'])) {

    $batch=$_POST['batch'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
  $uid=strstr($email,'@',true);
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
$password=password_generate(7);


$in="insert into batch (batch)values ('$batch')";
$in1=mysqli_query($con,$in);
$insert2="insert into login values ('$uid','$password','advisor','$batch')";
$ins2=mysqli_query($con,$insert2);
$insert="insert into addadv (batch,uid,name,email,phone)values ('$batch','$uid','$name','$email','$phone')";
$ins=mysqli_query($con,$insert);
if($ins)  
   {  
      echo'<script>alert("Successfully added")</script>';    
   }  
else  
   {  
      echo'<script>alert("failed!!")</script>';  
   }


  //echo $password;
 /* $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ritmcaproject@gmail.com';                     //SMTP username
    $mail->Password   = 'ritmca2022';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom('ritmcaproject@gmail.com', 'Jinu');
    $mail->addAddress($_POST['email']);     //Add a recipient
    
    //Attachments
        //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'LOGIN DETAILS';
    $mail->Body    = "Hi $name,<br>class advisor of $batch.Your login details for $batch batch project as class advisor is given below<br><br><br>USERNAME : $uid <br> PASSWORD : $password ";
   
    $mail->send();
    echo "<script>alert('Message has been sent')</script>";
 } catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
 } */ # code...
}
?>




</body>

</html>

