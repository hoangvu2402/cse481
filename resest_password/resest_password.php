<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body style="padding: 80px;">

    <?php 
    $error = '';
    if(isset($_GET['error'])) {
        $error = $_GET['error'];
        echo '<h3 class = "error_php">'.$error.'</h3>';
    }
    ?>

    <div class="wrap">
        <div class="header">
            <h2 class="header_title">CÀI ĐẶT LẠI MẬT KHẨU</h2>
        </div>

        <div class="main main_register">
            <form action="process_resest_password.php" method ="POST" class="form_register">
                <h4>email: <span id="email-error" class="error"></span></h4>
                <input type="text" name="email" class="input_class input_register" placeholder="email" id="email">

                <h4>số điện thoại: <span id="phone_number-error" class="error"></span></h4>
                <input type="number" name="phone_number" class="input_class input_register"  placeholder="số điện thoại"  id = "phone_number">

                <h4>nhập mã: <span id="code-error" class="error"></span></h4>
                <input type="text" name="code" class="input_class input_register code_register"  placeholder="mã" id = "code">
                <button class="botton_register" onclick="return false"><h4>NHẬN MÃ</h4></button>
                
                <h4>mật khẩu: <span id="password-error" class="error"></span></h4>
                <input type="password" name ="password" class="input_class input_register"  placeholder="mật khẩu" id = "password">

                <h4>nhập lại mật khẩu: <span id="re_password-error" class="error"></span></h4>
                <input type="password" class="input_class input_register"  placeholder="nhập lại mật khẩu" id = "re_password">


                <div class="register">
                <button type="submit" class="register_button login" style="color: #5b69f3db; padding: 5px 12px" onclick="return add()"><h3>XÁC NHẬN</h3></button>
            </div>              
            </form>


        
        
        </div>
    </div>

    <script src="../action.js"></script>
</body>
</html>