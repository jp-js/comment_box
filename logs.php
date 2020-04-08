<?php require("db.php");
$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");
while($row = mysqli_fetch_assoc($result)){
echo "<div class='comments_content'>";
	echo "<h4><a href='delete.php?id=" . $row['id'] . "' class='fa fa-trash-o'style='font-size:18px;color:white; background-color:red;padding:5px'></a></h4>";
	echo "<h1 style='font-size:20px;'>" . $row['name'] . "</h1>";
	echo "<h2 style='color:black; margin-top:10px;'>" . $row['date_publish'] . "</h2></br></br>";
	echo "<h3  style='color:black;font-size:14px;'>" . $row['comments'] . "</h3>";
echo "</div>";
}
?>
