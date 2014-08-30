<?php 
    function tweet2(){
        global $id;
        global $name;
        global $dept;
        global $no;
        global $new;
        $new='';
        $no = 1;
        $id = $_GET['id'];
        $name = $_GET['name'];
        $dept = $_GET['dept'];
        
        $own=$_SESSION['id'];
         $t=$_SESSION['time'];
        echo "<div id='head'><b>Faculty : $name </b><b id='left'>Dept : $dept</b></div>";
        $sql = "SELECT * FROM `tweet` WHERE id='$id'";
        $result_sql = mysql_query($sql);
        if($result_sql){
             $num_row = mysql_num_rows($result_sql);
             }
        for($i=$num_row;$i>0;$i--){
                //fetch assotiative array from result
                 $row = mysql_fetch_assoc($result_sql);
                 //extract assotiative array from result
                 extract($row);
                 date_default_timezone_set("Asia/Calcutta");
                 $tm = date("d M Y, \a\\t g.i a",$time);
                 if($t<$time){
                     $new="<b id='new'>New</b>";
                 }
                 echo "<div id='box2'><b>$no <a id='l' href='faculty_tweet3.php?title=$title&id=$id&name=$name&dept=$dept'>$title</a> $tm $new<br></b></div>";
                 $no++;
        }    
    }
?>