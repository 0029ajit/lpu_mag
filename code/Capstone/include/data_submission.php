<?php 
    function upload(){
        $pic1_name='';
        $pic2_name='';
        $pic3_name='';
        $pic4_name='';
        $pic5_name='';
        $pic6_name='';
        $pic7_name='';
        $pic8_name='';
        $pic9_name='';
        $pic10_name='';
        
        
        $upload_folder='upload/image/';
        
        //check category button is checked
        if(isset($_POST['category'])){
            //check title and description is entered
            if(empty($_POST['title'])||empty($_POST['description'])){
                header('location: editor.php?no=6');
            }else{
               //uploading and updating database will be done here
              
                //for pic1
                //extracting name from pic
                $pic1= $_FILES['pic1']['name'];
                //checking upload option is empty
                if($pic1==''){
                    //do nothing when empty
                }  else {
                    $type1 = $_FILES["pic1"]["type"];
                    //checking type
                    if($type1=='image/jpeg'||$type1=='image/png'){
                        //temp location
                        $tmp_loc1= $_FILES['pic1']['tmp_name'];
                        //assigning unique name
                        $pic1_name= time().rand(0, 1000)."$pic1";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic2
                //extracting name from pic
                $pic2= $_FILES['pic2']['name'];
                //checking upload option is empty
                if($pic2==''){
                    //do nothing when empty
                }  else {
                    $type2 = $_FILES["pic2"]["type"];
                    //checking type
                    if($type2=='image/jpeg'||$type2=='image/png'){
                        //temp location
                        $tmp_loc2= $_FILES['pic2']['tmp_name'];
                        //assigning unique name
                        $pic2_name= time().rand(0, 1000)."$pic2";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic3
                //extracting name from pic
                $pic3= $_FILES['pic3']['name'];
                //checking upload option is empty
                if($pic3==''){
                    //do nothing when empty
                }  else {
                    $type3 = $_FILES["pic3"]["type"];
                    //checking type
                    if($type3=='image/jpeg'||$type3=='image/png'){
                        //temp location
                        $tmp_loc3= $_FILES['pic3']['tmp_name'];
                        //assigning unique name
                        $pic3_name= time().rand(0, 1000)."$pic3";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic4
                //extracting name from pic
                $pic4= $_FILES['pic4']['name'];
                //checking upload option is empty
                if($pic4==''){
                    //do nothing when empty
                }  else {
                    $type4 = $_FILES["pic4"]["type"];
                    //checking type
                    if($type4=='image/jpeg'||$type4=='image/png'){
                        //temp location
                        $tmp_loc4= $_FILES['pic4']['tmp_name'];
                        //assigning unique name
                        $pic4_name= time().rand(0, 1000)."$pic4";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic5
                //extracting name from pic
                $pic5= $_FILES['pic5']['name'];
                //checking upload option is empty
                if($pic5==''){
                    //do nothing when empty
                }  else {
                    $type5 = $_FILES["pic5"]["type"];
                    //checking type
                    if($type5=='image/jpeg'||$type5=='image/png'){
                        //temp location
                        $tmp_loc5= $_FILES['pic5']['tmp_name'];
                        //assigning unique name
                        $pic5_name= time().rand(0, 1000)."$pic5";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic6
                //extracting name from pic
                $pic6= $_FILES['pic6']['name'];
                //checking upload option is empty
                if($pic6==''){
                    //do nothing when empty
                }  else {
                    $type6 = $_FILES["pic6"]["type"];
                    //checking type
                    if($type6=='image/jpeg'||$type6=='image/png'){
                        //temp location
                        $tmp_loc6= $_FILES['pic6']['tmp_name'];
                        //assigning unique name
                        $pic6_name= time().rand(0, 1000)."$pic6";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic7
                //extracting name from pic
                $pic7= $_FILES['pic7']['name'];
                //checking upload option is empty
                if($pic7==''){
                    //do nothing when empty
                }  else {
                    $type7 = $_FILES["pic7"]["type"];
                    //checking type
                    if($type7=='image/jpeg'||$type7=='image/png'){
                        //temp location
                        $tmp_loc7= $_FILES['pic7']['tmp_name'];
                        //assigning unique name
                        $pic7_name= time().rand(0, 1000)."$pic7";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic8
                //extracting name from pic
                $pic8= $_FILES['pic8']['name'];
                //checking upload option is empty
                if($pic8==''){
                    //do nothing when empty
                }  else {
                    $type8 = $_FILES["pic8"]["type"];
                    //checking type
                    if($type8=='image/jpeg'||$type8=='image/png'){
                        //temp location
                        $tmp_loc8= $_FILES['pic8']['tmp_name'];
                        //assigning unique name
                        $pic8_name= time().rand(0, 1000)."$pic8";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic9
                //extracting name from pic
                $pic9= $_FILES['pic9']['name'];
                //checking upload option is empty
                if($pic9==''){
                    //do nothing when empty
                }  else {
                    $type9 = $_FILES["pic9"]["type"];
                    //checking type
                    if($type9=='image/jpeg'||$type9=='image/png'){
                        //temp location
                        $tmp_loc9= $_FILES['pic9']['tmp_name'];
                        //assigning unique name
                        $pic9_name= time().rand(0, 1000)."$pic9";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                //for pic10
                //extracting name from pic
                $pic10= $_FILES['pic10']['name'];
                //checking upload option is empty
                if($pic10==''){
                    //do nothing when empty
                }  else {
                    $type10 = $_FILES["pic10"]["type"];
                    //checking type
                    if($type10=='image/jpeg'||$type10=='image/png'){
                        //temp location
                        $tmp_loc10= $_FILES['pic10']['tmp_name'];
                        //assigning unique name
                        $pic10_name= time().rand(0, 1000)."$pic10";
                        
                    }  else {
                        //if format is not right
                        header('location: editor.php?no=8');
                    }
                }
                
                
                
                //uploading file to specified folder
                if($pic1!=''){
                    move_uploaded_file($tmp_loc1, $upload_folder.$pic1_name);
                }
                if($pic2!=''){
                    move_uploaded_file($tmp_loc2, $upload_folder.$pic2_name);
                }
                if($pic3!=''){
                    move_uploaded_file($tmp_loc3, $upload_folder.$pic3_name);
                }
                if($pic4!=''){
                    move_uploaded_file($tmp_loc4, $upload_folder.$pic4_name);
                }
                if($pic5!=''){
                    move_uploaded_file($tmp_loc5, $upload_folder.$pic5_name);
                }
                if($pic6!=''){
                    move_uploaded_file($tmp_loc6, $upload_folder.$pic6_name);
                }
                if($pic7!=''){
                    move_uploaded_file($tmp_loc7, $upload_folder.$pic7_name);
                }
                if($pic8!=''){
                    move_uploaded_file($tmp_loc8, $upload_folder.$pic8_name);
                }
                if($pic9!=''){
                    move_uploaded_file($tmp_loc9, $upload_folder.$pic9_name);
                }
                if($pic10!=''){
                    move_uploaded_file($tmp_loc10, $upload_folder.$pic10_name);
                }

                //collecting title,description and video link
                $title = $_POST['title'];
                $description = $_POST['description'];
                $video = $_POST['video'];
                $category =$_POST['category'];
                
                //checking category and then updating particular table
                if($category=='academic'){
                    $query = "INSERT INTO temp_academic (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }elseif($category=='placement'){
                    $query = "INSERT INTO temp_placement (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }elseif($category=='sports'){
                    $query = "INSERT INTO temp_sports (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }elseif($category=='guest_visit'){
                    $query = "INSERT INTO temp_guest_visit (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }elseif($category=='new_in_lpu'){
                    $query = "INSERT INTO temp_new_in_lpu (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }elseif($category=='competition'){
                    $query = "INSERT INTO temp_competition (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }elseif($category=='activity'){
                    $query = "INSERT INTO temp_activity (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }elseif($category=='Lpu_in_news'){
                    $query = "INSERT INTO temp_lpu_in_news (title, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, video)
VALUES ('$title', '$description', '$pic1_name', '$pic2_name', '$pic3_name', '$pic4_name', '$pic5_name', '$pic6_name', '$pic7_name', '$pic8_name', '$pic9_name', '$pic9_name', '$video')";
                }
                
                //running sql query to feed data into table
                $result = mysql_query($query);
                if($result){
                  header('location: editor.php?no=9');  
                }
                
                
            } 
        }else {
            header('location: editor.php?no=7');
            }
      }
                    
    ?>