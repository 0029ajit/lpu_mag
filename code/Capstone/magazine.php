<?php 
    include 'include/user_checking.php';
    include 'include/connect.php';
    include 'include/fetch_magazine.php';
    
    //connect to magzine database

    global $page;
    $page ='magazine';
    connect_db($page);
    
    global $id;  
    global $cat;
    
    $cat = $_GET['cat'];
        
    //variable collect info from url to check the magazine id
    $id = $_GET['id'];
    
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
                    <a class="bar_links" href="index.php"><b>Home</b></a>
                    <a class="bar_links" href="login.php?no=0"><b>Teacher Tweet</b></a>
                    <a class="bar_links" href="login.php?no=0"><b>Editor</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <!-- main content will be displayed here-->
                <div id="main_content">
                    <!-- fetching main content according to the menu selection -->
                    
                    <?PHP data(); ?>
                </div>
                    <!--menu which will redirect to this page with some code that will choose the page to display on green field -->
                    <div id="menu">
                        <div id="menu_header"><h3>Select Category</h3></div>
                        <div id="menu_body">
                            <div class="menu"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=0"><b>Cover</b></a></div>
                            <div class="menu_e"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=1"><b>Academic</b></a></div>
                            <div class="menu"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=2"><b>Placement</b></a></div>
                            <div class="menu_e"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=3"><b>Sports</b></a></div>
                            <div class="menu"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=4"><b>Guest visit</b></a></div>
                            <div class="menu_e"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=5"><b>New in Lpu</b></a></div>
                            <div class="menu"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=6"><b>Competition held</b></a></div>
                            <div class="menu_e"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=7"><b>Activity</b></a></div>
                            <div class="menu"><a href="magazine.php?id=<?PHP echo"$id"?>&cat=8"><b>Lpu in News</b></a></div>
                        </div>
                        <div id="menu_footer"></div>
                    </div>
            </div>
        </div>
    </body>
</html>
