<?php 
    function tweet3(){
        global $id;
        global $title;
        global $name;
        global $dept;
        
        $title = $_GET['title'];
        $id = $_GET['id'];
        $name = $_GET['name'];
        $dept = $_GET['dept'];
        
        echo "<div id='head'><b>Faculty : $name </b><b id='left'>Dept : $dept</b><br><br><b id='ti'>$title</b><br></div>";
        $sql = "SELECT tweet FROM `tweet` WHERE id='$id' AND title='$title'";
        $result_sql = mysql_query($sql);
        if($result_sql){
            $row = mysql_fetch_assoc($result_sql);
                 //extract assotiative array from result
                 extract($row);
            echo "<div id='con'>$tweet</div>";
             }
          
    }
?>