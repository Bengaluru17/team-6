<?php
include('connect.inc.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$posts=array();

$file=uniqid();
$posts[] = array('fname'=> $fname, 'lname'=> $lname,'sex'=> $sex,'address'=> $address,'phone'=> $phone);
$fp = fopen('forms/'.$file.'.json', 'w');
fwrite($fp, json_encode($posts));

$frm=$file.'.json';
$query="Insert into form(fid,formName,formText) values('$file','demo','$frm')";
mysqli_query($conn,$query);


?>