<?php
header('Content-type:text/html; charset=utf-8');

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=person', 'root', ''); // 创建一个连接对象
    $pdo->exec('set names utf8'); // 设置编码
    $sql = "INSERT INTO person (id, first_name, last_name, age)
    VALUES
    (1, '$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
    $pdo->exec($sql);
} catch (PDOException $e) {
    die('操作失败' . $e->getMessage());
}
//关闭连接
$pdo = null;
?>