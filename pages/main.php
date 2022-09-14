<!-- Created by Yulia Stefani -->
<?php
    $label = 'QUICK SHOP';

    require_once('func.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>G&C Clothing</title>
    <link rel="stylesheet" href="../styles/main.css">
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
        <div class="ct-best">
            <h1>Best Seller</h1>
            <div class="ct-best-card">
                <div class="ct-card">
                    <div class="ct-best-card1"></div>
                    <div class="label">
                        <h1><?php echo $label?></h1>
                    </div>
                    <H3>
                        <?php
                            $x = 0;
                            dis_product($x);
                        ?>
                    </H3>
                </div>
                <div class="ct-card">
                    <div class="ct-best-card2"></div>
                    <div class="label">
                        <h1><?php echo $label?></h1>
                    </div>
                    <H3>
                        <?php
                            dis_product(1);
                        ?>
                    </H3>
                </div>
                <div class="ct-card">
                    <div class="ct-best-card3"></div>
                    <div class="label">
                        <h1><?php echo $label?></h1>
                    </div>
                    <H3>
                        <?php
                            dis_product(2);
                        ?>
                    </H3>
                </div>
            </div>
        </div>
        <div class="ct-mid">
            <h1>#GCxME</h1>
            <p>Share your personal style and see how others are styling their favourites from G&C. Tag your picture with @G&C and #GCxME for a chance to be featured on gcclothing.com and in our stores.</p>
            <div>
                <?php
                    img_gallery()
                ?>
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