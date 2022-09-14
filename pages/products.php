<!-- Created by Yulia Stefani -->
<!DOCTYPE html>
<?php
    $label = 'QUICK SHOP';

    require_once('func.php');
?>

<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" href="../styles/products.css">
    <link rel="icon" href="../images/logo.jpg">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="nb-left">
                <img src="..//images/logo.jpg" alt="">
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
        <h1>Our Products</h1>
            <div class="ct-pdt-card">
                <div class="ct-card">
                    <div class="ct-pdt-card1"></div>
                    <div class="label">
                        <h1><?php echo $label?></h1>
                    </div>
                    <H3>
                        <?php 
                            dis_product(0);
                        ?>
                    </H3>
                </div>
                <div class="ct-card">
                    <div class="ct-pdt-card2"></div>
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
                    <div class="ct-pdt-card3"></div>
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
            <div class="ct-pdt-card-2">
                <div class="ct-card">
                    <div class="ct-pdt-card4"></div>
                    <div class="label">
                        <h1><?php echo $label?></h1>
                    </div>
                    <H3>
                        <?php 
                            dis_product(3);
                        ?>
                    </H3>
                </div>
                <div class="ct-card">
                    <div class="ct-pdt-card5"></div>
                    <div class="label">
                        <h1><?php echo $label?></h1>
                    </div>
                    <H3>
                        <?php 
                            dis_product(4);
                        ?>
                    </H3>
                </div>
                <div class="ct-card">
                    <div class="ct-pdt-card6"></div>
                    <div class="label">
                        <h1><?php echo $label?></h1>
                    </div>
                    <H3>
                        <?php 
                            dis_product(5);
                        ?>
                    </H3>
                </div>
            </div>
        <!-- <h3> -->
            <?php 
                // echo 'Total Product: ' . $total . ' Products.' 
            ?>
        <!-- </h3> -->
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