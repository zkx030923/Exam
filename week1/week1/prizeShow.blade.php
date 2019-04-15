<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/4/15
 * Time: 9:19
 */
?>

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="prizeAdd">新增</a>
<center>
    <h4>奖品列表展示</h4>
    <table border="1">
        <tr>
            <th><input type="checkbox"></th>
            <th>奖品名称</th>
            <th>操作</th>
        </tr>
        <?php foreach($data as $v){ ?>
        <tr>
            <td><input type="checkbox"></td>
            <td>{{$v->prize_name}}</td>
            <td>
                <a href="prizeDelete?id={{$v->id}}">删除</a>
                <a href="prizeUpdate?id={{$v->id}}">修改</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</center>
</body>
</html>

