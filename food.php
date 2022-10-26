
<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","restreent");

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
    <td>الاسم</td>
    <td>السعر</td>
    <td>meal</td>
<?php
    $quer= "select * from food where id_m='$id'";
    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
    </tr>
    <tr>
    <td><?php echo $row['name_f']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['id_m']; ?></td>
    <td><a href="add_basked.php?id=<?php echo $row['id_f']; ?>&&price=<?php echo $row['price']; ?>&&id_m=<?php echo $row['id_m']; ?>">ِشراء</a></td>
    </tr>
<?php
}
?>
  </table>
</div>