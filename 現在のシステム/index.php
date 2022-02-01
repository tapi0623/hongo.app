<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

if (isset($_SESSION['id'])) {
header('Location: passlogin.php');
  exit;
}

 ?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>ログイン</title>
<link rel="stylesheet" href="loginpage.css">
</head>
<body>
<img src="logo.png" height="60">
<hr>
<span class="infofont">
ようこそ！<br>
入口で配布されたリストバンドに記載のIDを入力し、<br>
「次へ」ボタンを押して次の手順に進んでください。
<hr>
</span>
<form action="searchid.php" method="post">
<table>
<tr>
<td>
<table>
<tr>
<td>ID</td>
<td><input type="number" name="inputid" class="loginform"></td>
</tr>
</table>
</td>
<td class="loginbuttontd"><button type="submit" class="submitbutton">ログイン</button></td>
</tr>
</table>
</form>
</body>
</html>