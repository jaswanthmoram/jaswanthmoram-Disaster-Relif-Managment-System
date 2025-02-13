<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Login</title>
</head>
<body>
    <div class="form-container">
        <p class="title">Login</p>
        <form class="form" method = "post" action="sign.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your Username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your Password">
            </div>
            <button class="login" name = "login"> Login</button>
        </form>
        <p class="bottom">Don't have an account?
            <a href="register.php" class="BottomButton">Sign up</a>
        </p>
    </div>
</body>
</html>