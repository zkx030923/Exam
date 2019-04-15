<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/4/15
 * Time: 9:04
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
    <script src="../js/app.js"></script>
    <title>Document</title>
</head>
<body>
<center>
    <button id="button">开始抽奖</button>
</center>
</body>
</html>
<script>

    $("#button").click(function () {

        $.ajax({
            url:'doPrize',
            success:function (msg) {
                var data=msg.prize_name;
                var id=msg.id;
                alert(data);
                $.ajax({
                    url:'prizeMenuAdd',
                    type:'post',
                    data:{id:id},
                    success:function (msg) {
                        console.log(msg);
                    }
                })
            }
        })


    })

</script>
