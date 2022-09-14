<!-- Created by Yulia Stefani -->
<?php

    require_once('func.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="icon" href="../images/logo.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="nb-left">
                <img src="../images/logo.jpg" alt="">
            </div>
            <div class="nb-right">
                <?php
                    header_link()
                ?>
            </div>
            <div style="flex: 1; text-align: right; margin-right: 2vw;">
                <?php
                    welcome_msg()
                ?>
            </div>
        </div>
    </div>
    <div class="content">
        <div id='box'>
            <div>
                <h1 id="title">LOGIN</h1>
            </div>
            <div class="form">
                <form id="login">
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-1-12 col-form-label">Email Anda*</label>
                        <div class="col-sm-1-12">
                            <input type="email" class="form-control" name="email" id="email-data" placeholder="Your E-mail">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Anda*</label> <br>
                        <input type="password" class="form-control" name="password" id="password-data" placeholder="Your Password">
                    </div>
                    <br>
                    <br>
                    <div class="btn-login">
                        <div class="offset-sm-5 col-sm-10">
                            <button type="login" class="btn btn-primary" name="login" value=1>Login</button>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <div class="card border-warning" id="login-error-box" style="display: none;">
                    <div class="card-body">
                        <p class="card-text" id="login-error-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <h1>Follow us on</h1>
        <div class="link">
            <?php
                direct_link()
            ?>
        </div>
        
    </div>
</body>
</html>