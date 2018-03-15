<?php
require_once('../data/dbconn.php');
if(!empty($_FILES['addtxt']['name'])) {
    if ($_FILES['addtxt']['error'] == 0) {
        if ($_FILES['addtxt']['type'] == 'text/plain') {
            $image = file_get_contents($_FILES['addtxt']['tmp_name']);
            // Экранируем специальные символы в содержимом файла
            $image = mysqli_escape_string($link,$image);
            // Формируем запрос на добавление файла в базу данных
            $query = "INSERT INTO textfiles VALUES(NULL,'$image')";
            mysqli_query($link,$query);
            echo "Файл добавлен"; ?>
            <meta http-equiv="refresh" content="1; http://www.examination.ru/"><?
        } else {
            echo "Недопустимый тип файла!"; ?>
            <meta http-equiv="refresh" content="1; http://www.examination.ru/"><?
        }
    }
}