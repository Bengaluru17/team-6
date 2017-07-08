<?php
include('connect.inc.php');
$flag=0;
$fid=$_POST['fid'];
$school=$_POST['school'];
$student=$_POST['student'];
$class=$_POST['class'];
$section=$_POST['section'];
$blood=$_POST['blood'];
$father=$_POST['father'];
$city=$_POST['city'];

// $posts=array();
//
 $file=uniqid();
//$posts[] = array('fname'=> $fname, 'lname'=> $lname,'sex'=> $sex,'address'=> $address,'phone'=> $phone);
//$fp = fopen('forms/'.$file.'.json', 'w');
//fwrite($fp, json_encode($posts));
// $frm=$file.'.json';
// $query="Insert into schoolform(fid,s) values('$file','demo','$frm')";
$query="Select * from schoolform where FID=$fid";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
if($row[0]!=$fid) $flag=1;
if($row[1]!=$school)  $flag=1;
if($row[2]!=$student)  $flag=1;
if($row[3]!=$class)  $flag=1;
if($row[4]!=$section)  $flag=1;
if($row[5]!=$blood) $flag=1;
if($row[6]!=$father)  $flag=1;
if($row[7]!=$city)  $flag=1;
if(!$flag) echo "Congrats";
?>
