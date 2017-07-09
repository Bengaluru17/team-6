<?php
include('connect.inc.php');
$flag=0;
$account=$_POST['account'];
$name=$_POST['name'];
$type=$_POST['type'];
$phone=$_POST['phone'];




// $posts=array();
//
 $file=uniqid();
//$posts[] = array('fname'=> $fname, 'lname'=> $lname,'sex'=> $sex,'address'=> $address,'phone'=> $phone);
//$fp = fopen('forms/'.$file.'.json', 'w');
//fwrite($fp, json_encode($posts));
// $frm=$file.'.json';
// $query="Insert into schoolform(fid,s) values('$file','demo','$frm')";
$query="Select * from bankform where account=$account";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
if($row[0]!=$name) $flag=1;
if($row[1]!=$account)  $flag=1;
if($row[5]!=$phone) $flag=1;

echo "<br>";
if(!$flag) header('Location:end.php');
else{
      $msg="error";
      echo "<script type='text/javascript'> alert($msg) </script>";
     header('Location:example2.php');

}

?>
