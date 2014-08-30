<?php
//this function will genrate error while login
function error($no){
    //if user id or password not matched
    if($no==1){
        echo"<p>user id or password is wrong</p>";
    }
    //if user do not fill any of box
    elseif($no==2){
        echo"<p> you must fill all the credential</p>";
    }
    elseif($no==3){
        echo"<p> Please Enter Same New Password</p>";
    }
    elseif($no==4){
        echo"<p> your old password doesn't matched</p>";
    }
    elseif($no==5){
        echo"<p> Your password has been changed ! <b> Go</b> to Your Account..</p>";
    }elseif($no==6){
        echo"<p>     You must have to enter TITLE and DESCRIPTION </p>";
    }elseif($no==7){
        echo"<p>Please Select Category</p>";
    }elseif($no==8){
        echo"<p>     Please upload image only in jpg and png format</p>";
    }elseif($no==9){
        echo"<p>     Data has been feeded to the database</p>";
    }elseif($no==10){
        echo"<p>     Enter title hor new edition</p>";
    }elseif($no==11){
        echo"<p>     please enter a cover image for this Edition</p>";
    }elseif($no==12){
        echo"<p>     New edition has been published </p>";
    }elseif($no==13){
        echo"<p>     some problem has been occurred try again </p>";
    }elseif($no==14){
        echo"<p>     all field are required to be filled </p>";
    }elseif($no==15){
        echo"<p>     all field are required to be filled </p>";
    }elseif($no==16){
        echo"<p>     Faculty already exist </p>";
    }elseif($no==17){
        echo"<p>     Student already exist </p>";
    }elseif($no==18){
        echo"<p>     A new Faculty has been added to the database  </p>";
    }elseif($no==19){
        echo"<p>     A new Studednt has been added to the database </p>";
    }elseif($no==20){
        echo"<p>     Please upload only jpg or png format image </p>";
    }elseif($no==21){
        echo"<p>     Please upload only jpg or png format image </p>";
    }elseif($no==22){
        echo"<p>     Please enter title and description </p>";
    }elseif($no==23){
        echo"<p>     your new tweet has been loaded </p>";
    }
    
}
?>