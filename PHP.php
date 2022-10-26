	<?php

	$con=mysqli_connect("localhost","root","","restreent");
	
	
	?><?php

$name=$_POST['name'];      
$phone=$_POST['phone'];      
$address=$_POST['address'];      
$email=$_POST['email'];      
$pass=$_POST['pass'];
$c=$_POST['c'];      
	$query = "INSERT INTO users(name,phone, address, email,password, cit) VALUES
	('$name'
	,'$phone'
	,'$address'
	,'$email'
	,'$pass'
	,'$c'	

	)";
	$result= mysqli_query($con,$query);
if(	$result){
	header("location:login.php");
}else{
	die(mysqli_error($con));
}
	?>