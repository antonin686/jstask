<?php
include('confiq.php');
///write new query here
$e=$_REQUEST["e"];
$result=mysqli_query($conn,"SELECT * FROM users WHERE email LIKE '$e' ");
$rows=mysqli_num_rows($result);
if ($rows> 0)
{
    echo "true";
}
else
{
    echo "false";
}
?>