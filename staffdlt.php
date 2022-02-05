

<?php
$con=mysqli_connect('localhost','root','','project');
if(isset($_GET['del'])) {
$sid = $_GET['del']; 
mysqli_query($con,"delete from staff where sid='$sid'");
header("Location:staffview.php");
}
?>