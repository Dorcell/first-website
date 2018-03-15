<?php
require_once ('../data/dbconn.php');
$item = $_POST["item"];
$linka = $_POST["link"];
if(isset($_POST["itemid"]))//редактирование
{
    $item_id = $_POST["itemid"];
    $edit_item = mysqli_query($link,"update menuitems set item='$item',link='$linka' where id=$item_id");
    if($edit_item)
    {
        ?>
        <meta http-equiv="refresh" content="1;http://www.examination.ru/editMenu/redactor.php">
        <?
    }
}
if (isset($_GET["delete"]))//удаление
{
    $item_id = $_GET["delete"];
    $delete_item = mysqli_query($link, "delete from menuitems where id = $item_id");
    if($delete_item)
    {
        ?>
        <meta http-equiv="refresh" content="1;http://www.examination.ru/editMenu/redactor.php">
        <?
    }
}
if(isset($_POST["new"]))//новое
{
    $new_item = mysqli_query($link, "insert into menuitems(item,link) values('$item','$linka')");
    if($new_item)
    {
        ?>
        <meta http-equiv="refresh" content="1;http://www.examination.ru/editMenu/redactor.php">
        <?
    }
}