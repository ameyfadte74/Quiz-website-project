<?php
include "config.php";
session_start();
 $ans = $_POST['ansreply'];
 echo $ans;
 $qtype_a = $_GET["qtype"];
 $qid_a = $_GET["quesid"];
 echo $qid_a;
//  $date = date("d M, Y");
 $author = $_SESSION['uid'];
 echo $author;
 $sql5 = "INSERT INTO answers (userid_r, qid_r ,qtype_r, answer) VALUES ('{$author}','{$qid_a}','{$qtype_a}','{$ans}')";
//  $sql = "INSERT INTO answers (userid_r, qid_r, answer) VALUES ('34','23','hemloo')";

 $result3= mysqli_query($conn, $sql5) or die("Query Failed.");    
 if(mysqli_query($conn, $sql5)){
    if($qtype_a = 2){
        $sql = "SELECT answer FROM qna WHERE qid = '{$qid_a}'";
        $result = mysqli_query($conn, $sql) or die("Query select ans Failed.");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($row['answer']==$ans){
                $sq1 = "UPDATE user SET marks_s = marks_s + 1 WHERE usr_id = '{$author}' ";
                $result2 = mysqli_query($conn, $sq1) or die("Query increment marks_h Failed.");
                // add a tick column in db answers
                $sql1 = "UPDATE answers SET tick = TRUE WHERE userid_r = '{$author}' AND qid_r = '{$qid_a}'";
                $result4 = mysqli_query($conn, $sql1) or die("Query tick Failed.");
                $sql55 = "DELETE from answers where uans_id not in ( select Max(uans_id) From answers group by userid_r, qid_r, qtype_r, answer, tick)" ;
                $result55 = mysqli_query($conn, $sql55) or die("Query deltduplicate Failed.");
                //flag the tick 'true' <-here-> in the db ie, if ans matches

                $sqlUP = "DELETE from answers where uans_id not in ( select Max(uans_id) From answers group by userid_r, qid_r, qtype_r)" ;
                $resultUP = mysqli_query($conn, $sqlUP) or die("Query deltduplicate2 Failed.");
                header("location: {$hostname}/sports.php");
            }
            else{
                //flag the tick false in db
                $sql22 = "UPDATE answers SET tick = FALSE WHERE userid_r = '{$author}' AND qid_r = '{$qid_a}'";
                $result22 = mysqli_query($conn, $sql22) or die("Query tick Failed.");
                $sql33 = "DELETE from answers where uans_id not in ( select Max(uans_id) From answers group by userid_r, qid_r, qtype_r, answer, tick)" ;
                $result33 = mysqli_query($conn, $sql33) or die("Query deltduplicate Failed.");
                //flag the tick 'true' <-here-> in the db ie, if ans matches

                $sqlUP2 = "DELETE from answers where uans_id not in ( select Max(uans_id) From answers group by userid_r, qid_r, qtype_r)" ;
                $resultUP2 = mysqli_query($conn, $sqlUP2) or die("Query deltduplicate2 Failed.");
                header("location: {$hostname}/sports.php");
            }

            //calculate sports question ticks for this user
            $sqlr = "SELECT tick FROM answers where userid_r = '{$author}' AND qtype_r = '{$qtype_a}' ";
            $resultr = mysqli_query($conn, $sqlr) or die ("ticks query failed");
            $var = 0;
            while($rowr = mysqli_fetch_assoc($resultr)){
            
                if ($rowr['tick']== 1)
                { 
                    $var = $var + 1;
                    $sqlupr = "UPDATE user SET marks_s = $var WHERE usr_id = '{$author}'";
                    $resupr = mysqli_query($conn, $sqlupr);
                    // $sqldel = "DELETE from users where usr_id not in ( select Max(usr_id) From user group by username)" ;
                    // $resultdel = mysqli_query($conn, $sqldel) or die("Query deltduplicateusr Failed.");
                }
            }
        }
        

    }
        
         
 }
 else{
     echo "<div class='alert alert-danger'>Query Failed.</div>";
    }
?>