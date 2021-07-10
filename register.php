<?php

// if login button pressed save the user name and redirect to choose quiz page
if(isset($_POST['save'])){
  include "config.php";

  $user = mysqli_real_escape_string($conn,$_POST['user']);

  $sql = "SELECT username FROM user WHERE username = '{$user}'";

  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists.</p>";
  }else{
    $sql1 = "INSERT INTO user (username)
              VALUES ('{$user}')";
    $sql2 = "SELECT usr_id, username FROM user WHERE username = '{$user}'";          
    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");          
    $result2 = mysqli_query($conn, $sql2) or die("Query Failed.");          
            $row = mysqli_fetch_assoc($result2);
            session_start();
            $_SESSION["uid"] = $row['usr_id'];
            $_SESSION["uname"] = $row['username'];
            header("Location: {$hostname}/choose.php");
  }
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="header.css" rel="stylesheet">


<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Register for Quiz</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action = "<?php $_SERVER['PHP_SELF']; ?>" method ="POST" accept-charset="UTF-8" autocomplete="off">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="enter a user name" name="user" type="text" required>
			    		</div>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" name ="save" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>