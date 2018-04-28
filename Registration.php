<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="views/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>
    <body>
        <div id="wrapper" style="height: 100%;">
            <header>
    <h1>Welcome to Planet Daily!</h1>
</header>
<nav>
    <ul>
        <li><a href="homepage.html">Homepage</a></li>
        <li><a href="registration.php">User Registration</a></li>
        <li><a href="userlogin.php">User Login</a></li>
        <li><a href="adminlogin.php">Admin Login</a></li>
    </ul>
</nav>
            <main>
                <h2>Create your account</h2>
                <form action="" method="post">
                    <div class="form-group ">
                        <label>Username</label>
                        <input name="username" class="form-control" value="" type="text">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group ">
                        <label>Password</label>
                        <input name="password" class="form-control" type="password">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <input value="Register" type="submit">
                    </div>
                </form>
            </main>
        </div>
    </body>
</html>