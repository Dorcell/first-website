<?php
include('./layout/header.php');
require_once('data/dbconn.php');
$entities2 = array();
$log = mysqli_query($link,"SELECT * FROM textfiles order by id desc") or die(mysqli_error($link));
while ($row = mysqli_fetch_assoc($log))
    $entities2[] = $row;
?>
<table class="entities-table">
    <thead>
    <tr>
        <th>Номер файла</th>
        <th>Текст</th>
    </tr>
    </thead>
    <tbody>
<?foreach ($entities2 as $entity)
{?>
    <tr>
        <td><? echo $entity[id]?></td>
        <td><? echo $entity[file]?></td>
    </tr>
<?}?>
    </tbody>
</table>
<form class="mail-form" enctype="multipart/form-data" method="POST" action="./filesAdd/text.php">
    <label for="addtxt" class="chous2">Выберите файл</label>
    <input type="file" class="my2" name="addtxt" id="addtxt">
    <input type="submit" class="chous2" value="Загрузить" >
</form>
<? include('./layout/footer.php'); ?>