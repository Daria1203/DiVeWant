
<?php

if(isset($_POST['leave your feedback'])) { //выполняем нижеследующий код, только если нажата кнопка
    $query = ("SELECT * FROM `users`  WHERE `reviews`='".$_POST['reviews']."'"); //отправляем запрос на выборку всего содержимого
        } else {
            if (empty($_POST['reviews'])) { //если переменная text пуста  
            echo"<center><h1>Вы не ввели текст</h1></center>"; // выводим сообщение об ошибке 
        } else {
            if (isset($_POST ['reviews'])) {
                echo 
                "<center>
                <h1>Спасибо что вы вместе с DI VE WANT !</h1>
                <h2>Ваши отзывы делают нас лучше !</h2>
                </center>";
        }
    }
    }
?>


