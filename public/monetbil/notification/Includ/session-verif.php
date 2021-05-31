<?php
session_start();

if(!isset($_SESSION['logged']) || !$_SESSION['logged']){
    header('Location: https://worldtroc.com');
}


?>