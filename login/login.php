<?php

require_once('config.php');

session_start();
//IDが整数かどうか
if (!filter_var($_POST['userid'], FILTER_VALIDATE_INT)) {
  echo '入力されたIDまたは認証番号が間違っています。<br/>
ログイン画面に戻り、正しいIDと認証番号を入力してください。<br/>
<a href="."index.php".">ここをタップ</a>してログイン画面に戻ります。';
  return false;
}

//passが整数かどうか
if (!filter_var($_POST['pass'], FILTER_VALIDATE_INT)) {
  echo '入力されたIDまたは認証番号が間違っています。<br/>
ログイン画面に戻り、正しいIDと認証番号を入力してください。<br/>
<a href="."index.php".">ここをタップ</a>してログイン画面に戻ります。';
  return false;
}

try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $stmt = $pdo->prepare('select * from users where userid = ?');
  $stmt->execute([$_POST['userid']]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//useridがDB内に存在しているか確認
if(!isset($row['userid'])) {
  echo '入力されたIDまたは認証番号が間違っています。<br/>
ログイン画面に戻り、正しいIDと認証番号を入力してください。<br/>
<a href="."index.php".">ここをタップ</a>してログイン画面に戻ります。';
  return false;
}

if($_POST['pass'] == $row['pass']){
  session_regenerate_id(true);
  $_SESSION['userid'] = $row['userid'];
  header('Location: contents/index.php');
} else {
  echo '入力されたIDまたは認証番号が間違っています。<br/>
ログイン画面に戻り、正しいIDと認証番号を入力してください。<br/>
<a href="."index.php".">ここをタップ</a>してログイン画面に戻ります。';
  return false;
}
