<?php 
    
    function tweet(){
        global $user;
        $user=$_SESSION['id'];
        
        $sql = "SELECT * FROM `follow` WHERE follower='$user'";
        $result_sql = mysql_query($sql);
        if($result_sql){
             $num_row = mysql_num_rows($result_sql);
             }
        for($i=$num_row;$i>0;$i--){
                //fetch assotiative array from result
                 $row = mysql_fetch_assoc($result_sql);
                 //extract assotiative array from result
                 extract($row);
                 //extracting detail and desplayed in top
                 $sql2 = "SELECT * FROM `login` WHERE id='$followed'";
                 $result_sql2 = mysql_query($sql2);
                 if($result_sql2){
                     //fetch assotiative array from result
                 $row2 = mysql_fetch_assoc($result_sql2);
                 //extract assotiative array from result
                 extract($row2);
              
                     echo"<div id='box'><b><img id='thumbnail' src='upload/photo/$pic'> Name : $name <a id='right'><br><br>Dept : $dept </a><br><a id='link' href='student_tweet2.php?id=$id&name=$name&dept=$dept'>Go To Profile</a></b></div>";
                    }
                
                 
                 
        }
    }
?>