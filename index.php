<?php  
@$message = $_GET['message'];
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Comment Box</title>
</head>
<body style="background-color: white">

<div id="container" style="box-shadow: 0px 0px 10px 5px #ddd;border-radius:20px">	
	<div class="page_content" style="color:#567373;font-size: 24px;">Comment Box...</div>
    <div id="demo"></div>
    <div class="comment_input" style="border-radius:10px;box-shadow: 0px 0px 5px 2px #ddd;">
        <form name="form"  id="form" method="POST">
        	<input type="text" name="name" placeholder="Name..." id="name"></br></br>
            <textarea name="comments" placeholder="Leave Comments Here..." id="comment" style="width:635px; height:100px;"></textarea></br></br>
            <button type="submit" name="submit" id="submit" class="button" style="outline: none;border:none;">Post</button></br>
        </form>
    </div>
    <div id="comment_logs">
	<?php require("logs.php");
    	
    	echo "<span style='color:red;'>$message</span>";
	?>	
  <div>
</div>
<script>

$(document).ready(function(){
  $('#form').submit(function() {
  	$.ajax({
  		type : 'POST',
  		url : "insert.php",
  		data : {
  			name :$('#name').val(),
  			comments : $('#comment').val()
  		},
  		dataType : 'json',
  		success : function(result){
  		//console.log(result);
  		if(result.success) {
  			$('#demo').html('<div style=color:green>'+result.message+'</div>');
  			window.location.href = '';
  		}else{
  			$('#demo').html('<div style=color:red>**'+result.message+'</div>');
  		}
  	}
  });
  return false;
});
});
</script>
</body>
</html>
