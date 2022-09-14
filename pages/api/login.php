<?php
    session_start();

    $eml = isset($_POST['email']) ? $_POST['email'] : '';
    $pwd = isset($_POST['password']) ? $_POST['password'] : '';
    
    $success = FALSE;
    $message = 'Authentication failed!';
    
    if ($eml == 'hello@hello.com' && $pwd == 'hello') {
        $success = TRUE;
        $message = 'Aunthentication successfull.';
    
        $_SESSION['session_app'] = true;
    }elseif ($eml == 'test@test.com' && $pwd == 'test') {
        $success = TRUE;
        $message = 'Aunthentication successfull.';
    
        $_SESSION['session_app'] = true;
    }
    
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: ../main.php');
    }
    
    $result = array(
        'success' => $success,
        'message' => $message
    );
    
    echo json_encode($result);
    exit;

?>