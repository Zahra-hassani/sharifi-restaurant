<?php
if(isset($_SESSION['username'])){
session_start();
session_reset();
session_destroy();
header('location:home.php');
}


?>