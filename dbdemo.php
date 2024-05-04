<?php
$name=$_POST['nm'];
$mobile=$_POST['mo'];
$gender=$_POST['gender'];

$con = mysqli_connect("localhost","root","","aptutorials");
$query = mysqli_query($con,"INSERT INTO `student` (`id`, `name`, `mobile`, `gender`) VALUES (NULL, '$name', '$mobile', '$gender')") or die("Error".mysqli_error($con));

if($query)
{
    echo"<script>alert('record Insertd Successfully');</script>";
    echo"<script>window.location='form1demo.php';</script>";
}
?>