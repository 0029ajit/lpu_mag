<?php
    include 'include/connect.php';
    include 'include/user_checking.php';
    include 'include/error.php';
    
    $time = time();
    //first check
    faculty_check();
    global $id;
    $id=$_SESSION['id'];
    //connect to magzine database
    global $page;
    $page ='login';
    connect_db($page);
    global $no;
    $no = $_GET['no'];
    
    if(isset($_POST['title'])&&isset($_POST['description'])){
    //tranfer posted data to varible
    $title = $_POST['title'];
    $tweet = $_POST['description'];
    //check that field are not empty
    if(!empty($title)&&!empty($tweet)){
        //write query to check the correct credential
        $query = "INSERT INTO tweet (id, title, tweet,time)
                        VALUES ('$id', '$title', '$tweet', '$time')";
        //try
        $result = mysql_query($query);
        if($result){
            header('location: faculty_post.php?no=23');
        }
    }else{
        header('location: faculty_post.php?no=22');
    }
    }
    
?>
<!DOCTYPE html>
<!--
This page will allow faculty to post tweet .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/magazine.css">
        <link type="text/css" rel="stylesheet" href="css/faculty_post.css">
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
                    <div id="error"><?php if($no!=0){error($no);}?></div>
                    <form id="form" action="faculty_post.php?no=0" method="post">
                    <h2 class="name">Title</h2>
                  <input  class="form_box" type="text" name="title" size="91" maxlength="150" placeholder="          Enter Title"/>
                        <!--for content -->
                        <h2 class="name">Description</h2>
                        <textarea class="form_box" name="description" rows="25" cols="70" placeholder="     Type Content"></textarea><br>
                        <input id="button" type="submit" value="Tweet"/>
                    </form>
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