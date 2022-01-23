<?php
require_once("../connection.php");
$name=$_POST['name'];
$role=$_POST['role'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$photo=$_POST['photo'];
$department=$_POST['department'];
$collection = $con->User;
$insertOneResult = $collection->insertOne([
   'email_id' => $email,
   'phn_no' => $phone,
   'name' => $name,
   'photo' => $photo,
   'department' => $department
]);
printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
$user_id=$insertOneResult->getInsertedId();
$username=strstr($email,'@',true);
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
$password=password_generate(7);
  //echo $password;
$collection = $con->Login;
$insertOneResult = $collection->insertOne([
   'username' => $username,
   'password' => $password,
   'designation' => $role,
   'user_id' => $user_id,
   'status' => '1',
]);
if($insertOneResult->getInsertedId()){
  ?>
  <!DOCTYPE html>
  <head>
 <script type="text/javascript">
  alert("Inserted Successfully");
  location.replace("addusers.php");
</script>
<?php } ?>
</head>
</html>

//printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
//$user_id=$insertOneResult->getInsertedId();