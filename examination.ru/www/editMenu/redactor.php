<?php
include('../layout/header.php');
require_once('../data/dbconn.php');
?>
<table class="users-table">
    <thead>
    <tr>
        <th>����� ����</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $items=array();
    $edit = mysqli_query($link, "select * from menuitems");
    while ($row=mysqli_fetch_array($edit))
        $items[]=$row;
    foreach ($items as $item)
    {?>
    <tr>
        <td><a><? echo $item[item]; ?></a></td>
        <td><a href="newORedit.php?edit=<? echo $item[id]; ?>"> ��������</a></td>
        <td><a href="deleteEdit.php?delete=<? echo $item[id]; ?>"> �������</a></td>
    </tr>
    <?}?>
    </tbody>
</table>
<a href="newORedit.php" style="ssilka">�������� ����� ����</a>
<? include('../layout/footer.php');?>