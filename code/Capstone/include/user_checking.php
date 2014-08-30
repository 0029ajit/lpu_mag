
        <?php
            // user checking
            session_start();
            function user_check(){
		if(@$_SESSION['category']=='editor'){
                        header("Location: editor.php?no=0");
                    }
                    elseif(@$_SESSION['category']=='student'){
                        $time=time();
                         $own = $_SESSION['id'];

                        $sqlt = "SELECT last_login FROM `login` WHERE id='$own'";
                        $log_time = mysql_query($sqlt);
                        $row1 = mysql_fetch_assoc($log_time);
                        //extract assotiative array from result
                        extract($row1);
                        $_SESSION['time']=$last_login;
    
                        $query = "UPDATE login SET last_login='$time' WHERE id='$own'";
                        //try
                       $result = mysql_query($query);
                        header("Location: student_tweet.php");
                    }
                    elseif(@$_SESSION['category']=='faculty'){
                        $time=time();
                         $own = $_SESSION['id'];

                        $sqlt = "SELECT last_login FROM `login` WHERE id='$own'";
                        $log_time = mysql_query($sqlt);
                        $row1 = mysql_fetch_assoc($log_time);
                        //extract assotiative array from result
                        extract($row1);
                        $_SESSION['time']=$last_login;
    
                        $query = "UPDATE login SET last_login='$time' WHERE id='$own'";
                        //try
                       $result = mysql_query($query);
                        header("Location: faculty_tweet.php");
                    }elseif(@$_SESSION['category']=='admin'){
                        header("Location: admin.php?no=0");
                    }

            }
            //check at entering the login page
            function login_check(){
                if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
                    user_check();
                }
                
            }
            //check at entering the editor page
            function editor_check(){
                if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
                    if(@$_SESSION['category']=='student'){
                        header("Location: student.php?no=0&cat=0");
                    }
                    elseif(@$_SESSION['category']=='faculty'){
                        header("Location: faculty.php?no=0&cat=0");
                    }
                    elseif(@$_SESSION['category']=='admin'){
                        header("Location: admin.php?no=0");
                    }
                }
                else{
                    header("Location: index.php");
                }
                
            }
            //check at entering the student page
            function student_check(){
                if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
                    if(@$_SESSION['category']=='editor'){
                        header("Location: editor.php?no=0");
                    }
                    elseif(@$_SESSION['category']=='faculty'){
                        header("Location: faculty.php?no=0&cat=0");
                    }
                    elseif(@$_SESSION['category']=='admin'){
                        header("Location: admin.php?no=0");
                    }
                }
                else{
                    header("Location: index.php");
                }
                
            }
            //check at entering the faculty page
            function faculty_check(){
                if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
                    if(@$_SESSION['category']=='student'){
                        header("Location: student.php?no=0&cat=0");
                    }
                    elseif(@$_SESSION['category']=='editor'){
                        header("Location: editor.php?no=0");
                    }
                    elseif(@$_SESSION['category']=='admin'){
                        header("Location: admin.php?no=0");
                    }
                }
                else{
                    header("Location: index.php");
                }
                
            }
            //check at entry of admin page
            function admin_check(){
                if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
                    if(@$_SESSION['category']=='student'){
                        header("Location: student.php?no=0&cat=0");
                    }
                    elseif(@$_SESSION['category']=='editor'){
                        header("Location: editor.php?no=0");
                    }
                    elseif(@$_SESSION['category']=='faculty'){
                        header("Location: faculty.php?no=0&cat=0");
                    }
                }
                else{
                    header("Location: index.php");
                }
                
            }
        ?>
    
