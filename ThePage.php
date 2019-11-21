<?php
    session_start();


    if ($_SESSION['auth'] == true)
    {
        switch ($_SESSION['lang'])
        {
            case 'ru':
                echo '<br>'.'<h3 class = "ui small header">'.'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Привет,&emsp; '.$_SESSION['login'].'</p>';
                break;
            case 'en':
                echo '<h3 class = "ui small header">'.'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Hello,&emsp; '.$_SESSION['login'].'</p>';
                break;
            case 'ua':
                echo '<h3 class = "ui small header">'.'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Привіт,&emsp; '.$_SESSION['login'].'</p>';
                break;
            case 'it':
                echo '<h3 class = "ui small header">'.'&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Ciao,&emsp; '.$_SESSION['login'].'</p>';
                break;
            default :
                header("Location: default.php"); exit;
        }
    }
    else {header("Location: index.php"); exit;}    
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
        <br>
        <form action="index.php" method="post" class="ui container">
            <button class = " ui button" type="submit" name = "button">Выйти</button>
        </form>       
    </body>
</html>


