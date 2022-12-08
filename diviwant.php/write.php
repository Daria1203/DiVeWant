<?php 
    if(isset($_POST2['Write'])) { //выполняем нижеследующий код, только если нажата кнопка
        $query2 = ("SELECT * FROM `users2`  WHERE `suggestions`='".$_POST2['suggestions']."'"); //отправляем запрос на выборку всего содержимого
            } else {
                if (empty($_POST2['suggestions'])) { //если переменная text пуста  
                    echo"<center><h1>Вы не ввели текст</h1></center>"; // выводим сообщение об ошибке 
            } else {
                if (isset($_POST2['suggestions'])) {
                    echo 
                    "<center>
                    <h1>Спасибо что вы вместе с DI VE WANT !</h1>
                    </center>";
            }
        }
        }
    ?>