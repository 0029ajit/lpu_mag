<?php
    include 'include/connect.php';
    include 'include/user_checking.php';
    include 'include/error.php';
    include 'include/data_submission.php';
    
    //first check
    editor_check();
    global $no;
    //variable collect info from url to give error msg
    $no = $_GET['no'];
    
    //connect to magzine database
    global $page;
    $page ='magazine';
    connect_db($page);
    
   //after submit button is clicked
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
        upload();
                    }
?>
<!DOCTYPE html>
<!--
This page will allow editor to publish and edit the new content of next edition 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/login.css">
        <link type="text/css" rel="stylesheet" href="css/editor.css">
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
                    <b id="welcome">Welcome, Editor</b>
                    <a class="bar_links" href="index.php"><b>Home</b></a>
                    <a class="bar_links" href="editor_msg.php"><b>Message</b></a>
                    <a class="bar_links" href="editor_publish.php?no=0"><b>Publish</b></a>
                    <a class="bar_links" href="change_password.php?no=0"><b>change password</b></a>
                    <a class="bar_links" href="include/logout.php"><b>Logout</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                
                <form action="editor.php?no=0" method="post" enctype="multipart/form-data">
                    <!-- input form submitting in big green field-->
                    <div id="all_form">
                        <!-- for title-->
                        <div id="error"><?php error($no)?></div>
                        <h2 class="name">Title</h2>
                        <input  class="form_box" type="text" name="title" size="100" maxlength="150" placeholder="          Enter Title"/>
                        <!--for content -->
                        <h2 class="name">Description</h2>
                        <textarea class="form_box" name="description" rows="25" cols="70" placeholder="     Type Content"></textarea>
                        <!-- image -->
                        <h2 class="name">Image Gallery</h2>
                        <table id="gallery">
                            <tr>
                                <td>
                                    <h4 class="name">Image 1. </h4>
                                    <input class="file" type="file" name="pic1" accept="image/*"/>
                                </td>
                                <td>
                                    <h4 class="name">Image 2. </h4>
                                    <input class="file" type="file" name="pic2" accept="image/*"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="name">Image 3. </h4>
                                    <input class="file" type="file" name="pic3" accept="image/*"/>
                                </td>
                                <td>
                                    <h4 class="name">Image 4. </h4>
                                    <input class="file" type="file" name="pic4" accept="image/*"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="name">Image 5. </h4>
                                    <input class="file" type="file" name="pic5"  accept="image/*"/>
                                </td>
                                <td>
                                    <h4 class="name">Image 6. </h4>
                                    <input class="file" type="file" name="pic6" accept="image/*"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="name">Image 7. </h4>
                                    <input class="file" type="file" name="pic7" accept="image/*"/>
                                </td>
                                <td>
                                    <h4 class="name">Image 8. </h4>
                                    <input class="file" type="file" name="pic8" accept="image/*"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="name">Image 9. </h4>
                                    <input class="file" type="file" name="pic9" accept="image/*"/>
                                </td>
                                <td>
                                    <h4 class="name">Image 10. </h4>
                                    <input class="file" type="file" name="pic10" accept="image/*"/>
                                </td>
                            </tr>
                        </table>
                        <!-- video-->
                        <h2 class="name">video </h2>
                        <input  class="form_box" type="text" name="video" size="100" maxlength="150" placeholder="          Enter Youtube link"/><br><br><br><br><br><br>
                        <!-- submit button -->
                        <input id="submit_button" type="submit" name="submit" value="  Submit  "/>
                        
                    </div>
                    <!-- radio button to choose category -->
                    <div id="radio_menu">
                        <div id="menu_header"><h3>Select Category</h3></div>
                        <div id="menu_body">
                            <div class="radio_e"><input type="radio" name="category" value="academic"><b>Academic</b></div>
                            <div class="radio"><input type="radio" name="category" value="placement"><b>Placement</b></div>
                            <div class="radio_e"><input type="radio" name="category" value="sports"><b>Sports</b></div>
                            <div class="radio"><input type="radio" name="category" value="guest_visit"><b>Guest visit</b></div>
                            <div class="radio_e"><input type="radio" name="category" value="new_in_lpu"><b>New in Lpu</b></div>
                            <div class="radio"><input type="radio" name="category" value="competition"><b>Competition held</b></div>
                            <div class="radio_e"><input type="radio" name="category" value="activity"><b>Activity</b></div>
                            <div class="radio"><input type="radio" name="category" value="Lpu_in_news"><b>Lpu in News</b></div>
                        </div>
                        <div id="menu_footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
