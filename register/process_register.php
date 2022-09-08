<?php 

$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$code = $_POST['code'];

$connect = mysqli_connect('localhost', 'root', '', 'cse481');

$sql = "insert into administrator(email, phone_number, password, code)
        value('$email', '$phone_number', '$password', '$code')";

mysqli_query($connect, $sql);

$admin_infor = "select * from administrator where email = '$email'";

$result = mysqli_query($connect, $admin_infor);
$person = mysqli_fetch_array($result);




mysqli_close($connect);
header("location:../index.php?id=$person[id]");

