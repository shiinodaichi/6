<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>管理ページ</title>

</head>

<body>

		<div class="wrap">
			<div class="inner">
				<h1>管理ページ</h1>
				<form action="search_ps_execute.php" method="get"> 
				<!-- 検索情報が欲しいからGET -->
					<p>記事ID: <input type="text" name="id" size="5"/>
					<input type="submit" value="検索" class="btn" /></p>
				</form>
				<ul class="list">
				    <ul class="list-group">
				    <li class="list-group-item"><a href="news_list.php">ニュース一覧を見る</a></li>
				    <li class="list-group-item"><a href="input.php">ニュースを追加する</a></li>
				    <li class="list-group-item"><a href="update.php">更新</a></li>
				    <li class="list-group-item"><a href="session_clear.php">ログオフ</a></li>
				</ul>
				<hr>
				<p><a href="session_clear.php"><button class="">ログオフ</button></a></p>
			</div>
		</div>
	
</body>
</html>