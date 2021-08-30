

<!DOCTYPE html>
<html lang ="en" dir ="ltr">
    <head>
        <meta charset="utf8">
        <title>Đại Học Thủy Lợi</title>
        <link rel ="stylesheet" href="./css/style.css">
    </head>
    <body>
        
        <div class="bodybackground"><div class="center"><h1>Đăng nhập admin</h1>
            <form role = "form"  method="$POST" action ="./CheckLogin.php">
                
                <div class="textfield">
                    <input type="text" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="textfield">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <!-- <div class="forgot">Forgot Password</div> -->
                <input type="submit" value="Login">
                <div class="signuplink">
                    Bạn có phải admin của ĐHTL? <a href="#" >Signup</a>
                
                </div>
            </form>
        </div>
    </div>
        
        
    </body>
</html>
