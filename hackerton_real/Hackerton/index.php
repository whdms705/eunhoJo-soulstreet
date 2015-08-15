<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
</head>
<body>
	<form action="register_do.php" method="POST">
		이메일<br>
		<input type="email" name="user_email" placeholder="이메일을 입력해주세요"> <br>
		비밀번호<br>
		<input type="password" name="user_password" placeholder="비밀번호를 입력해주세요"><br><br>
		비밀번호 확인</br>
		<input type="password" name="user_password_confirm" placeholder="비밀번호를 다시 확인해주세요"><br><br>
		<input type="submit" value="저장">
	</form>

		<form action="login_do.php" method="POST">
		이메일<br>
		<input type="email" name="user_email" placeholder="이메일을 입력해주세요"> <br>
		비밀번호<br>
		<input type="password" name="user_password" placeholder="비밀번호를 입력해주세요"><br><br>
		<input type="submit" value="로그인"><br>
	</form>



</body>
</html>
