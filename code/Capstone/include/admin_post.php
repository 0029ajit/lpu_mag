<?php 
    //new entry of teacher and student will be done here
    //new entry of teacher
    function teacher(){
        if(empty($_POST['teacher_name'])||empty($_POST['teacher_reg'])||empty($_POST['teacher_password'])||empty($_POST['teacher_dept'])||empty($_FILES['teacher_pic']['name'])){
            header('location: admin.php?no=14');
        }else{
            $name = $_POST['teacher_name'];
            echo "$name";
            $id = $_POST['teacher_reg'];
            echo "$id";
            $password = $_POST['teacher_password'];
            echo "password";
            $dept = $_POST['teacher_dept'];
            echo "$dept";
            $pic= $_FILES['teacher_pic']['name'];
            echo "$pic";
            $upload_folder='upload/photo/';
            
             $type = $_FILES["teacher_pic"]["type"];
             echo "$type";
             //checking type
             if($type=='image/jpeg'||$type=='image/png'){
                 //temp location
                 $tmp_loc= $_FILES['teacher_pic']['tmp_name'];
                 //assigning unique name
                 $pic_name= time().rand(0, 1000)."$pic";
                 move_uploaded_file($tmp_loc, $upload_folder.$pic_name);
                 $query = "SELECT id FROM `login` WHERE id='$id'";
                //try
                $result = mysql_query($query);
               if($result){
                  $query_num_row= mysql_num_rows($result);
                  if($query_num_row==1)
                    {
                        header("Location: admin.php?no=16"); 
                    }else{
                        //create new teacher and corresponding table
                        //updating in login table
                        $query1 = "INSERT INTO login (id, password, category, name, pic, dept)
                        VALUES ('$id', '$password', 'faculty', '$name', '$pic_name', '$dept')";
                        $result1 = mysql_query($query1);
                        //creating tables 

                      
                       header('location: admin.php?no=18');

                    }
                }
          
                        
              }  else {
                //if format is not right
                 header('location: admin.php?no=20');
                    }
                
           
             }    
    }
    //new entry of student
    function student(){
        if(empty($_POST['student_name'])||empty($_POST['student_reg'])||empty($_POST['student_password'])||empty($_POST['student_dept'])||empty($_FILES['student_pic']['name'])){
            header('location: admin.php?no=15');
        }else{
            $name = $_POST['student_name'];
            echo "$name";
            $id = $_POST['student_reg'];
            echo "$id";
            $password = $_POST['student_password'];
            echo "password";
            $dept = $_POST['student_dept'];
            echo "$dept";
            $pic= $_FILES['student_pic']['name'];
            echo "$pic";
            $upload_folder='upload/photo/';
            
             $type = $_FILES["student_pic"]["type"];
             echo "$type";
             //checking type
             if($type=='image/jpeg'||$type=='image/png'){
                 //temp location
                 $tmp_loc= $_FILES['student_pic']['tmp_name'];
                 //assigning unique name
                 $pic_name= time().rand(0, 1000)."$pic";
                 move_uploaded_file($tmp_loc, $upload_folder.$pic_name);
                 $query = "SELECT id FROM `login` WHERE id='$id'";
                //try
                $result = mysql_query($query);
               if($result){
                  $query_num_row= mysql_num_rows($result);
                  if($query_num_row==1)
                    {
                        header("Location: admin.php?no=17"); 
                    }else{
                        //create new student and corresponding table
                        //updating in login table
                        $query1 = "INSERT INTO login (id, password, category, name, pic, dept)
                        VALUES ('$id', '$password', 'student', '$name', '$pic_name', '$dept')";
                        $result1 = mysql_query($query1);
                       
                       header('location: admin.php?no=19');

                    }
                }
          
                        
              }  else {
                //if format is not right
                 header('location: admin.php?no=21');
                    }
                
           
             }    
    }
?>