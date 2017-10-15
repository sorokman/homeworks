<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MENU</title>
    <link rel="stylesheet" href="test.css" type="text/css">
</head>
<body>
<div class="main_header">
    <h1>Шапка</h1>
</div>

<?php
$menu = array(
    'Головна' => '/',
    'Про нас' => '/про нас',
    'Каталог' => '/каталог',
    'Контакти' => '/контакти',
    'Кошик' => '/кошик',
    'Вхід' => '/вхід',
    'Реєстрація' => '/реєстрація'
);

foreach ($menu as $name => $link) : ?>
    <a class="menu_naw" href='<?=$link?>'><?=$name?></a>
<?php endforeach; ?>

</body>
</html>