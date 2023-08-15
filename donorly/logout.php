<?php require 'file/connection.php';
$_SESSION=[];
session_unset();
session_destroy();
header("location: main1.php");?>