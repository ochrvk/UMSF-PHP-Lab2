<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
        <header class="ui container">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Авторизация</h1>
        </header>
        <br>
        <form action="action.php" method="post" class="ui container">
            <div>
                <h3 class = "ui small header">Логин: &emsp;<div class="ui small input"><input type = "text" name="login"></div></h3>
                <h3 class = "ui small header">Пароль: &nbsp;<div class="ui small input"><input type = "password" name="password"></div></h3>
            </div>
            <br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button class = " ui button" type="submit" name = "button">Войти</button>
        </form>       
    </body>
</html>


