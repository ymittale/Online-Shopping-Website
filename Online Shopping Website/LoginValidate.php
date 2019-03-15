 <?php
 session_start();
 $Email = $_POST['email'];
 $Password = $_POST['password'];
 $link=mysqli_connect("127.0.0.1:3306","root","","sms");
 $q = "SELECT * FROM user Where Email = '$Email' && Password = password('$Password')";
 $result = mysqli_query($link,$q);
 $rows = mysqli_num_rows($result);
 mysqli_close($link);
 if($rows==1)
 {
 	$_SESSION['Email']=$Email;
 	$_SESSION['Password']=$Password;
 	header('location: http://localhost/Online Shopping Website/Product.php');
 }
else
{
	
	 //header('location: http://localhost/Online Shopping Website/index.html');
	 echo ("<script> 
		   window.alert('The email address or phone number that you\'ve entered doesnt match any account.');
		   </script>");
	 //header('location: http://localhost/Online Shopping Website/index.html');
}
?>