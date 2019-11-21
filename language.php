<?php
    session_start();
    
    if($_SESSION['auth'] == true)
    {
        $x = 0;
        if($_SESSION['lang'] == "ru" || $_SESSION['lang'] == "ua" || $_SESSION['lang'] == "en" || $_SESSION['lang'] == "it")
        {
            header("Location: ThePage.php"); exit;
        }
        else if($x != 1) 
        {
            $_SESSION['lang'] = $_POST['lang'];
            header("Location: ThePage.php"); exit;
        }
        else 
        {
            header("Location: default.php"); exit;
            $x = 1;
        }
    }
    else
    {
        header("Location: index.php"); exit;
    }
    
?>



    