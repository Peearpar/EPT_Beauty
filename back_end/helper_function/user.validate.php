<?php
    function fetchToken($email, $result)
    {
        $token  =   md5(uniqid(microtime(), true) . $email);
        $_SESSION['token'][$email] = ['token' => $token, 'role' => $result['role'], 'is_validate' => false];
        if($result['role'] === 'admin')
        {
            $_SESSION['token'][$email]['is_validate'] = true;
        }
        // Just return it, don't echo and return
        return $token;
    }

    function matchToken($user_email, $token)
    {
        if(!isset($token) && !isset($user_email) && 
        isset($_SESSION['token'][$user_email]['token']) &&
        isset($_SESSION['token'][$user_email]['role'])) {
            return false;
        }
        if($token === $_SESSION['token'][$user_email]['token'] && 
        $_SESSION['token'][$user_email]['role'] === 'admin') {
            $_SESSION['token'][$user_email]['is_validate'] = true;
            return true;
        }
        // I would return false by default, not true
        return false;
    }
?>