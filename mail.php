<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>verstuurd</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 14-12-17
 * Time: 10:01
 */
$to = '25173@ma-web.nl';
$subject = $_POST['onderwerp'];
$message = $_POST['bericht'];
$header = 'From:' . $_POST['afzender'];

mail($to,$subject,$message,$header);

echo '<h1> de mail is verstuurd </h1>';
?>
</body>
</html>