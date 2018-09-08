<?php
session_start();
$x=$_POST['name'];
$y=$_POST['pss'];
if(!($x=='admin' && $y=='admin'))
{
    echo "login failed";
    include 'main.html';
    session_destroy();
}
else 
{
    $_SESSION['user']=$x;
    echo "login successful";
    header('Location:fill.html');
}
?>