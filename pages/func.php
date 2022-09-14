<!-- Created by Yulia Stefani -->
<?php

    function header_link()
    {
        $menu_features = array( // Indexed
            array( //Otomatis assign ke 0 dst
                'code' => 'HOME',
                'name' => 'main',
                'description' => 'Displaying whats on trending'
            ),
            array( 
                'code' => 'PRODUCT',
                'name' => 'products',
                'description' => 'Displaying all products'
            ),
            array(
                'code' => 'ABOUT US',
                'name' => 'aboutus',
                'description' => 'Decribing all about G&C Clothing'
            ),
            array(
                'code' => 'REGISTER',
                'name' => 'register',
                'description' => 'Be one of us!'
            ),
            array(
                'code' => 'LOGIN',
                'name' => 'login',
                'description' => 'Start Shopping!'
            ),
        );

        foreach($menu_features as $key => $value){
            echo "
                <a href='{$value['name']}.php' title='{$value['description']}'>
                    {$value['code']}
                </a>
            ";
        }
    }

    function welcome_msg()
    {
        $input_number = rand(1,10);

        echo '<b>'.date('l') . ', ' . date('Y/m/d') . '</b> <br>';
        if ($input_number == 1){
            echo 'Welcome, You are '. $input_number.  "st vistor today!";
        }
        elseif ($input_number == 2){
            echo 'Welcome, You are '. $input_number.  "nd vistors today!";
        }
        elseif($input_number == 3){
            echo 'Welcome, You are '. $input_number.  "rd vistors today!";
        }
        else{
            echo 'Welcome, You are '. $input_number.  "th vistors today!";
        }
    }

    function dis_product(int $x)
    {
        $Product_list = array(
            'Sleeveless Cotton Blouse',
            'V-neck Strappy Top',
            'Sun Visor',
            'Tie-Detail-Top',
            'Crop-Linen Blend Blouse',
            'Drawstring Top'
        );
    
        $price_list = array(
            'IDR 349,900',
            'IDR 349,900',
            'IDR 129,900',
            'IDR 399,900',
            'IDR 349,900',
            'IDR 349,900'
        );

        for ($i=$x; $i < $x+1; $i++) { 
            echo "
                $Product_list[$i] <br>
                $price_list[$i]
            ";
        }
    }

    function img_gallery()
    {
        $gallery = array(
            array(
                'image_path' => 'pict_1.jpg'
            ),
            array(
                'image_path' => 'pict_2.jpg'
            ),
            array(
                'image_path' => 'pict_3.jpg'
            )
        );

        foreach ($gallery as $key => $value) {
            echo "
                <img src='../images/{$value['image_path']}' alt='{$value['image_path']}'>
            ";
        }
    }

    function direct_link()
    {
        echo'
        <a href="http://twitter.com">
            <img src="../images/twitter_logo.png" alt="">
        </a>
        <a href="http://facebook.com">
            <img src="../images/facebook_logo.png" alt="">
        </a>
        ';
    }

    function login($email, $password)
    {
        if($email == "hello@hello.com" && $password == "hello"){
            echo "Sucessfully Logged In , Hello!";
        }else{
            echo "Please Try Again";
        }
    }

    function submitform($datas)
    {
        $result = '';

        switch ($datas['type']) {
            case 'text':
                $result = "
                    <div class=''>
                        <label for='{$datas['name']}'>{$datas['label']}</label>
                        <input type='text' class='form-control' name='name' id='name' placeholder='Your Name'>
                    </div>
                ";
                break;
                
            case 'email':
                $result = "
                    <div class=''>
                        <label for='{$datas['name']}'>{$datas['label']}</label>
                        <input type='email' class='form-control' name='email' id='email' placeholder='Your E-mail'>
                    </div>
                ";
                break;
            
            default:
                $result = "
                    <div class='row'>
                        <label for='{$datas['name']}' class='col-sm-1-12'>{$datas['label']}</label>
                        <div class=''>
                            <input type='text' class='form-control' name='name' id='name' placeholder='Your Name'>
                        </div>
                    </div>
                ";
                break;
        }

        return $result;
    }

    function validate_image_upload($input_name)
    {
        $error_message = [];

        $target_path = 'uploads/';
        $target_file = $target_path . basename($_FILES[$input_name]["name"]);

        $file_name_target = $target_path . pathinfo($target_file, PATHINFO_FILENAME) . date('d_m_Y__h_i_s') . '.' . pathinfo($target_file, PATHINFO_EXTENSION);
        
        $tmp_file = $_FILES[$input_name]["tmp_name"];

        $file_type = strtolower(pathinfo($file_name_target, PATHINFO_EXTENSION));
        
        if (file_exists($file_name_target)) {
            $error_message[] = "Sorry, file already exists";
        }

        // File Size Limitation
        if ($_FILES[$input_name]["size"] > 1000000){
            $error_message[] = 'Sorry your file is to large';
        }

        // File Type LImitation
        if ($file_type != "png" || $file_type != "jpg" || $file_type != "jpeg") {
            $error_message[] = 'Sorry only pdf files are allowed';
        }

        return array(
            'success' => empty($error_message),
            'message' => $error_message,
            'target' => $file_name_target,
            'tmp' => $tmp_file,
        );
    }
?>