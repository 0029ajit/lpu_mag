<?php
    include 'include/connect.php';
    include 'include/user_checking.php';
    include 'include/error.php';
    
    //first check
    faculty_check();
    //connect to magzine database
    global $page;
    $page ='login';
    connect_db($page);
    
    
?>
<!DOCTYPE html>
<!--
This page will allow user to see the magazine content .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/magazine.css">
        <link type="text/css" rel="stylesheet" href="css/faculty_dept.css">
        <title>Lpu Magazine+</title>
    </head>
    <body>
        <!-- this wrapper div content all things and keep them center -->
        <div id="wrapper">
            <!-- this will content header logo and bar which contain link to login -->
            <div id="header">
                <!--logo -->
                <div id="logo"><a href="index.php"><img id="mag_logo" src="image/logo.gif"/></a></div>
                <!-- bar that contain link -->
                <div id="bar">
                    <b id="welcome">Welcome, Faculty</b>
                    <a class="bar_links" href="index.php"><b>Home</b></a>
                    <a class="bar_links" href="change_password.php?no=0"><b>change password</b></a>
                    <a class="bar_links" href="include/logout.php"><b>Logout</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <!-- main content will be displayed here-->
                
                <div id="main_content">
                   <?php
                
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM `follow` WHERE follower='$id'";
                    $result_sql = mysql_query($sql);
                     if($result_sql){
                        $num_row = mysql_num_rows($result_sql);
                        echo"<div id='resultn'><b>$num_row result</b></div>";
                     }
                     for($i=$num_row;$i>0;$i--){
                         //fetch assotiative array from result
                         $row = mysql_fetch_assoc($result_sql);
                         //extract assotiative array from result
                         extract($row);
                         $url = basename($_SERVER['PHP_SELF']);
                         $unfollow = "<a href='include/unfollow.php?id=$followed&f=$id&url=$url' ><div id='unfollow' > unfollow </div></a>";;
                  
                         $sql2 = "SELECT * FROM `login` WHERE id='$followed'";
                         $result_sql2 = mysql_query($sql2);
                         $row2 = mysql_fetch_assoc($result_sql2);
                         //extract assotiative array from result
                         extract($row2);
                         echo"<div id='box'><table><tr><td><img id='pic' src='upload/photo/$pic'/> </td><td><p id='detail'><b>Name:- $name<br> <br>Reg id :- $id <br> <br>Department:- $dept </b></p></td><td> $unfollow </td></tr></table> </div>";
                     }
                ?>              
                </div>
                    <!--menu which will redirect to this page with some code that will choose the page to display on green field -->
                    <div id="menu">
                        <div id="menu_header"><h3>Option</h3></div>
                        <div id="menu_body">
                            <div class="menu"><a href="faculty_tweet.php"><b>New Tweet</b></a></div>
                            <div class="menu_e"><a href="faculty_post.php?no=0"><b>Post Tweet</b></a></div>
                            <div class="menu"><a href="faculty_follow.php"><b>Followed</b></a></div>
                            <div class="menu_e"><a href="faculty_dept.php"><b>Search by Dept</b></a></div>
                            <div class="menu"><a href="faculty_name.php"><b>Search by Name</b></a></div>
                            
                        </div>
                        <div id="menu_footer"></div>
                    </div>
            </div>
        </div>
    </body>
</html>