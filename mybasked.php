<?php
session_start();

if(isset($_SESSION['name'])){
$uname= $_SESSION['name'];
}else{

  header("location:food.php");
}
include"mang/connect.php";

//$con=mysqli_connect("localhost","root","","restreent");

?>
<body dir='rtl'>
<h1 align='center'><a href='home.php'>
رجوع 
</a></h1>
<h1 align='center'><a href='mybasked.php'>
سلتي 
</a></h1>

<div  align='center'>
 
  <table border=2>
    <tr>
    <td>الوجبه</td>
    <td>السعر</td>
  <td>الكميه</td>
    <td>المجموع</td>
    <td>الوقت</td>
<?php
    $quer= "select * from basked where id_u='$uname'";
    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
    </tr>
    <tr>
    <td><?php echo $row['id_f']; ?></td>
    <td><?php echo $row['pric']; ?></td>
    <td><?php echo $row['intake']; ?></td>
    <td><?php echo $row['total']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td><a href="add_basked.php?id=<?php echo $row['b_id']; ?>">الغاء</a></td>
    </tr>
<?php
}
?>
  </table>
</div>