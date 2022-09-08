<?php 

$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$code = $_POST['code'];

$connect = mysqli_connect('localhost', 'root', '', 'cse481');

$sql = "select * from administrator";
$result = mysqli_query($connect, $sql);

$count = 0;
foreach($result as $each) {
    if($each['email'] == $email) {
        $count += 1;
        if($each['phone_number'] == $phone_number) {
            $count += 1;
        }
    }
    if($count == 2) {
        $resest_password = "update administrator 
                set
                password = '$password'
                where email = '$email'
                ";
        mysqli_query($connect, $resest_password);

        $admin_infor = "select * from administrator where email = '$email'";
        $result = mysqli_query($connect, $admin_infor);
        $person = mysqli_fetch_array($result);

        mysqli_close($connect);
        header("location:../index.php?id=$person[id]");
        
    }
}

if($count != 2) {
    header("location:./resest_password.php?error=email hoac so dien thoai khong ton tai trong database");

}







