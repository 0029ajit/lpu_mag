<?PHP 
    global $follow;
    global $unfollow;
    
    function search_cat($option){
      $cat = $_SESSION['category'];  
        //fetching no  in database
     $sql = "SELECT * FROM `login` WHERE dept='$option' AND category='faculty'";
     $result_sql = mysql_query($sql);
     if($result_sql){
        $num_row = mysql_num_rows($result_sql);
     }
     
     //fetching older edition edition
     for($i=$num_row;$i>0;$i--){
            //fetch assotiative array from result
            $row = mysql_fetch_assoc($result_sql);
            //extract assotiative array from result
            extract($row);
             $follow='';
             $unfollow='';
            $f = $_SESSION['id'];
            $url = basename($_SERVER['PHP_SELF']);
      
            //checking that this person already followed this faculty  or not
            $query = "SELECT * FROM `follow` WHERE follower='$f' AND followed='$id'";
            $result = mysql_query($query);
            if($result){
               $num_row = mysql_num_rows($result);
               if($num_row==0){
                   $follow = "<a href='include/follow.php?id=$id&f=$f&url=$url' ><div id='follow' > follow </div></a>";
               }else{
                   $unfollow = "<a href='include/unfollow.php?id=$id&f=$f&url=$url' ><div id='unfollow' > unfollow </div></a>";
               }
            }
            //no of follower
            $query2 = "SELECT * FROM `follow` WHERE followed='$id'";
            $result2 = mysql_query($query2);
            $num_row2 = mysql_num_rows($result2);
            //output every credential
            echo"<div id='box'><table><tr><td><img id='pic' src='upload/photo/$pic'/> </td><td><p id='detail'><b>Name : $name<br> <br>Reg id : $id <br> <br>Department : $dept <br><br>Follower : <a id='fol'>$num_row2</a></b></p></td><td>$follow $unfollow </td></tr></table> </div>";
            
        }
    }
    
    
    
    //search by name
    function search_name($name){
        $cat = $_SESSION['category'];
        //fetching no  in database
     $sql = "SELECT * FROM `login` WHERE name LIKE '%$name%' AND category='faculty'";
     $result_sql = mysql_query($sql);
     if($result_sql){
        $num_row = mysql_num_rows($result_sql);
        echo"<div id='resultn'><b>$num_row result</b></div>";
     }else{
         echo 'query not run';
     }
     
     //fetching older edition edition
     for($i=$num_row;$i>0;$i--){
            //fetch assotiative array from result
            $row = mysql_fetch_assoc($result_sql);
            //extract assotiative array from result
            extract($row);
             $follow='';
             $unfollow='';
            $f = $_SESSION['id'];
            $url = basename($_SERVER['PHP_SELF']);
      
            //checking that this person already followed this faculty  or not
            $query = "SELECT * FROM `follow` WHERE follower='$f' AND followed='$id'";
            $result = mysql_query($query);
            if($result){
               $num_row = mysql_num_rows($result);
               if($num_row==0){
                   $follow = "<a href='include/follow.php?id=$id&f=$f&url=$url' ><div id='follow' > follow </div></a>";
               }else{
                   $unfollow = "<a href='include/unfollow.php?id=$id&f=$f&url=$url' ><div id='unfollow' > unfollow </div></a>";
               }
            }
            //no of follower
            $query2 = "SELECT * FROM `follow` WHERE followed='$id'";
            $result2 = mysql_query($query2);
            $num_row2 = mysql_num_rows($result2);
            //output every credential
            echo"<div id='box'><table><tr><td><img id='pic' src='upload/photo/$pic'/> </td><td><p id='detail'><b>Name:- $name<br> <br>Reg id :- $id <br> <br>Department:- $dept <br><br>Follower : <a id='fol'>$num_row2</a> </b></p></td><td>$follow $unfollow </td></tr></table> </div>";
            
        }
    }
    
?>