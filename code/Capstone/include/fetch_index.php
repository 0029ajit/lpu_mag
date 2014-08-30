<?php

    //fetching message from database
    function msg(){
        $query = "SELECT message FROM `msg`";
        //run query
        $result = mysql_query($query);
        if($result){
            $row = mysql_fetch_assoc($result);
                    //extract assotiative array from result
                    extract($row);
                    echo "$message";
        }
    }
    
    function latest()
    {
    //fetching no of magazine in database
     $sql = "SELECT * FROM `mag_table`";
     $result_sql = mysql_query($sql);
     if($result_sql){
        $num_row = mysql_num_rows($result_sql);
     }
     
     //fetching Latest edition
         $latest_sql = "SELECT id, name, cover FROM `mag_table` WHERE no='$num_row'";
         $result_latest_sql = mysql_query($latest_sql);
         if($result_latest_sql){
            //fetch assotiative array from result
            $row = mysql_fetch_assoc($result_latest_sql);
            //extract assotiative array from result
            extract($row);
           }
        echo '<a href="magazine.php?id='.$id.'&cat=0"><img class="dynamic1"  src="upload/image/'.$cover.'"/></a><br><p class="title"><b>'.$name.'</b></p>'; 
         
    }
    
    function older()
    {
    //fetching no of magazine in database
     $sql = "SELECT * FROM `mag_table`";
     $result_sql = mysql_query($sql);
     if($result_sql){
        $num_row = mysql_num_rows($result_sql);
     }
     
     //fetching older edition edition
     for($i=$num_row-1;$i>0;$i--){
         $latest_sql = "SELECT id, name, cover FROM `mag_table` WHERE no='$i'";
         $result_latest_sql = mysql_query($latest_sql);
         if($result_latest_sql){
            //fetch assotiative array from result
            $row = mysql_fetch_assoc($result_latest_sql);
            //extract assotiative array from result
            extract($row);
           }
        echo '<a href="magazine.php?id='.$id.'&cat=0"><img class="dynamic"  src="upload/image/'.$cover.'"/></a><p class="title"><b>'.$name.'</b></p>'; 
     }
    }
    
 ?>
   
