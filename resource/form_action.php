<?php
include '_dbconnect.php';
if (!empty($_POST) && $_SERVER['REQUEST_METHOD']=='POST')
{
    $first=$_POST["firstname"];
    $last=$_POST["lastname"];
    $con=$_POST["con_name"];
    $sub=$_POST["subject"];
    $sql="INSERT INTO `contact_form` ( `First_name`, `Last_name`, `Country`, `Subject`, `Timestamp`) VALUES('$first', '$last', '$con', '$sub', current_timestamp())";
    $result=mysqli_query($connection,$sql);
    header("location:/CONTACTFORM_PHP/index.php?show=1");
}
?>