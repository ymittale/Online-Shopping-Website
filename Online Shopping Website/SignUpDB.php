 <?php 
$link = mysqli_connect("127.0.0.1:3306","root","","sms");
$Email = $_POST['email'];
$Password = $_POST['password'];
$Name = $_POST['first_name'];

$insert = "INSERT INTO user (Email,Password,Name) VALUES ('$Email',password('$Password'),'$Name')";
$result = mysqli_query($link,$insert);
mysqli_close($link);
if($result)
{
	header('location: http://localhost/Online Shopping Website/#Login');
}
else
{
	echo ("<script> 
		   window.alert('You have already registered!');
		   window.location.href='http://localhost/Online Shopping Website/#Login';</script>");
}
?> 