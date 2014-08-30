<?PHP 
    //function for fetching the content according to the category choosen
    function data(){
        //variable collect info from url to check category
        $cat = $_GET['cat'];
        
        //variable collect info from url to check the magazine id
        $id = $_GET['id'];
        
        if($cat==0){
            //fetching cover
            $sql = "SELECT name, cover FROM `mag_table` WHERE id='$id'";
            $result = mysql_query($sql);
            if($result){
                //fetch assotiative array from result
                $row = mysql_fetch_assoc($result);
                //extract assotiative array from result
                extract($row);
            }
             echo '<p class="title"><h1>'.$name.'</h2></p><br><img class="dynamic1"  src="upload/image/'.$cover.'"/>'; 
         
            
        }elseif($cat==1){
            echo '<h1>Index</h1>';
            $table = $id.'_academic';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_academic';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
                   
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                echo "<h2>No Data</h2><br>";
            }
        }elseif($cat==2){
            echo '<h1>Index</h1>';
            $table = $id.'_placement';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_placement';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                echo "<h2>No Data</h2><br>";
            }
        }elseif($cat==3){
            echo '<h1>Index</h1>';
            $table = $id.'_sports';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_sports';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
                   
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                echo "<h2>No Data</h2><br>";
            }
        }elseif($cat==4){
            echo '<h1>Index</h1>';
            $table = $id.'_guest_visit';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_guest_visit';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
                    
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                echo "<h2>No Data</h2><br>";
            }
        }elseif($cat==5){
            echo '<h1>Index</h1>';
            $table = $id.'_new_in_lpu';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_new_in_lpu';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
                  
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                echo "<h2>No Data</h2><br>";
            }
        }elseif($cat==6){
            echo '<h1>Index</h1>';
            $table = $id.'_competition';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_competition';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
       
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                echo "<h2>No Data</h2><br>";
            }
        }elseif($cat==7){
            echo '<h1>Index</h1>';
            $table = $id.'_activity';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_activity';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
                
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                echo "<h2>No Data</h2><br>";
            }
        }elseif($cat==8){
            echo '<h1>Index</h1>';
            $table = $id.'_lpu_in_news';
            //fetching no of event in that category
            $sql = "SELECT title FROM `$table`";
            $result_sql = mysql_query($sql);
            if($result_sql){
                $num_row = mysql_num_rows($result_sql);
            }
            if($num_row!=0){
            //fetching  content from category table
            for($i=1;$i <= $num_row;$i++){
                $table = $id.'_lpu_in_news';
                $sql = "SELECT title FROM `$table` WHERE s_no='$i'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    }
                    
                echo '<a href="mag_page.php?id='.$id.'&cat='.$cat.'&s_no='.$i.'"><h2>'.$i.'. '. $title.'</h2></a><br>'; 
                }
            }else{
                
                echo "<h2>No Data</h2><br>";
            }
        }

    }
?>