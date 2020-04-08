<?php require("db.php");
if(isset($_GET['id'])){
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM comments WHERE id='$id'");
$message = "Comment Delete Successfully..";
header("location: index.php?message=".$message."");
}
mysqli_close($con);
?>
