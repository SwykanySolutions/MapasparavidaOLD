<?php 
session_start();
if(!isset($_SESSION['user']) || !isset($_SESSION['nivel'])){
header("Location: index.php");
exit;
}else{
    if($_SESSION['nivel'] < 2){
        header("Location: index.php");
        exit;
    }
}
?>