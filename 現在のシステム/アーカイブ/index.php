<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

if (isset($_SESSION['EMAIL'])) {
  echo 'ようこそ' .  h($_SESSION['userid']) . "さん<br>";
  echo "<a href='/logout.php'>ログアウトはこちら。</a>";
  exit;
}

 ?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Login</title>
 </head>
 <body>
   <h1>ログイン</h1>
   <form  action="login.php" method="post">
     <label for="userid">ID</label>
     <input type="number" name="userid">
     <label for="number">認証番号</label>
     <input type="password" name="password">
     <button type="submit">Sign In!</button>
   </form>
 </body>
</html>