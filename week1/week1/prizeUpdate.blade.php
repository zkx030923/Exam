<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/4/15
 * Time: 8:54
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
<center>
    <form action="doPrizeUpdate" method="post">
        <table>
            <tr>
                <input type="hidden" name="id" value="<?php echo $res->id?>">
                <td>奖品名称：</td>
                <td><input type="text" name="prize_name" value="<?php echo $res->prize_name?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="修改"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
