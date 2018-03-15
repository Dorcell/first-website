<?php
require_once('../data/dbconn.php');

    $types=array('image/gif', 'image/png', 'image/jpeg');
    if (isset($_POST["MAX_FILE_SIZE"]) && (in_array($_FILES['logoset']['type'], $types))) {
        $tmp_file_name = $_FILES["logoset"]["tmp_name"];
        $dest_file_name = $_SERVER['DOCUMENT_ROOT'] . "/filesAdd/pictures/" . $_FILES["logoset"]["name"];
        $destination = $_SERVER['DOCUMENT_ROOT'] . "/filesAdd/pictures/";
        $filename = $_FILES["logoset"]["name"];
        mysqli_query($link,"insert into pictures(link,name) values('$destination','$filename')");
        if (move_uploaded_file($tmp_file_name, $dest_file_name)) {
            ?>
            <meta http-equiv="refresh" content="1;http://www.examination.ru">
            <?
        } else {
            print_r(error_get_last());
        }
    } else {
        echo "Невозможно загрузить файл";
        ?>
        <meta http-equiv="refresh" content="1;http://www.examination.ru"><?
    }

?>