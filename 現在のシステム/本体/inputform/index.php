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
<font color="red">※このページは一般の方向けではありません※</font><br>
各教室の担当者の方は事前に本郷祭実行委員会から配布されたIDと認証番号を入力し、<br>
「ログイン」ボタンを押してシステムにログインし、<br>
来場された方のQRコードを読み取って入場を記録してください。<br>
<hr>
</span>
<form action="login.php" method="post">
<table>
<tr>
<td>
<table>
<tr>
<td>ID</td>
<td><input type="text" name="classid" class="loginform"></td>
</tr>
<tr>
<td>認証番号</td>
<td><input type="number" name="pass" class="loginform"></td>
</tr>
</table>
</td>
<td class="loginbuttontd"><button type="submit" class="submitbutton">ログイン</button></td>
</tr>
</table>
</form>
<hr>
&#169;2022 HECTD
</body>
</html>