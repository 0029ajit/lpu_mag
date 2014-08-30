<?php
    include 'include/connect.php';
    include 'include/user_checking.php';
    include 'include/s_tweet2.php';
             
    //first check
    student_check();

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
        <link type="text/css" rel="stylesheet" href="css/tweet.css">
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
                    <b id="welcome">Welcome, Student</b>
                    <a class="bar_links" href="index.php"><b>Home</b></a>
                    <a class="bar_links" href="change_password.php?no=0"><b>change password</b></a>
                    <a class="bar_links" href="include/logout.php"><b>Logout</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <!-- main content will be displayed here-->
                <div id="main_content">
                  <?php tweet2(); ?>               
                </div>
                    <!--menu which will redirect to this page with some code that will choose the page to display on green field -->
                    <div id="menu">
                        <div id="menu_header"><h3>Option</h3></div>
                        <div id="menu_body">
                            <div class="menu"><a href="student_tweet.php"><b>New Tweet</b></a></div>
                            <div class="menu_e"><a href="student_follow.php"><b>Followed</b></a></div>
                            <div class="menu"><a href="student_dept.php"><b>Search by Dept</b></a></div>
                            <div class="menu_e"><a href="student_name.php"><b>Search by Name</b></a></div>
                            
                        </div>
                        <div id="menu_footer"></div>
                    </div>
            </div>
        </div>
    </body>
</html>