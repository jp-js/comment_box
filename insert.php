<?php require("db.php");
header('Content-Type: application/json');
$json = [];
try
{
if(isset($_POST['name']) && (!empty($_POST['name']))) {
	if(isset($_POST['comments']) && (!empty($_POST['comments']))) {
	mysqli_query($con, "INSERT INTO comments(name, comments)
	VALUES('".$_POST['name']."','".$_POST['comments']."')");
		$json = ['success' => TRUE, 'message' => 'Insert Data successfully'];
}
}else{
	$json = ['error' => TRUE, 'message' => 'Not Insert Data..'];
}
}
catch(Exception $ex){
$json = ['error' => TRUE, 'message' => $ex->getMessage()];
	
}
echo json_encode($json);
?>
