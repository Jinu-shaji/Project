<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
$select="select *from staff";
$selresult=mysqli_query($con,$select);
$options="";
while($row=mysqli_fetch_array($selresult))
{
$options=$options."<option>$row[1]</option>";
}
?>

<?php
$select2="select *from batch where batch !='2020-2200'";
$selresult2=mysqli_query($con,$select2);
$options2="";
while($row2=mysqli_fetch_array($selresult2))
{
$options2=$options2."<option>$row2[0]</option>";
}
?>
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

        
        
    </head>
    <body>
<header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">HOME</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="main.html">LOGOUT!</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">

<center><h2>ADD ADVISOR</h2>
<form name="form2" method="post" action="" class="f2" >
  <fieldset >
<legend><h4>BATCH</h4></legend>

<label>Batch:</label></td><td>
<select name="batch"  required>
  <option ></option>
  <?php echo $options2; ?></select></div></table>
</fieldset>
<fieldset>
<legend><h4></h4></legend>
<div class="input-group">
  <table  width=100%>
<tr><td>
<label>Advisor Name:</label></td><td></div>
  <div class="custom-select" style="width:200px;">
<select name="name"  required>
  <option ></option>
  <?php echo $options; ?></select></div>


       
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
    
$s="select sid from staff where name='$name'";
$si=mysqli_query($con,$s);
while ($row=mysqli_fetch_array($si)) {
  $sid=$row['sid'];
  
}



$emai="select email from staff where name='$name'";
$em=mysqli_query($con,$emai);
while ($row=mysqli_fetch_array($em)) {
  $email=$row['email'];
  
}
  
$uid=strstr($email,'@',true);
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
$password=password_generate(7);

$insert2="insert into login values ('$uid','$password','advisor','$batch')";
$ins2=mysqli_query($con,$insert2);


$insert="insert into advisor (batch,name,sid,uid)values ('$batch','$name','$sid','$uid')";
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

