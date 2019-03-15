 <?php
 session_start();
 $Email = $_POST['email'];
 $Password = $_POST['password'];
 $con=mysqli_connect("127.0.0.1:3306","root","","Store");
 $q = "SELECT * FROM user Where Email = '$Email' && Password = '$Password'";
 $result = mysqli_query($con,$q);
 $rows = mysqli_num_rows($result);
 mysqli_close($con);
 if($rows==1)
 {
 	$_SESSION['Name']=$Name;
 	$_SESSION['Email']=$Email;
 	$_SESSION['Password']=$Password;
 	header('location: http://localhost/New/Welcome.php');
 }
else
{
	echo ("<script>
		windows.allert('The email address or phone number that you've entered doesn't match any account. Sign up for an account.');
		</script>");
}
?>