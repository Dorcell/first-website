<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Examination</title>
    <link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body class="body">
<?
$localhost = "localhost";
$db = "exam";
$user = "odmen";
$password = "odmen";
$link = mysqli_connect($localhost, $user, $password) or
trigger_error(mysqli_error($link),E_USER_ERROR);
mysqli_query($link, "SET NAMES cp1251;") or die(mysqli_error($link));
mysqli_query($link, "SET CHARACTER SET cp1251;") or die(mysqli_error($link));
mysqli_select_db($link,$db);

$entities = array();
$entities2 = array();
$pic_num = mysqli_query($link, "select count(id) as allpics from pictures");
$row_num = mysqli_fetch_assoc($pic_num);
$total = $row_num['allpics']; //количество картинок в базе
mysqli_free_result($pic_num);
$logo_id = rand(1,$total);
$query = "select name from pictures where id=$logo_id";
$res = mysqli_query($link,$query);
while ($image = mysqli_fetch_array($res))
    $entities[]=$image;
foreach ($entities as $img)
?>
<div class="header">
    <div class="logo">
        <img src="../filesAdd/pictures/<? echo $img[name];?>" alt="" width="1150" height="400"/>
    </div><?php
    $image_dir_path = $_SERVER['DOCUMENT_ROOT']."/filesAdd/pictures/";
    $image_dir_id=opendir($image_dir_path);
    $array_files=null;
    $i=0;
    while(($path_to_file=readdir($image_dir_id))!=false)
    {
        if(($path_to_file!=".")&&($path_to_file!=".."))
        {
            $array_files[$i]=basename($path_to_file);
            $i++;
        }
    }
    closedir($image_dir_id);
    $array_files_count=count($array_files);
    ?>
        <form class="header-form" enctype="multipart/form-data" method="POST" action="../filesAdd/picture.php">
            <label for="logoset" class="chous">Выберите файл</label>
            <input type="file" class="my" name="logoset" id="logoset" multiple="multiple""/>
            <input type="submit" class="chous" value="Загрузить" >
            <input type="hidden" name="MAX_FILE_SIZE" value="6553600"/>
        </form>
        <ul class="top-menu">
            <? $query2 = "select * from menuitems";
            $res2 = mysqli_query($link,$query2);
            if(mysqli_num_rows($res2)>0)
            {
            while ($row = mysqli_fetch_array($res2))
            $entities2[]=$row;
            foreach ($entities2 as $menu){?>
            <li> <a href="<? echo $menu[link]; ?>"> <? echo $menu[item]; ?>  </a> </li>
            <?}}?>
        </ul>

</div>
<div class="content">
    <div class="wrap">


