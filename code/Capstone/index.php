<?php
    include 'include/user_checking.php';
    include 'include/connect.php';
    include 'include/fetch_index.php';
    
    //connect to magzine database
    global $num_row;
    global $page;
    $page ='magazine';
    connect_db($page);
    
    ?>
<!DOCTYPE html>
<!--
First page of Lpu Magazine which can redirect to login and magazine pages 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/index.css">
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
                    <a class="bar_links" href="login.php?no=0"><b>Teacher Tweet</b></a>
                    <a class="bar_links" href="login.php?no=0"><b>Editor</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <table>
                    <tr>
                        <td>
                            <!--editor msg will be here by function call-->
                        <div id="editor_msg">
                            <div id="older_box_header"><h2>Older Edition</h2></div>
                            <div id="older_box_body"><?php older(); ?></div>
                            <div id="older_box_footer"></div>
                        </div>
                        </td>
                        <td>
                             <!--current edition will be here by function call-->
                        <div id="current_edition">
                            <div id="current_box_header"><h2>Current Edition</h2></div>
                            <div id="current_box_body"><?php latest(); ?></div>
                            <div id="current_box_footer"></div>
                        </div>
                        </td>
                        <td>
                            <!--older edition will be here by function call -->
                        <div id="older_edition">
                            <div id="msg_box_header"><h2>Editor Message</h2></div>
                            <div id="msg_box_body"><?php msg(); ?></div>
                        </div>
                        </td>
                     </tr>
                </table>    
            </div>
        </div>
    </body>
</html>
