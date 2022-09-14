<!-- Created by Yulia Stefani -->
<?php

    require_once('func.php');

    $error_message = [];
    $upload_status ='';
            
    if (isset($_POST['register'])) {
        
        $upload_status = 'Failed to upload your file.';
            
        $validate_image = validate_image_upload('profile_photo');
            
        if ($validate_image['success']) {
            $result = move_uploaded_file($validate_image['tmp']);
            $validate_image['target'];

            if ($result) {
                $upload_status = 'File successfully uploaded';
            }
        }else {
            $error_message = $validate_image['message'];
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../styles/register.css">
    <link rel="icon" href="../images/logo.jpg">
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
                <h1 id="title">Register</h1>
            </div>
            <div class="form">
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" style="text-align: center">
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-1-12 col-form-label">Email Anda*</label>
                        <div class="col-sm-1-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Anda*</label> <br>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password">
                    </div>
                    <br>
                    <br>
                    <div class="mb-3 row">
                        <label for="profile_photo" class="col-sm-1-12 col-form-label">Profile Photo*</label>
                        <div class="col-sm-1-12">
                            <input type="file" class="form-control" name="profile_photo" id="profile_photo" placeholder="">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="btn-regis">
                        <div class="offset-sm-5 col-sm-10">
                            <button type="register" class="btn btn-primary" name="register" value=1>Register</button>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <div class = "container">
                <div class ="card border-<?= empty($error_message) ? 'info' : 'danger' ?>" style="display: <? isset($_POST['register']) ? 'block' : 'none' ?>">
                    <div class ="card-body">
                        <h4 class="card-title" style="text-align: center"><?= empty($error_message) ? 'Success' : 'Error'?></h4>
                        <p class = "card-text">
                        <ul style="display:<?=empty($error_message) ? 'none' : 'block' ?>;">
                            <?php
                                foreach ($error_message as $key => $value) {
                                    echo "<li>$value</li>";
                                }
                            ?>
                        </ul>
                    </div>
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