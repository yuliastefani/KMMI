<!-- Created by Yulia Stefani -->

<?php
    require_once('func.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="../styles/aboutus.css">
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
        <div class="title">
            Summer Sales 30% Off!
        </div>
    </div>

    <div class="content">
        <div id="about">
            <h3>About Us</h3>
            G&C Clothing adalah sebuah e-commerce yang berfokus pada pakaian untuk Wanita Muda maupun wanita Karir. Kami memulai G&C Clothing sejak Agustus 2021. Bahan-bahan yang kami gunakan merupakan bahan-bahan dengan kualitas yang terbaik.
            <br>
            <h3>Contact Us</h3>
            Twitter : G&Cclothing <br>
            Facebook: G&C Clothing <br>
            WhatsApp: (+62) 85625614561
        </div>
        <div id="subscribe">
            <h3>Subscribe to Our Newsletter!</h3>
            <?php
                $subscribe = array(
                    array(
                        'type' => 'text',
                        'name' => 'name',
                        'label' => 'Name'
                    ),
                    array(
                        'type' => 'email',
                        'name' => 'email',
                        'label' => 'Email'
                    ),
                );

                foreach ($subscribe as $key => $value) {
                    echo submitform($value);
                }
            ?>
            <br>
            <button type="Send">
                Send
            </button>
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