<?php



$admin_login = array(
    'login' => 'ptah',
    'password' => 190385
);

$mysqli = new mysqli('*******', '******', '*******', '*****');

mysqli_query($mysqli, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
}


$sql = "SELECT newsWorldName, newsWorldData FROM newsWorld LIMIT 5";
if (!$result = $mysqli->query($sql)) {
    echo "Извините, возникла проблема в работе сайта.";
}


if ($result->num_rows === 0) {

    echo "Мы не смогли найти совпадение";
    exit;
}
while ($newsWorld = $result->fetch_assoc()) {
    $news[] = $newsWorld;
}

// ----------- connect  sql_advertisingLeft    -----------------------------------




$sql_advertisingLeft = "SELECT *  FROM advertisingLeft";
if (!$result1 = $mysqli->query($sql_advertisingLeft)) {
    echo "Извините, возникла проблема в работе сайта.";
}


if ($result1->num_rows === 0) {

    echo "Мы не смогли найти совпадение";
    exit;
}
while ($news_sql_advertisingLeft = $result1->fetch_assoc()) {
    $news1[] = $news_sql_advertisingLeft;
}

    if( $_POST && isset($_POST['login']) && isset($_POST['password'])  ){
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        if($login == $admin_login["login"] && $password == $admin_login["password"] ){

        }

    }
require_once('../html/ptah_admin_index.html');

$mysqli->close();