<?php
session_start();
require_once('config.php');

try {
  $PDO = new PDO(DSN, DB_USER, DB_PASS);

    $today = new DateTime();
    $time = $today->format('Y-m-d H:i:s');
    $location = 'login';
    $userid = $_SESSION['userid'];

    $sql = "INSERT INTO action (time, location, userid) VALUES (:time, :location, :userid)";
    $stmt = $PDO->prepare($sql);
    $params = array(':time' => $time, ':location' => $location, ':userid' => $userid);
    $stmt->execute($params);
    header('Location:contents/index.php');
exit();
  } catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
  }

?>