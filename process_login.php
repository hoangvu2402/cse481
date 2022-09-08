<?php 
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from administrator";
$connect = mysqli_connect('localhost', 'root', '', 'cse481');
$result = mysqli_query($connect, $sql);

$count = 0;
foreach($result as $each) {
    if($each['email'] == $email) {
        $count += 1;
        if($each['password'] == $password) {
            $count += 1;
        }
    }
    if($count == 2) {
        header("location:./home_page/home_page.php?id=$each[id]");
    }
}

if($count != 2) {
    header("location:./index.php?error=tai khoan khong ton tai");
}
