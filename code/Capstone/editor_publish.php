<?php
    include 'include/user_checking.php';
    include 'include/connect.php';
    include 'include/error.php';
    include 'include/publish.php';
    //first check
    editor_check();
    
    global $no;
    //variable collect info from url to give error msg
    $no = $_GET['no'];
    
    //connect to magzine database
    global $page;
    $page ='magazine';
    connect_db($page);
    
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
        publish();
                    }
?>
<!DOCTYPE html>
<!--
This page editor will allow to editor to publish new edition  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/login.css">
        <link type="text/css" rel="stylesheet" href="css/editor_publish.css">
        <title>Lpu Magazine+</title>
    </head>
    <body>
        <!-- this wrapper div content all things and keep them center -->
        <div id="wrapper">
            <!-- this will content header logo and bar which contain link to login -->
            <div id="header">
                <!--logo -->
                <div id="logo"><a href="index.php"><img alt="logo" id="mag_logo" src="image/logo.gif"/></a></div>
                <!-- bar that contain link -->
                <div id="bar">
                    <a class="bar_links" href="index.php"><b>Home</b></a>
                    <a class="bar_links" href="login.php?no=0"><b>Editing</b></a>
                    <a class="bar_links" href="change_password.php?no=0"><b>change password</b></a>
                    <a class="bar_links" href="include/logout.php"><b>Logout</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <!-- login image -->
                <img alt="login" id="pub_img" src="image/pub.JPG"/>
                <!-- whole login content in the center -->
                <div id="login_wrapper">
                    <!-- green header part -->
                    <div id="upper_login"><h1>Publish New Edition</h1></div>
                    <!-- blue body part -->
                    <div id="lower_login">
                        <!-- actual form code -->
                        <div id="error"><?php error($no)?></div>
                        <form id="form" action="editor_publish.php?no=0" method="post" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td><input class="form_element" type="text" name="title" placeholder="  Enter title of this edition"/></td>
                                </tr>                          
                                <tr>
                                    <td><input id="file" type="file" name="cover_pic" accept="image/*"/></td>
                                </tr>
                            </table>
                            <input class="form_element" id="form_button" type="submit" value="Publish"/>
                        </form>
                    </div>
                    <!-- footer green -->
                    <div id="footer_login"></div>
                </div>
            </div>
        </div>
    </body>
</html>
