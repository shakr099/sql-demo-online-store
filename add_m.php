<?php

include "index.php";

?>
<?php
	$con=mysqli_connect("localhost","root","","restreent");

if(isset($_POST['add'])){
$name=$_POST['name'];      
	$query = "INSERT INTO meal(name_m) VALUES 
	('$name')";
	$result= mysqli_query($con,$query);
  if(	$result){
  	header("location:add_m.php");

  }
}
  ?>
  <body dir='rtl'>
    
  <div align='center'>
  <form action="" method='post'  style='width:30%;border:2px solid black;'>

  meal<hr><input type=text name=name required>
  <hr>
<button name='add' type="submit">save</button>
  </form>


  <table border=2>
    <tr>
      <td>name</td>
<?php
    
    $quer= "select * from meal";

    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
    </tr>
    <tr>
    <td><?php echo $row['name_m']; ?></td>
    <td><a href="editmeal.php?id=<?php echo $row['id_m']; ?>">تعديل</a></td>
    </tr>
<?php
}
?>
  </table>
</div>