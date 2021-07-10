<?php 
  include "config.php";
  session_start();
  if(!isset($_SESSION["uid"])){
    header("Location: {$hostname}/register.php/");
  } 
  if(isset($_SESSION["uid"])){
    $_SESSION["flag"] = 1 ;} ?>  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</script><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="result.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.2.4.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="result.js"></script>
<body>

<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">History Quiz Result</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                  <a class="navbar-brand" href="logout.php"> <button class="btn btn-sm btn-primary btn-create" href="logout.php" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>LOG-OUT as:  <?php echo $_SESSION["uname"]; ?> </button></a>
                    
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
              <?php
                  include "config.php"; // database configuration
                    // session_start();
                    $author = $_SESSION['uid'];
                    $sqlS =  "SELECT marks_h,marks_s FROM user WHERE usr_id= '{$author}'";
                    $sql = "SELECT question, type_, qid FROM qna WHERE type_ = 1";
                    $resultS = mysqli_query($conn, $sqlS) or die("Query h Failed.");
                    $rowS = mysqli_fetch_assoc($resultS) ;
                  $result = mysqli_query($conn, $sql) or die("Query h Failed."); ?>
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Your Answer</th>
                        <th>Points</th>
                    </tr> 
                  </thead>
                  <tbody id="myTable">
                  <?php
                         $row = mysqli_fetch_assoc($result);
                         $sq2 = "SELECT answer, tick FROM answers WHERE userid_r='{$author}' AND qtype_r = 1 ";
                         $result2 = mysqli_query($conn, $sq2) or die("Query ansrs Failed.");
                         while($row2 = mysqli_fetch_assoc($result2)){
                            ?>
                
                          <tr>
                            <td><?php echo $row2['answer'];?></td>
                            <td><?php echo $row2['tick'];?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  
                  <div class="col col-xs-4">Your History Score Is <?php echo $rowS['marks_h']. '/ 5'?>
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right" id="myPager">
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
<br><br>
<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Sports Quiz Result</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                  <a class="navbar-brand" href="logout.php"> <button class="btn btn-sm btn-primary btn-create" href="logout.php" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>LOG-OUT as:  <?php echo $_SESSION["uname"]; ?> </button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
              <?php
                  include "config.php"; // database configuration
                    // session_start();
                    $author = $_SESSION['uid'];
                    $sqlS =  "SELECT marks_h,marks_s FROM user WHERE usr_id= '{$author}'";
                    $sql = "SELECT question, type_, qid FROM qna WHERE type_ = 2";
                    $resultS = mysqli_query($conn, $sqlS) or die("Query h Failed.");
                    $rowS = mysqli_fetch_assoc($resultS) ;
                  $result = mysqli_query($conn, $sql) or die("Query h Failed."); ?>
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Your Answer</th>
                        <th>Points</th>
                    </tr> 
                  </thead>
                  <tbody id="myTable">
                  <?php
                         $row = mysqli_fetch_assoc($result);
                         $sq2 = "SELECT answer, tick FROM answers WHERE userid_r='{$author}' AND qtype_r = 2 ";
                         $result2 = mysqli_query($conn, $sq2) or die("Query ansrs Failed.");
                         while($row2 = mysqli_fetch_assoc($result2)){
                            ?>
                
                          <tr>
                            <td><?php echo $row2['answer'];?></td>
                            <td><?php echo $row2['tick'];?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  
                  <div class="col col-xs-4">Your Sports Quiz Score Is <?php echo $rowS['marks_s']. '/ 5'?>
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right" id="myPager">
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
</body>