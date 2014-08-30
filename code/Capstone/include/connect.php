<?php
//connect to the database
//this file will connect to my sql server
//all credential of mysql
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';

//try to connect to mysql if not give error
if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)){
    die("could't connect to mysql");
}
//try to connect to database according to the page for login or magazine and lpu+
function connect_db($page){
    //when any one try to login connect to login_db
    if($page=='login'){
        if(!@mysql_select_db('login_db')){
            die();
        }
    }
    //when magazine is opened to read magazine connect to magazine_db
    else if($page=='magazine'){
        if(!@mysql_select_db('magazine_db')){
            die();
        }
    }
    
}

?>
