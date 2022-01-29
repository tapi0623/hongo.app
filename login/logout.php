<?php
session_start();
$output = '';
if (isset($_SESSION["userid"])) {
  echo 'ログアウトしました。<br/>
再度ログインする場合は<a href="."index.php".">ここをタップ</a>して<br/>
ログイン画面に戻り、再度IDと認証番号を入力してください。';
} else {
  header('Location: index.php');
}
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
@session_destroy();

echo $output;
