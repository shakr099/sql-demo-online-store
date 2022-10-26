<?php
include"connect.php";
$id=$_GET['id'];
    $quer= "select * from food where id_f='$id'";
    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
<div align='center'>
  <form action="" method='post'  style='width:30%;border:2px solid black;'>

  Name<hr><input type=text value="<?php  echo $row['name_f'];
  ?>" name=name required><hr>
  <hr> Price<br><input type=text value="<?php  echo $row['price'];
  ?>" name="price" required><hr>
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

<button name='edit' value="<?php  echo $row['id_f']; ?>" type="submit">save</button>
  </form>
    
<?php
}
if(isset($_POST['edit'])){
  include"connect.php";
  $name=$_POST['name'];      
  $price=$_POST['price'];      
  $meal=$_POST['meal'];      

$idd=$_POST['edit'];    
$query = "update food set name_f='$name',price='$price',id_m='$meal' where id_f='$id'";
$result= mysqli_query($con,$query);
if($result){
  header("location:add_food.php");

}else{
  die(mysqli_error($con));
}
}
?>