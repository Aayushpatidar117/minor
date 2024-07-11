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
                <form action="register_action.php" method="post">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person"></ion-icon>
                        <input type="text" placeholder="you username" name="name">
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" placeholder="you email" name="email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" placeholder="you password" name="password">
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox" >I agree to the terms & conditions</label>
                      
                    </div>
                    
                    <input type="submit" name="Submit" value="Register" class="order_btn">
                    <div class="login">
                        <p>Already have an account <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>