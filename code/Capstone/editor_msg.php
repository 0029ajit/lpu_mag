<?php
    include 'include/user_checking.php';
    include 'include/connect.php';
    //first check
    editor_check();
    //connect to magzine database
    global $page;
    $page ='magazine';
    connect_db($page);
    function old_msg(){
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
    
    //code after new message button is clicked
    if(isset($_POST['new_msg'])){
    //tranfer posted data to varible
    $new_msg = $_POST['new_msg'];
    $query = "UPDATE msg SET message = '$new_msg'";
        
                    $result = mysql_query($query);
                    if($result){
                        //if update successfull give msg to go home
                    header("Location: editor_msg.php?");
                    }
    }
?>
<!DOCTYPE html>
<!--
This page will allow only editor to write message to user  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/login.css">
        <link type="text/css" rel="stylesheet" href="css/editor_msg.css">
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
                <!-- old message -->
                <div id="login_wrapper1">
                    <!-- green header part -->
                    <div id="upper_login"><h1>Old Message</h1></div>
                    <!-- blue body part -->
                    <div id="lower_old_msg">
                        <!-- actual form code -->
                        <p id="old"><b><?php   old_msg() ?></b></p>                     
                    </div>
                    <!-- footer green -->
                    <div id="footer_msg"></div>
                </div>
                <!-- new message -->
                
                <div id="login_wrapper">
                    <form id="form" action="editor_msg.php" method="post">
                    <!-- green header part -->
                    <div id="upper_login"><h1>New Message</h1></div>
                    <!-- blue body part -->
                    <div id="new_msg">
                        <!-- actual form code -->
                        
                        <textarea id="form_elm" rows="12" cols="47" name="new_msg" placeholder="               Enter new Message"></textarea>
                        
                    </div>
                    <!-- footer green -->
                    <div id="footer_msg">
                        <input class="form_element" id="form_button" type="submit" value="Change Message"/>                    
                    </div></form>
                </div>
             </div>
        </div>
    </body>
</html>
