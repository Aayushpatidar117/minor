<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="loginstyle.css">
  <title>Food Website</title>
</head>
<body>
    <div class="main_btn">
        <a href="index.php">Back</a>
        
    </div>
    <section>
        
        <div class="form-box">
            <div class="form-value">
                <form name="f1" action = "login_action.php" onsubmit = "return validation()" method = "post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id ="email" name  = "email" >
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password"  id ="pass" name  = "pass">
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>
                   
                    <input type =  "submit" id = "btn" value = "Login" /> 
                    <div class="register">
                        <p>Don't have a account <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>