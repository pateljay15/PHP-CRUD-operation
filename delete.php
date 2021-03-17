<?php
include_once "connectdb.php";

$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM information WHERE studentId=$id");

header("Location: index.php");
?>