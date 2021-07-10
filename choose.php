<?php session_start(); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">

<?php include 'header.php'; ?>
<div class="container">
	<div class="row pb-3">
		<div class="col-md-12">
		    <h4>Choose Quiz Type</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		    <div class="row">
		        <div class="col-md-2">
		            <!-- <button type="button" class="btn btn-primary btn-block">Blue</button> -->
                    <a class="btn btn-primary btn-block" href='history.php?id=<?php echo $_SESSION["uid"]; ?>'>history quiz</a>
		        </div>
		        <div class="col-md-2">
		            <!-- <button type="button" class="btn btn-danger btn-block">Blue</button> -->
                    <a class="btn btn-danger btn-block" href='sports.php?id=<?php echo $_SESSION["uid"]; ?>>'>sports quiz</a>
		        </div>
		    
		    </div>
		</div>
	</div>
</div>