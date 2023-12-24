
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="login-container">
        <form action="adminmenu.php" method="POST">
           
            <h2>Admin Login</h2>
            <div class="form-group">
                
                <input type="username" placeholder="Username" name="username"Required>
            </div>
            <div class="form-group">
                
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>