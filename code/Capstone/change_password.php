<?php 
    
include 'include/error.php';
include 'include/connect.php';
//start session and check weather session has set .if not redirect to index.php
session_start();
    if(!isset($_SESSION['id'])||empty($_SESSION['id'])){
        header('location: index.php'); 
                }
                
//seting global variable to access error
global $no;
$no = $_GET['no'];
//conneting to right database
$page ='login';
connect_db($page);

//code for changing password

if(isset($_POST['old_password'])&&isset($_POST['new_password'])&&isset($_POST['again_password'])){
    //tranfer posted data to varible
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $again_password = $_POST['again_password'];
    //check that field are not empty
    if(!empty($old_password)&&!empty($new_password)&&!empty($again_password)){
        //write query to check the correct credential
        if($new_password!=$again_password){
            header("Location: change_password.php?no=3");
        }else{
            //check for the correct old password and change it
            $query = "SELECT id FROM `login` WHERE password='$old_password'";
        //try
        $result = mysql_query($query);
        if($result){
            
		$query_num_row= mysql_num_rows($result);
		if($query_num_row==0)
		{
                   header("Location: change_password.php?no=4"); 
		}
                //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result);
                    //extract assotiative array from result
                    extract($row);
                    
                    //checking for the logged in user
                if($_SESSION['id']!=$id){
                    header("Location: change_password.php?no=4");
                }
		else
		{  
                    //updateing password
                    $query = "UPDATE login SET password = '$new_password' WHERE password='$old_password'";
        
                    $result = mysql_query($query);
                    if($result){
                        //if update successfull give msg to go home
                    header("Location: change_password.php?no=5");
                    }
                }
		}
        }
        
        
    }
    else{
        header("Location: change_password.php?no=2");
    }
}
    
    
?>
<!DOCTYPE html>
<!--
password change page which will allow to change password of ,student and faculty editor  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/login.css">
        <link type="text/css" rel="stylesheet" href="css/change_password.css">
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
                    <a class="bar_links" href="login.php?no=0"><b>Return to Account</b></a>
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <!-- login image -->
                <img alt="login" id="change" src="image/change.png"/>
                <!-- whole login content in the center -->
                <div id="login_wrapper">
                    <!-- green header part -->
                    <div id="upper_login"><h1>Change password</h1></div>
                    <!-- blue body part -->
                    <div id="lower_login">
                        <!-- actual form code -->
                        <div id="error"><?php error($no)?></div>
                        <form id="form" action="change_password.php?no=0" method="post">
                            <table>
                                <tr>
                                    <td><img alt="password" class="login_pic" src="image/password.jpg"></td>
                                    <td><input class="form_element" type="password" name="old_password" placeholder="  Old password"/></td>
                                </tr>                          
                                <tr>
                                    <td><img alt="password" class="login_pic" src="image/password1.jpg"></td>
                                    <td><input class="form_element" type="password" name="new_password" placeholder="  New password"/></td>
                                </tr>
                                <tr>
                                    <td><img alt="password" class="login_pic" src="image/password1.jpg"></td>
                                    <td><input class="form_element" type="password" name="again_password" placeholder="  New password"/></td>
                                </tr>
                            </table>
                            <input class="form_element" id="form_button" type="submit" value="Change Password"/>
                        </form>
                    </div>
                    <!-- footer green -->
                    <div id="footer_login"></div>
                </div>
            </div>
        </div>
    </body>
</html>
