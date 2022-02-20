<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
if (isset($_POST['save'])){
$batch=$_POST['batch'];

}
$result=mysqli_query($con,"select * from advisor ");

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
<li><a href="advisorhome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">

<center><h2>ADD GUIDE</h2>
<form name="form3" method="post" action="" class="f2" >
<div class="input-group">
  <table  width=100%>
<tr><td>
Batch:
<input type="text" name="batch"  value="<?php echo  $_SESSION['batch'] ; ?>" readonly></td></div>

<div class="input-group">
  <table  width=100%>
<tr><td>
SelectGuides
  <center>
  <?php 
     $checkquery="select * from staff";
     $queryrun=mysqli_query($con,$checkquery);
     if(mysqli_num_rows($queryrun)>0)
     {
      foreach($queryrun as $name)
      {
        ?>
        <input type="checkbox" name="name[]" value="<?= $name['name'];?>" /><?= $name['name']; ?><br>
        <?php
      }
     }
   ?></center>
</td><td>
</div>




       
       <div class="input-group"><tr><td>
<button type="reset" name="reset" class="btn" >RESET</button>
</td><td>
<button type="submit" name="save" class="btn" >ADD</button>
</td></tr></font>
</div>
</form> 




<?php
 

/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('PHPMailer\Exception.php');
require('PHPMailer\SMTP.php'); 
require('PHPMailer\PHPMailer.php'); */

if (isset($_POST['save'])) {

    $batch=$_POST['batch'];
    $name=$_POST['name'];

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

    for ($i=0; $i < sizeof($name); $i++) { 

$s="select sid from staff where name='" . $name[$i] ."'";
$si=mysqli_query($con,$s);
while ($row=mysqli_fetch_array($si)) {
  $sid[$i]=$row['sid'];
  
}

$emai="select email from staff where name='" . $name[$i] ."'";
$em=mysqli_query($con,$emai);
while ($row=mysqli_fetch_array($em)) {
  $email[$i]=$row['email'];
  
}
  
$uid1[$i]=strstr($email[$i],'@',true);
$uid[$i]=$uid1[$i] . $batch ;

$password[$i]=password_generate(7);



$insert2="insert into login values ('" . $uid[$i] ."','" . $password[$i] ."','guide','$batch')";
$ins2=mysqli_query($con,$insert2);

if($ins2)  
   {  
      echo'<script>alert("Successfully added")</script>';    
   }  
else  
   {  
      echo'<script>alert("Failed!!")</script>';  
   }

     $chekinsrt="insert into guide(batch,name,sid,uid) values('$batch','" . $name[$i] ."','" . $sid[$i] ."','" . $uid[$i] ."')";
      $chekinsrt_run=mysqli_query($con,$chekinsrt);
    }
    if($chekinsrt_run)  
   {  
      echo'<script>alert("Successfully added")</script>';    
   }  
else  
   {  
      echo'<script>alert("Failed!!")</script>';  
   }
    
  //$uid=strstr($email,'@',true);
//function password_generate($chars) 
//{
  //$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  //return substr(str_shuffle($data), 0, $chars);
//}
//$password=password_generate(7);

//$insert2="insert into login values ('$uid','$password','guide','$batch')";
//$ins2=mysqli_query($con,$insert2);

/* if($ins)  
   {  
      echo'<script>alert("Successfully added")</script>';    
   }  
else  
   {  
      echo'<script>alert("failed!!")</script>';  
   }
*/

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
    $mail->Body    = "Hi $name,<br>Guide  - $batch.Your login details for $batch batch project as a guide is given below<br><br><br>USERNAME : $uid <br> PASSWORD : $password ";
   
    $mail->send();
    echo "<script>alert('Message has been sent')</script>";
 } catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
 } */ # code...
}
?>



</body>

</html>

