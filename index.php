<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>login demo</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!--using bootstrap5-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="the_css/style.css">
    </head>
    <body>
        <!--making two forms-->
        <div class="container">
            <div class="box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Register</h2>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input name="user" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Enter password</label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
                 <div class="col-md-6 login-right">
                    <h2>Login</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input name="user" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Enter password</label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
