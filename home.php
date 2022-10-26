<?php
session_start();
if(isset($_SESSION['name'])){
echo $_SESSION['name'];
}else{
  header("location:login.php");
}
?>

<div  align='center'>
 
   <section  style='width:40%;border:2px solid black;'>
<h1>مرحبا بك اختار نوع الوجلبه</h1>
<?php
    	$con=mysqli_connect("localhost","root","","restreent");

    $quer= "select * from meal";

    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
    </tr>
    <tr>
      <a href="food.php?id=<?php  echo $row['id_m']; ?>"><h3><?php echo $row['name_m']; ?></h3>
</a></tr>
<?php
}
?>
</section>
</div>