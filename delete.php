<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","codeaddict");
$sql = "DELETE FROM `images` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    header("location: index.php");
}

?>