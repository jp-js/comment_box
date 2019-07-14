<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
                         <style type="text/css">
                         	.error{
                         		color: red;
                         	}
                         </style>
<body>
	                    <?php  
	                                $user = $Email = $Date = $number = $select="";
	                                $userErr = $EmailErr  = $DateErr  = $numberErr = $selectErr ="";
                                if($_SERVER["REQUEST_METHOD"]=="POST"){ 

                                if(empty($_POST["user"]))
                                 {
                                 $userErr = "*Name is empty";
                                 }
                               else
                                {
                                 $user = $_POST["user"];
                                if (!preg_match("/^[a-z A-Z]*$/", $user)) 
                                    {
                                 $userErr = "Only letter and whitespace";
                                    }
                                  }

                                if(empty($_POST['Email'])){
                                	$EmailErr = "Email must be filled...";
                                }else{
                                	$Email= $_POST['Email'];
                                
                                if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                                	$EmailErr = "invalid Email...";
                                }
                                }    
                            }
	                    ?>
        <form method="post">
        	<label>Username:-</label>
        	<input type="text" name="user"><span class="error">*<?php echo $userErr; ?></span><br>
        	<label>Email:-</label>
        	<input type="text" name="Email"><span class="error">*<?php echo $EmailErr; ?></span><br>
        	<input type="submit" name="submit">
        </form>
</body>
</html>