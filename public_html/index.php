<?php 
session_start(); 
$_SESSION['count']=(isset($_SESSION['count']))?$_SESSION['count']+1:1; 
$json['time ']= date(' Y-m-d H:i:s'); 
$json['ip ']=$_SERVER['REMOTE_ADDR']; 
$json['count '] = $_SESSION['count']; 
echo json_encode($json);

?>
