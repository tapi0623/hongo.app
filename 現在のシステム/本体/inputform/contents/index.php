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
echo "<a href='logout.php'>ログアウトはこちら(認証が必要です)</a>";
}

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>入力フォーム</title>
<link rel="stylesheet" href="../loginpage.css">
</head>
<body>
<hr>
<img src="../logo.png" height="60">
<hr>
<span class="infofont">
各企画の担当の方は、以下のフォームに来場された方のIDを入力し、「送信」ボタンを押してください。
<hr>
</span>
<form action="input.php" method="post">
<table>
<tr>
<td>ID</td>
<td><input type="number" name="userid"></td>
<td class="loginbuttontd"><button type="submit">送信</button></td>
</tr>
</table>
</form>
<hr>
&#169;2022 HECTD
</body>
</html>