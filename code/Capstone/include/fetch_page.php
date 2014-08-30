<?PHP
//this page will show description, image and video
//fetching title
function title(){
    //variable collect info from url to check category
        $cat = $_GET['cat'];
        //varible collection from url for item no
        $s_no = $_GET['s_no'];
        //variable collect info from url to check the magazine id
        $id = $_GET['id'];
        //fetching title for acadmic
        if($cat==1){
            $table = $id.'_academic';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
        //fetching title for _placement
        if($cat==2){
            $table = $id.'_placement';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
        //fetching title for _sports
        if($cat==3){
            $table = $id.'_sports';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
        //fetching title for _guest_visit
        if($cat==4){
            $table = $id.'_guest_visit';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
        //fetching title for _new_in_lpu
        if($cat==5){
            $table = $id.'_new_in_lpu';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
        //fetching title for _competition
        if($cat==6){
            $table = $id.'_competition';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
        //fetching title for _activity
        if($cat==7){
            $table = $id.'_activity';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
        //fetching title for _lpu_in_news
        if($cat==8){
            $table = $id.'_lpu_in_news';
                $sql = "SELECT title FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h1>'. $title.'</h1>'; 
                }
        }
}

//fetching description
function desc(){
    //variable collect info from url to check category
        $cat = $_GET['cat'];
        //varible collection from url for item no
        $s_no = $_GET['s_no'];
        //variable collect info from url to check the magazine id
        $id = $_GET['id'];
        //fetching discription for acadmic
        if($cat==1){
            $table = $id.'_academic';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
        //fetching desc for _placement
        if($cat==2){
            $table = $id.'_placement';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
        //fetching desc for _sports
        if($cat==3){
            $table = $id.'_sports';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
        //fetching desc for _guest_visit
        if($cat==4){
            $table = $id.'_guest_visit';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
        //fetching desc for _new_in_lpu
        if($cat==5){
            $table = $id.'_new_in_lpu';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
        //fetching desc for _competition
        if($cat==6){
            $table = $id.'_competition';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
        //fetching desc for _activity
        if($cat==7){
            $table = $id.'_activity';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
        //fetching desc for _lpu_in_news
        if($cat==8){
            $table = $id.'_lpu_in_news';
                $sql = "SELECT description FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $description.'</h3>'; 
                }
        }
}


//fetching video
function video(){
    //variable collect info from url to check category
        $cat = $_GET['cat'];
        //varible collection from url for item no
        $s_no = $_GET['s_no'];
        //variable collect info from url to check the magazine id
        $id = $_GET['id'];
        //fetching video for acadmic
        if($cat==1){
            $table = $id.'_academic';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
        //fetching title for _placement
        if($cat==2){
            $table = $id.'_placement';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
        //fetching title for _sports
        if($cat==3){
            $table = $id.'_sports';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
        //fetching title for _guest_visit
        if($cat==4){
            $table = $id.'_guest_visit';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
        //fetching title for _new_in_lpu
        if($cat==5){
            $table = $id.'_new_in_lpu';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
        //fetching title for _competition
        if($cat==6){
            $table = $id.'_competition';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
        //fetching title for _activity
        if($cat==7){
            $table = $id.'_activity';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
        //fetching title for _lpu_in_news
        if($cat==8){
            $table = $id.'_lpu_in_news';
                $sql = "SELECT video FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                echo '<h3>'. $video.'</h3>'; 
                }
        }
}


//fetching image
function image(){
    //variable collect info from url to check category
        $cat = $_GET['cat'];
        //varible collection from url for item no
        $s_no = $_GET['s_no'];
        //variable collect info from url to check the magazine id
        $id = $_GET['id'];
        //fetching image for acadmic
        if($cat==1){
            $table = $id.'_academic';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                    if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ;
                }
        }
        //fetching title for _placement
        if($cat==2){
            $table = $id.'_placement';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ; 
                }
        }
        //fetching title for _sports
        if($cat==3){
            $table = $id.'_sports';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ; 
                }
        }
        //fetching title for _guest_visit
        if($cat==4){
            $table = $id.'_guest_visit';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ; 
                }
        }
        //fetching title for _new_in_lpu
        if($cat==5){
            $table = $id.'_new_in_lpu';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ; 
                }
        }
        //fetching title for _competition
        if($cat==6){
            $table = $id.'_competition';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ; 
                }
        }
        //fetching title for _activity
        if($cat==7){
            $table = $id.'_activity';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ;
                }
        }
        //fetching title for _lpu_in_news
        if($cat==8){
            $table = $id.'_lpu_in_news';
                $sql = "SELECT image1, image2, image3, image4, image5, image6, image7, image8, image9 ,image10 FROM `$table` WHERE s_no='$s_no'";
                $result_title_sql = mysql_query($sql);
                if($result_title_sql){
                    //fetch assotiative array from result
                    $row = mysql_fetch_assoc($result_title_sql);
                    //extract assotiative array from result
                    extract($row);
                if($image1!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image1.'"/>' ;
                    if($image2!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image2.'"/>' ;
                    if($image3!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image3.'"/>' ;
                    if($image4!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image4.'"/>' ;
                    if($image5!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image5.'"/>' ;
                    if($image6!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image6.'"/>' ;
                    if($image7!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image7.'"/>' ;
                    if($image8!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image8.'"/>' ;
                    if($image9!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image9.'"/>' ;
                    if($image10!='') echo '<img class="gallery" alt="No Image" src="upload/image/'.$image10.'"/>' ; 
                }
        }
}

?>