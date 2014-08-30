<?php 
    function publish(){
        
        $pic_name = '';
        //checking for empty title
        if(empty($_POST['title'])){
                header('location: editor_publish.php?no=10');
            }else{
                $cover = $_FILES['cover_pic']['name'];
                //checking for empty cover image
                if($cover==''){
                    header('location: editor_publish.php?no=11');
                }else{
                    $type = $_FILES["cover_pic"]["type"];
                    //checking type
                    if($type=='image/jpeg'||$type=='image/png'){
                        //temp location
                        $tmp_loc= $_FILES['cover_pic']['tmp_name'];
                        //assigning unique name
                        $pic_name= time().rand(0, 1000)."$cover";
                        $upload_folder='upload/image/';
                        //moving folder to specific folder
                        move_uploaded_file($tmp_loc, $upload_folder.$pic_name);
                        $unique_id = time();
                        $title=$_POST['title'];
                        //insert data in mag_tabla
                        $query = "INSERT INTO mag_table (id, name, cover)
                        VALUES ('$unique_id', '$title', '$pic_name')";
                        
                        $result = mysql_query($query);
                        if($result){
                            //renaming table
                            $rename = 'RENAME TABLE temp_academic TO '.$unique_id.'_academic,
                                                    temp_activity TO '.$unique_id.'_activity,
                                                    temp_competition TO '.$unique_id.'_competition,
                                                    temp_guest_visit TO '.$unique_id.'_guest_visit,
                                                    temp_lpu_in_news TO '.$unique_id.'_lpu_in_news,
                                                    temp_new_in_lpu TO '.$unique_id.'_new_in_lpu,
                                                    temp_placement TO '.$unique_id.'_placement,
                                                    temp_sports TO '.$unique_id.'_sports';
                            $rename_result = mysql_query($rename);
                            if($rename_result){
                                //creating temp table
                                $name = array('temp_academic','temp_activity','temp_competition','temp_guest_visit','temp_lpu_in_news','temp_new_in_lpu','temp_placement','temp_sports');
                                foreach($name as $element){
                                    
                                    $create = 'CREATE TABLE IF NOT EXISTS '.$element.' ( s_no int(11) NOT NULL AUTO_INCREMENT,
                                        title text,
                                        description longtext,
                                        image1 text,
                                        image2 text,
                                        image3 text,
                                        image4 text,
                                        image5 text,
                                        image6 text,
                                        image7 text,
                                        image8 text,
                                        image9 text,
                                        image10 text,
                                        video longtext,
                                        PRIMARY KEY(s_no)
                                        );';
                                    
                                    $create_result = mysql_query($create);
                                    };
                                //giving confermation message
                                header('location: editor_publish.php?no=12');
                            }else{
                             header('location: editor_publish.php?no=13');
                            }
                              
                         }else{
                             header('location: editor_publish.php?no=13');
                         }
                        
                    }  else {
                        //if format is not right
                        header('location: editor_publish.php?no=8');
                    }
                }
                
            }
    }
    
?>