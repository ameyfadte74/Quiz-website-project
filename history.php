<?php
  include "config.php";
  session_start();
  
  if(isset($_SESSION["flag"])){
    header("Location: {$hostname}/results1.php");
  }
  if(!isset($_SESSION["uid"])){
    header("Location: {$hostname}/register.php/");
  }
?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="adjust.css" rel="stylesheet">

<?php include 'header.php'; ?>
<br> <br> <br>
<div class="container">
	<div class="row">
        <div class="span12">  (multiple attempts allowed, only your last attempt will be saved)
        <?php
                  include "config.php"; // database configuration
                    $sql = "SELECT question, type_, qid, answer, OP2, OP3 ,OP4 FROM qna WHERE type_ = 1";

                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
    		<table class="table table-condensed table-hover">
    			<thead>
    				<tr>
    					<th> </th>
    					<th>Option 1</th>
    					<th>Option 2</th>
    					<th>Option 3</th>
    					<th>Option 4</th>
    				</tr>
    			</thead>
    			<tbody>
                <?php
                        // dynamic printing of questions options and correct answers, 
                        while($row = mysqli_fetch_assoc($result)) { 
                            // shuffle all options of MCQ
                            $shuffle = array( $row["answer"], $row["OP2"], $row["OP3"], $row["OP4"]);
                            shuffle($shuffle);
                            
                            ?>
    				<tr>
    					<td><?php echo $row['question'];?></td>
    					<td> <form class="search-post" action='answer-save.php?qtype=<?php echo $row["type_"]; ?>&quesid=<?php echo $row['qid']; ?>'method ="POST">
                                      <div class="input-group">
                                          <input type="text" name="ansreply" class="form-control" placeholder="" value="<?php echo $shuffle[0];  ?>">
                                             <span class="input-group-btn">
                                                  <button id="buttonName" type="submit" class="btn btn-danger">save</button>
                                             </span>
                                      </div>
                                   </form></td>
    					<td> <form class="search-post" action='answer-save.php?qtype=<?php echo $row["type_"]; ?>&quesid=<?php echo $row['qid']; ?>'method ="POST">
                                      <div class="input-group">
                                          <input type="text" name="ansreply" class="form-control" placeholder="" value="<?php echo $shuffle[1];  ?>">
                                             <span class="input-group-btn">
                                                  <button id="buttonName" type="submit" class="btn btn-danger">save</button>
                                             </span>
                                      </div>
                                   </form></td>
    					<td> <form class="search-post" action='answer-save.php?qtype=<?php echo $row["type_"]; ?>&quesid=<?php echo $row['qid']; ?>'method ="POST">
                                      <div class="input-group">
                                          <input type="text" name="ansreply" class="form-control" placeholder="" value="<?php echo $shuffle[2];  ?>">
                                             <span class="input-group-btn">
                                                  <button id="buttonName" type="submit" class="btn btn-danger">save</button>
                                             </span>
                                      </div>
                                   </form></td>
    					<td><form class="search-post" action='answer-save.php?qtype=<?php echo $row["type_"]; ?>&quesid=<?php echo $row['qid']; ?>'method ="POST">
                                      <div class="input-group">
                                          <input type="text" name="ansreply" class="form-control" placeholder="" value="<?php echo $shuffle[3];  ?>">
                                             <span class="input-group-btn">
                                                  <button id="buttonName" type="submit" class="btn btn-danger">save</button>
                                             </span>
                                      </div>
                                   </form></td>
    				</tr>
                    <?php
                          
                        } ?>
    				
    				<tr>
    					<td> </td>
    					<td><a class="btn btn-success" href="results1.php"><i class=" icon-white"></i>See Results</a></td>
    					<td><a class="btn btn-success" href="sports.php"><i class=" icon-white"></i>Sports Quiz</a></td>
    				</tr>
    			</tbody>
    		</table>
            <?php
                }else {
                  echo "<h3>No Results Found.</h3>";
                } ?>
    	</div>
	</div>
</div>