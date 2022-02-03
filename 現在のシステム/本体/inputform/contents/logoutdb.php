<?php
session_start();
require_once('../config.php');
$classid = $_SESSION['classid'];

try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $stmt = $pdo->prepare('select * from classid where classid = ?');
  $stmt->execute([$_SESSION['classid']]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//useridがDB内に存在しているか確認
if(!isset($row['classid'])) {
  echo '入力された認証番号が間違っています。(IDエラー)<br/>
ログイン画面に戻り、正しいIDと認証番号を入力してください。<br/>
<a href="."index.php".">ここをタップ</a>してログイン画面に戻ります。';
  return false;
}

if($_POST['pass'] == $row['pass']){
session_regenerate_id(true);
header('Location: logoutsession.php');
exit();
} else {
  echo '入力された認証番号が間違っています。(ELSEエラー)<br/>
ログイン画面に戻り、正しいIDと認証番号を入力してください。<br/>
<a href="."index.php".">ここをタップ</a>してログイン画面に戻ります。';
  return false;
}
?>