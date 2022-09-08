<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style="padding: 80px;">
    <?php
    $id = '';
    $email = '';
    $password = '';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "select * from administrator where id = '$id'";
        $connect = mysqli_connect('localhost', 'root', '', 'cse481');
        $result = mysqli_query($connect, $sql);
    
        $person = mysqli_fetch_array($result);

        $email = $person['email'];
        $password = $person['password'];
    }
    ?>

    <?php 
    $error = '';
    if(isset($_GET['error'])) {
        $error = $_GET['error'];
        echo '<h3 class = "error_php">'.$error.'</h3>';
    }
    ?>
  

    <div class="wrap">
        <div class="header">
            <h2 class="header_title">ĐĂNG NHẬP</h2>
        </div>

        <div class="main">
            <form action="process_login.php" method="POST" class="input_form">

                <h4 class="input_title">EMAIL: <span id="email-error" class="error"></span></h4>
                <input type="text" value="<?php echo $email ?>" name="email" class="input_class" id="email">

                <h4 class="input_title">MẬT KHẨU: <span id="password-error" class="error"></span></h4>
                <input type="password" value="<?php echo $password ?>" name="password" class="input_class" id="password">

                <br>
                <button type="submit" class="login" onclick = "return login()"><h3>ĐĂNG NHẬP</h3></button>
                
            </form>

            <div class="or">hoặc</div>

            <div class="register">
                <button class="register_button login"><a href="./register/register.php" class="register_link">ĐĂNG KÝ</a></button>
            </div>

            <div class="help">
                <a href="./resest_password/resest_password.php" class="help_link">bạn quên mật khẩu</a>
            </div>
        </div>
    </div>

    <script src="./action.js"></script>
</body>
</html>