
<?php
include('connect.inc.php');
$flag=0;
$patientid=$_POST['patientid'];
$name=$_POST['name'];
$doctor=$_POST['doctor'];
$disease=$_POST['disease'];
$room=$_POST['room'];
$age=$_POST['age'];
$gender=$_POST['gender'];

// $posts=array();
//
 $file=uniqid();
//$posts[] = array('fname'=> $fname, 'lname'=> $lname,'sex'=> $sex,'address'=> $address,'phone'=> $phone);
//$fp = fopen('forms/'.$file.'.json', 'w');
//fwrite($fp, json_encode($posts));
// $frm=$file.'.json';
// $query="Insert into schoolform(fid,s) values('$file','demo','$frm')";
$query="Select * from hospitalform where patientid=$patientid";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
if($row[0]!=$patientid) $flag=1;
if($row[1]!=$name)  $flag=1;
if($row[2]!=$doctor)  $flag=1;
if($row[3]!=$disease)  $flag=1;
if($row[4]!=$room)  $flag=1;
if($row[5]!=$age) $flag=1;
if($row[6]!=$gender)  $flag=1;
if(!$flag) header('Location:end.php');
else{
      $msg="error";
      echo "<script type='text/javascript'> alert($msg) </script>";
     header('Location:example1.php');

}

?>
