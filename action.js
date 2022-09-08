
function add() {

    var email = document.getElementById('email').value;
    var email_regex = /^\w+@\w+\.[a-z]+$/;
    if(!email_regex.test(email)) {
        document.getElementById('email-error').innerHTML = 'email không hợp lệ';
        var send_email = false;
    }
    else {
        document.getElementById('email-error').innerHTML = '';
        var send_email = true;
    }

    var phone_number = document.getElementById('phone_number').value;
    if(phone_number.length == 0) {
        document.getElementById("phone_number-error").innerHTML = "vui lòng nhập số điện thoại";
        var send_phone_number = false;
    } else {
        document.getElementById("phone_number-error").innerHTML = "";
        var send_phone_number = true;
    }

    var password = document.getElementById('password').value;
    if(password.length == 0) {
        document.getElementById("password-error").innerHTML = "vui lòng nhập mật khẩu";
        var send_password = false;
    } else {
        document.getElementById("password-error").innerHTML = "";
        var send_password = true;
    }
    if(password != document.getElementById('re_password').value) {
        document.getElementById("re_password-error").innerHTML = "mật khẩu nhập lại không đúng";
        var send_re_password = false;
    } else {
        document.getElementById("re_password-error").innerHTML = "";
        var send_re_password = true;
    }
    
    
    var code = document.getElementById('code').value;
    if(code != "1111") {
        document.getElementById("code-error").innerHTML = "code vừa nhập không đúng";
        var send_code = false;
    } else {
        document.getElementById("code-error").innerHTML = "";
        var send_code = true;
    }

    if(send_code && send_email && send_password && send_re_password && send_phone_number) {
        return true;
    }
    else {
        return false;
    }


}

function login() {

    var email = document.getElementById('email').value;
    if(email.length == 0) {
        document.getElementById("email-error").innerHTML = "vui lòng nhập email";
        var send_email = false;
    } else {
        document.getElementById("email-error").innerHTML = "";
        var send_email = true;
    }


    var password = document.getElementById('password').value;
    if(password.length == 0) {
        document.getElementById("password-error").innerHTML = "vui lòng nhập mật khẩu";
        var send_password = false;
    } else {
        document.getElementById("password-error").innerHTML = "";
        var send_password = true;
    }

    if(send_email && send_password) {
        return true;
    } else {
        return false;
    }
}
