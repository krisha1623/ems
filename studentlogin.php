
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="POST">
           
            <h2>Student Login</h2>
            <div class="form-group">
                
                <input type="email" placeholder="Email" name="email"Required>
            </div>
            <div class="form-group">
                
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p class="admin-login">Admin login <a href="adminlogin.php">here</a></p>
        </form>
    </div>
</body>
</html>