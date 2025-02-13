<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="form-container">
        <p class="title">Register</p>
        <form class="form" method = "post" action="sign.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Create your Username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Create your Password">
            </div>
            <div class="input-group">
                <label for="Phone">Phone</label>
                <input type="text" name="Phone" id="Phone" placeholder="Enter your Phone Number">
            </div>
            <div class="input-group">
                <label for="Address">Full Address</label>
                <input type="text" name="Address" id="Address" placeholder="Enter your Full Address">
            </div>
            <button class="login" name = "signIn"> Sign In</button>

            <p class="bottom">Already have Account?
                <a href="login.php" class="BottomButton">Login</a>
            </p>
        </form>
    </div>
</body>
</html>