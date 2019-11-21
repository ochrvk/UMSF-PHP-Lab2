<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Выбор языка</title>
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
        <header class="ui container">
            <h1>У вас не указан язык</h1>
        </header>
        <br>
        <form action="language.php" method="post" class="ui container">
            <h3 class = "ui small header">Выбирите язык: 
                <div class="ui action input">
                    <select class="ui compact selection dropdown" name = 'lang'>
                        <option  value = "ru">Русский</option>
                        <option  value = "en">Английский</option>
                        <option  value = "ua">Украинский</option>
                        <option  value = "it">Итальянский</option>
                    </select>
                </div>
            </h3>
            <button class = " ui button" type="submit" name = "button">Вперёд</button>
        </form>
        <form action="index.php" method="post" class="ui container">
            <br><br>
            <button class = " ui button" type="submit" name = "button">Выход</button>
        </form>
    </body>
</html>
