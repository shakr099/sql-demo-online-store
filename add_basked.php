<?php
session_start();
$id_f=$_GET['id'];
$id_m=$_GET['id_m'];
$price=$_GET['price'];

if(isset($_SESSION['name'])){
$uname= $_SESSION['name'];
}else{

  header("location:food.php");
}
include"mang/connect.php";
?>

<div  align='center'>
 
<form method='post' action="">
   الكميه المطلوبه
<br>
   <input type="number" name='intake' required><br>
<button type='submit' name='add'>اكمال عملية الشراء</button>
</form>
<?php
if(isset($_POST['add'])){

$intake=$_POST['intake'];
$tot=$price*$intake;
$query = "INSERT INTO basked(id_f,pric, intake,total,id_u) VALUES
('$id_f','$price','$intake','$tot','$uname')";
$result= mysqli_query($con,$query);
if(	$result){
  header("location:food.php?id=$id_m");

}
}
?></div>