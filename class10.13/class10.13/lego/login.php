<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>系统登陆</title>
	</head>
	<body>
		<form action="login_do.php" method="post">
			<table border="1">
				<tr>
					<td colspan="2" align="center">系统登陆</td>
				</tr>
				<tr>
					<td>用户名：</td>
					<td><input type="text" name="txt_username" /></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="txt_pwd" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="登录" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
