<?php
include ('../layout/header.php');
require_once ('../data/dbconn.php');

    if(isset($_GET["edit"]))//редактирование
    {
        $entities = array();
    $item_id = $_GET["edit"];
    $current = mysqli_query($link,"select * from menuitems where id=$item_id");
        while ($row=mysqli_fetch_array($current))
            $entities[]=$row;
        foreach ($entities as $entity){
    ?>
        <form class="item-form"  method="POST" action="deleteEdit.php">
        <table class="item-table">
            <thead>
            <tr>
                <th>Название пункта меню</th>
                <th>Путь к файлу</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="item" id="item" value="<? echo $entity[item];?>"></td>
                <td><input type="text" name="link" id="link" value="<? echo $entity[link];?>"></td>
                <td><input type="submit" class="chous3" value="Изменить" ></td>
                <input type="hidden" name="itemid" value="<? echo $item_id;?>">
            </tr>
            </tbody>
        </table>
    </form>

    <?}}
    else{?>
    <div class="wrap">
    <form class="item-form"  method="POST" action="deleteEdit.php">
        <table class="item-table">
            <thead>
            <tr>
                <th>Название пункта меню</th>
                <th>Путь к файлу</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="item" id="item"></td>
                <td><input type="text" name="link" id="link"></td>
                <td><input type="submit" class="chous3" value="Добавить" ></td>
                <input type="hidden" name="new" value="new">
            </tr>
            </tbody>
            <!--        <label for="item">Название пункта меню</label>
                        <input type="text" name="item" id="item">
                        <label for="link">Путь к файлу</label>
                        <input type="text" name="link" id="link">
                        <label for="addpage" class="chous2">Выберите страницу</label>
                        <input type="file" class="my2" name="addpage" id="addpage">
                        <input type="submit" class="chous3" value="Добавить" >-->
        </table>
    </form>
</div>
<?}
 include ('../layout/footer.php');?>