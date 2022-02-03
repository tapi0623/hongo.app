<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

if (!isset($_SESSION["classid"])) {
  header("Location: ../index.php");
  exit();
}

if (isset($_SESSION['classid'])) {
}

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>認証</title>
<link rel="stylesheet" href="../loginpage.css">
</head>
<body>
<img src="../logo.png" height="60">
<hr>
<span class="infofont">
<font color="red">※ログアウトするには認証番号を入力する必要があります。※</font><br>
もし誤ってこのページを開いてしまった場合、前のページに戻ってください。<br>
誤操作ではなく、ログアウトする場合には、以下のフォームに本郷祭実行委員会から配布された認証番号を入力し、<br>
「ログアウト」ボタンを押してください。もし入力された認証番号が誤っていた場合、来場者登録ページに戻ります。<br>
<hr>
</span>
<form action="logoutdb.php" method="post">
<table>
<tr>
<td>認証番号</td>
<td><input type="number" name="pass"></td>
<td class="loginbuttontd"><button type="submit">ログアウト</button></td>
</tr>
</table>
</form>
<hr>
&#169;2022 HECTD
</body>
</html>