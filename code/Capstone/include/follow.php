<?php 
    include 'connect.php';
    
    //connect to magzine database
    global $page;
    $page ='login';
    connect_db($page);

global $id;
global $f;
global $url;

$id = $_GET['id'];
$f = $_GET['f'];
$url = $_GET['url'];

$insert = "INSERT INTO `follow` (`follower`, `followed`) VALUES ('$f', '$id')";
$result1 = mysql_query($insert);
if($result1){
    echo 'done';
    header('Location:../'.$url.'');
}else{
    echo 'error';
}
?>