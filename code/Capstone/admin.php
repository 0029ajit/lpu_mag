<?php
    include 'include/connect.php';
    include 'include/user_checking.php';
    include 'include/error.php';
    include 'include/admin_post.php';
    
    //first check
    admin_check();
    global $no;
    //variable collect info from url to give error msg
    $no = $_GET['no'];
    
    //connect to magzine database
    global $page;
    $page ='login';
    connect_db($page);
    
   //after submit button is clicked
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['student_submit'])){
            student();
        }
        elseif(isset($_POST['teacher_submit'])){
            teacher();
        }
                    }
?>
<!DOCTYPE html>
<!--
This page will allow admin to add student and teacher  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/login.css">
        <link type="text/css" rel="stylesheet" href="css/admin.css">
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
                    <b id="welcome">Welcome, Admin</b>
                    <a class="bar_links" href="index.php"><b>Home</b></a>
                    <a class="bar_links" href="change_password.php?no=0"><b>change password</b></a>
                    <a class="bar_links" href="include/logout.php"><b>Logout</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <!-- old message -->
                <div id="teacher_wrapper">
                    <!-- green header part -->
                    <div id="upper_teacher"><h2>Add Teacher</h2></div>
                    <!-- blue body part -->
                    <div id="content_teacher">
                        <!-- actual form code -->
                        <div id="error"><?php if($no==14){ error($no);}?></div>
                        <div id="error"><?php if($no==16){ error($no);}?></div>
                        <div id="error"><?php if($no==18){ error($no);}?></div>
                        <div id="error"><?php if($no==20){ error($no);}?></div>
                        <form action="admin.php?no=0" method="post" enctype="multipart/form-data">
                            <h3>Name:</h3>
                            <input class="input" name="teacher_name" type="text" placeholder="  Enter Name"/><br>
                            <h3>Reg.No:</h3>
                            <input class="input" name="teacher_reg" type="text" placeholder="  Enter REG.No"/><br>
                            <h3>Password:</h3>
                            <input class="input" name="teacher_password" type="password" placeholder="  Enter Password"/><br>
                            <h3>Dept:</h3>
                            <input class="input" name="teacher_dept" type="text" placeholder="  Enter Department"/><br>
                            <h3>profile pic:</h3>
                            <input class="file" type="file" name="teacher_pic" accept="image/*"/><br>
                            <input class="reg_button" type="submit" name="teacher_submit" value="  Register  "/>
                        </form>
                    </div>
                    <!-- footer green -->
                    <div id="footer_teacher"></div>
                </div>
                <!-- new message -->
                
                <div id="student_wrapper">
                    <!-- green header part -->
                    <div id="upper_student"><h2>Add Student</h2></div>
                    <!-- blue body part -->
                    <div id="content_student">
                        <!-- actual form code -->
                        <div id="error"><?php if($no==15){ error($no);}?></div>
                        <div id="error"><?php if($no==17){ error($no);}?></div>
                        <div id="error"><?php if($no==19){ error($no);}?></div>
                        <div id="error"><?php if($no==21){ error($no);}?></div>
                        <form action="admin.php?no=0" method="post" enctype="multipart/form-data">
                            <h3>Name:</h3>
                            <input class="input" name="student_name" type="text" placeholder="  Enter Name"/><br>
                            <h3>Reg.No:</h3>
                            <input class="input" name="student_reg" type="text" placeholder="  Enter REG.No"/><br>
                            <h3>Password:</h3>
                            <input class="input" name="student_password" type="password" placeholder="  Enter Password"/><br>
                            <h3>Dept:</h3>
                            <input class="input" name="student_dept" type="text" placeholder="  Enter Department"/><br>
                            <h3>profile pic:</h3>
                            <input class="file" type="file" name="student_pic" accept="image/*"/><br>
                            <input class="reg_button" type="submit" name="student_submit" value="  Register  "/>
                        </form>    
                    </div>
                    <!-- footer green -->
                    <div id="footer_student">                    
                    </div>
                </div>
             </div>
        </div>
    </body>
</html>
