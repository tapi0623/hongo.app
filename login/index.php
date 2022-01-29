<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

if (isset($_SESSION['userid'])) {
header('Location: contents/index.php');
  exit;
}

 ?>

<!DOCTYPE html>
<html>
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
			ようこそ!<br>
			IDと認証番号を入力し、<br>
			「ログイン」ボタンを押してください。
			<hr>
		</span>
		<form action="login.php" method="post">
			<table>
				<tr>
					<td>
						<table>
							<tr>
								<td>ID</td>
								<td><input type="number" name="userid" class="loginform"></td>
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
		&#169;2022 Komenezumi
	</body>
</html>