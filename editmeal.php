<?php
include"connect.php";
$id=$_GET['id'];
    $quer= "select * from meal where id_m='$id'";
    $sel= mysqli_query($con,$quer);
while($row=mysqli_fetch_array($sel)){
?>
<div align='center'>
  <form action="" method='post'  style='width:30%;border:2px solid black;'>

  meal<hr><input type=text name=name value="<?php  echo $row['name_m']; ?>" required>
  <hr>
<button name='edit' value="<?php  echo $row['id_m']; ?>" type="submit">save</button>
  </form>
    
<?php
}
if(isset($_POST['edit'])){
  include"connect.php";

  $name=$_POST['name'];  
$idd=$_POST['edit'];    
$query = "update meal set name_m='$name' where id_m='$idd'";
$result= mysqli_query($con,$query);
if($result){
  header("location:add_m.php");

}else{
  die(mysqli_error($con));
}
}
?>