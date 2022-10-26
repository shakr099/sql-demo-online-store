<?php
	session_start();
if(isset($_POST['log'])){
  //$con=new mysqli("localhost","root","root","pic");
	$con=mysqli_connect("localhost","root","","restreent");
    $name=$_POST['name'];
  $pass=$_POST['pass'];
    $sel="select * from users where email='$name' and password='$pass'";
  $s=mysqli_query($con,$sel); 
  $row_cou=mysqli_num_rows($s); 
  if($s){  
  if($row_cou==1) {
  $r=mysqli_fetch_array($s);
      $_SESSION['name']=$r['id_u'];
  header('Location:index.php');
   }
  else{
  header('Location:login.php?messg=خطا في اسم المستخدم او كلمة المرور');
  }
  }else{
    die(mysali_error());
  }
}
  ?><br>
  
  



?>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">


<script src="js/مكتبة22.js"></script>
<script  src="js/bootstrap.min.js"></script>

<head>
<meta charset="utf-8">

<style>
form{
	

	border:2px solid #323f45;
padding:6%;
}
body{
	
	background-color:#f5f2f0;
}



</style>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jjjjj.js"></script>

<link rel="stylesheet" href="css/styleshow.css">
<script src="js/jjjjj.js"></script>

<script  src="js/bootstrap.min.js"></script>
<script src="js/jjjjj.js"></script>
</head>

<body >
 <div class="container">
 
<div class="row">

<div class="col-md-3">
</div >
<div align="center"  class="col-md-6">

<form action="" method="post" class="mt-5 mb-5 login-input">
 <div class="input-group">

<h1>تسجيل الدخول</h1>

<!--<h1><big><big><big><div style="width:50%;ذ" class="glyphicon glyphicon-lock  glyphicon-lrg"></div></big></big></big></h1>
-->
<div class="card-input-container username">
</hr>

<div style="color: red"> <?php if(isset($_GET['messg'])) echo $_GET['messg']; ?></div>
<div style="color: green"> <?php if(isset($_GET['mesg'])) echo $_GET['mesg']; ?></div>

<input type='email'  class="form-control" name='name' placeholder="user name" required></i>
</hr>
 <div class="card-input-container password">

  <input type='password'  placeholder="Password" class="form-control" name='pass' required>
</div>
</hr>
<br/>
<button name='log' type='submit' class="btn btn-success">دخول</button>

</div>
<br>
<a href='Html.html'>حساب جديد</a>
</form>
</div></div>
</div>
</body>
</html>
