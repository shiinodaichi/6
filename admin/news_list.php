<?php
$news_id = $_GET["news_id"];

// 表示用の変数を定義
$view_date = "";
$view_title = "";
$view_detail = "";
// DB接続
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT news_title,  news_detail, DATE_FORMAT(create_date , '%Y.%m.%d') AS create_date FROM news WHERE news_id = :news_id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':news_id', $news_id, PDO::PARAM_INT);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
$pdo = null;

foreach($results as $row){
	$view_date = $row["create_date"];
	$view_title = $row["news_title"];
	$view_detail = $row["news_detail"];
}
?>


    <section class="news contents-box">
        <h2 class="section-title text-center">
			<div class="section-title__yellow">News一覧</div></h2>
            <span class="section-title-ja text-center"></span>
        
        <article class="news-detail">
            <dl class="clearfix">
				<dt class="news-date"><?php echo $view_date ?></dt>
                <dd class="news-title"><?php echo $view_title ?></dd>
                <dd><?php echo $view_detail ?></dd>
            </dl>
            
        </article>
    </section>

<ul>
<li><a href="index.php">管理画面</a></li>
<li><a href="input.php">登録</a></li>
<li><a href="update.php">更新</a></li>

