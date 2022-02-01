<?php
require_once('config.php');
try{
    //DBに接続する
    $pdo = new PDO(DSN, DB_USER, DB_PASS);

    //SQL文を実行して、結果を$stmtに代入する。
    $stmt = $pdo->prepare(" SELECT * FROM id  submit_name = '%" . $_POST["search_name"] . "%' "); 

    //実行する
    $stmt->execute();
    echo "OK";
    echo "<br>";
} catch(PDOException $e){
    echo "失敗:" . $e->getMessage() . "\n";
    exit();
}
?>