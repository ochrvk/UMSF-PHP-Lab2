<?php
    session_start();
    if(isset($_POST['button']))
    {
        $users = 
        [
            ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
            ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
            ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
            ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
            ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat '],
        ];

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['lang'];
        $_SESSION['auth'] = false;
        $password = $_POST['password'];
        $err_check = 0;

        for($i = 0; $i < count($users); $i++)
        {
            if($users[$i]['login'] == $_SESSION['login'] && $users[$i]['password'] == $password)
            {
                $err_check = 1;
                $_SESSION['auth'] = true;
                $_SESSION['lang'] = $users[$i]['lang'];
                
                header("Location: ThePage.php"); exit;
            }
        }

        if($err_check == 0)
        {
            echo 'неправильный ввод!';
        }
    }
    
?>
