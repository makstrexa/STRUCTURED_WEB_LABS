<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>
<h3>Форма ввода данных</h3>
<form action="user.php" method="POST">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>


<?php
$name = "";
$age = "";
if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["age"])){
    $age = $_POST["age"];
}
if (!empty($name) && !empty($age)) {
    echo "Имя: $name <br> Возраст: $age <br>";
    echo date("Y-m-d H:i:s", strtotime('+2 hours'));
}



