<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

if (!isset($_SESSION["userid"])) {
  header("Location: ../index.php");
  exit();
}

if (isset($_SESSION['userid'])) {
echo 'ID:' .  h($_SESSION['userid']) . "<br>";
echo "<a href='/logout.php'>ログアウトはこちら</a>";
}

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>ようこそ！</title>
<link rel="stylesheet" href="../loginpage.css">
</head>
<body>
<hr>
<table>
<tr>
<td><span class="titlefont">Welcome!</span></td>
</tr>
</table>
<hr>
<span class="infofont">
ようこそ！<br>
以下のメニューから見たいコンテンツを選択し、ボタンをタップしてください。<br>
ログアウトするには、画面最上部の「ログアウトはこちら」をタップしてください。
<hr>
</span>
<table class="hometable">
<tr>
<td><span class="komidashifont">MAP&nbsp;</span></td>
<td><span class="infofont">
学校内の地図です。<br>
各教室の出し物などを確認することができます。
</span></td>
<td><button type="button" onclick="location.href='/map/index.php'" class="linkbutton">ページリンク</button></td>
</tr>
</table>
<hr>
&#169;2022 Komenezumi
</body>
</html>