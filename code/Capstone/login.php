<?php
include 'include/error.php';
include 'include/connect.php';
include 'include/user_checking.php';
//first check
login_check();
global $no;
//variable collect info from url to give error msg
$no = $_GET['no'];
global $page;
$page ='login';
connect_db($page);

//check login button is clickrd
if(isset($_POST['user_id'])&&isset($_POST['password'])){
    //tranfer posted data to varible
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    //check that field are not empty
    if(!empty($user_id)&&!empty($password)){
        //write query to check the correct credential
        $query = "SELECT id, password, category FROM `login` WHERE id='$user_id' AND password='$password'";
        //try
        $result = mysql_query($query);
        if($result){
            
		$query_num_row= mysql_num_rows($result);
		if($query_num_row==0)
		{
                   header("Location: login.php?no=1"); 
		}
		else
		{  
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result);
                    //extract assotiative array from result
                    extract($row);
                    $_SESSION['id']=$id;
                    $_SESSION['category']=$category;
                    //check who had logedin
                    user_check();
              
                }
		}
        
    }
    else{
        header("Location: login.php?no=2");
    }
}

?>

<!DOCTYPE html>
<!--
Login page which will allow to go to editor ,student and faculty personal pages  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/login.css">
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
                </div>
            </div>
            <!-- main content -->
            <div id="content">
                <!-- login image -->
                <img alt="login" id="login_img" src="image/login.jpg"/>
                <!-- whole login content in the center -->
                <div id="login_wrapper">
                    <!-- green header part -->
                    <div id="upper_login"><h1>Log in</h1></div>
                    <!-- blue body part -->
                    <div id="lower_login">
                        <!-- actual form code -->
                        <div id="error"><?php error($no)?></div>
                        <form id="form" action="login.php?no=0" method="post">
                            <table>
                                <tr>
                                    <td><img alt="id" class="login_pic" src="image/id.jpg"></td>
                                    <td><input class="form_element" type="text" name="user_id" placeholder="  User Id"/></td>
                                </tr>                          
                                <tr>
                                    <td><img alt="password" class="login_pic" src="image/password.jpg"></td>
                                    <td><input class="form_element" type="password" name="password" placeholder="  Password"/></td>
                                </tr>
                            </table>
                            <input class="form_element" id="form_button" type="submit" value="Login"/>
                        </form>
                    </div>
                    <!-- footer green -->
                    <div id="footer_login"></div>
                </div>
            </div>
        </div>
    </body>
</html>
