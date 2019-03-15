 <?php 
$con = mysqli_connect("127.0.0.1:3306","root","","Store");
$Email = $_POST['email'];
$Password = $_POST['password'];
$First_Name = $_POST['first_name'];
$Last_Name = $_POST['last_name'];
$space = " ";
$Name = $First_Name.$space.$Last_Name ;
$Address = $_POST['address'];
$Mobile = $_POST['mobile_num'];

$insert = "INSERT INTO user (Email,Password,Name,Address,Mobile) VALUES ('$Email','$Password','$Name','$Address','$Mobile')";
$result = mysqli_query($con,$insert);
mysqli_close($con);
if($result)
{
	header('location: http://localhost/New/#Login');
}
else
{
	echo ("<script> 
		   window.alert('You have already registered!');
		   window.location.href='http://localhost/New/#Login';</script>");
}
?> 