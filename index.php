<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Log In</h2>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="Password" placeholder="Password">
        <button>Login</button>
    </form>

    <h3>Signup</h3>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="Password" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button>Signup</button>

        

    </form>
</body>
</html>