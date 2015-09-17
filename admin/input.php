<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<body>
<form action="input_execute.php" method="post">
	<dl>
		<dt>タイトル：</dt>
		<dd><input type="text" name="news_title" size="30" value="" /></dd>
		<dt>詳細：</dt>
		<dd><textarea name="news_detail" rows="15" cols="100"></textarea></dd>
		<dt>表示：</dt>
		<dd>
			<select name="show_flg">
				<option>ON</option>
				<option>OFF</option>
			</select>
		</dd>
		<dt>執筆者：</dt>
		<dd><input type="text" name="author" value="" /></dd>
	</dl>
	<input class="btn" type="submit" />
</form>

<ul>
<li><a href="insert.php">INSERT</a></li>
<li><a href="insert_ps.php">INSERT(Prepared Statement方式)</a></li>
</ul>
</body>
</html>