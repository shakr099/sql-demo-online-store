<?php

include "index.php";

?>
<?php
	$con=mysqli_connect("localhost","root","","restreent");

if(isset($_POST['add'])){
  $name=$_POST['name'];      
  $price=$_POST['price'];      
  $meal=$_POST['meal'];      
	$query = "INSERT INTO food(name_f,price,id_m) VALUES
	('$name','$price','$meal')";
	$result= mysqli_query($con,$query);
  if(	$result){
  	header("location:add_food.php");

  }
}
  ?>
  <body dir="rtl">
    
  
<div align='center' >
  <form action="" style='width:40%;border:2px solid black;' method='post'>

  Name<hr><input type=text name=name required><hr>
  <hr> Price<br><input type=text name="price" required><hr>
Meal <hr><select name="meal" required>
  
<?php
    $quer= "select * from meal";
    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
    <option value="<?php echo $row['id_m']; ?> "><?php echo $row['name_m']; ?>  </option>
<?php
}
?>
  </select>
  <br>
<button name='add' type="submit">save</button>
  </form>
  <table border=2>
    <tr>
      <td>id</td>
    <td>name</td>
    <td>price</td>
    <td>meal</td>
<?php
    $quer= "select * from food";
    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
    </tr>
    <tr>
    <td><?php echo $row['id_f']; ?></td>
    <td><?php echo $row['name_f']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['id_m']; ?></td>
    <td><a href="editfood.php?id=<?php echo $row['id_f']; ?>">edit</a></td>
    </tr>
<?php
}
?>
  </table>
</div>