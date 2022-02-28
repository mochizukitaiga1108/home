<!DOCTYPE html>

<html>

<head>
	<title>Web</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<div class="container">
	
		<div class="link_bar">
		<!-- ============================== リンクバー ============================== -->
			<div class="link">
				<a href="https://mail.google.com/" target="_blank">
					<img class="icon" src="icon/gmail.png">
				</a>
				<a href="https://mail.google.com/" target="_blank">Gmail</a>
			</div>
			<div class="link">
				<a href="https://www.youtube.com/" target="_blank">
					<img class="icon" src="icon/youtube.png">
				</a>
				<a href="https://www.youtube.com/" target="_blank">YouTube</a>
			</div>
			<div class="link">
				<a href="https://www.nicovideo.jp/" target="_blank">
					<img class="icon" src="icon/niconico.png">
				</a>
				<a href="https://www.nicovideo.jp/" target="_blank">NicoNico</a>
			</div>
			<div class="link">
				<a href="https://www.amazon.co.jp/" target="_blank">
					<img class="icon" src="icon/amazon.png">
				</a>
				<a href="https://www.amazon.co.jp/" target="_blank">Amazon</a>
			</div>
			<div class="link">
				<a href="https://twitter.com/" target="_blank">
					<img class="icon" src="icon/twitter.png">
				</a>
				<a href="https://twitter.com/" target="_blank">Twitter</a>
			</div>
		</div>
		
		<div class="main">
		<!-- ============================== サーチ ============================== -->
			<div class="search">
				<div class="form">
					<form method="get" action="http://www.google.co.jp/search" target="_blank">
						<a href="https://www.google.co.jp/" target="_blank"><img class="icon" src="icon/google.png"></a>
						<input type="text" name="q" maxlength="255">
						<input type="hidden" name="ie" value="UTF-8">
						<input type="hidden" name="oe" value="UTF-8">
						<input type="hidden" name="h1" value="ja">
						<input type="submit" name="btnG" value="検索">
					</form>
				</div>
				<div class="space"></div>
				<div class="form">
					<form action="http://ja.wikipedia.org/w/index.php" target="_blank">
						<a href="https://ja.wikipedia.org/" target="_blank"><img class="icon" src="icon/wiki.png"></a>
						<input type="text" name="search">
						<input type="submit" name="fulltext" value="全文">
						<input type="submit" name="go" value="単語">
					</form>
				</div>
				<div class="space"></div>
				<div class="form">
					<form method="get" action="http://www.amazon.co.jp/gp/search" target="_blank">
						<a href="https://www.amazon.co.jp/" target="_blank"><img class="icon" src="icon/amazon_or.png"></a>
						<input type="text" name="keywords">
						<input type="submit" name="submit" value="検索">
						<input type="hidden" name="tag" value="shihoriwish-22">
					</form>
				</div>
				<div class="space"></div>
				<div class="form">
					<form method="get" action="https://www.youtube.com/search" target="_blank">
						<a href="https://www.youtube.com/" target="_blank"><img class="icon" src="icon/youtube_or.png"></a>
						<input type="text" name="search_query">
						<input type="submit" name="btnY" value="検索">
					</form>
				</div>
			</div>
			<div class="tab_bar">
			<!-- ============================== タブ ============================== -->
				<div class="tab_action">
					<a href="index.php"><img class="icon" src="icon/news.png">
					<span class="title">　News　</span></a>
				</div>
				<div class="tab">
					<img class="icon" src="icon/douga.png">
					<span class="title">　Youtube　</span>
				</div>
				<div class="tab_action">
					<a href="tool.php"><img class="icon" src="icon/tool.png">
					<span class="title">　Tool　</span></a>
				</div>
			</div>
		</div>
		
		<!-- ============================== ウェブページ ============================== -->
		<div class="rss">
			<div class="container_youtube"><div class="you_link">
				<p><a href="youtube_news.php">ニュースチャンネルへ</a>
			</div></div>
			<div class="container_youtube"><div class="you_link">
				<p><a href="youtube_play.php">娯楽チャンネルへ</a></p>
			</div></div>
		</div>
		<div class="rss">
			<div class="container_youtube">
				<div class="you_link"><a href="https://www.youtube.com/c/HALChannel" target="_blank">
					<image class="image_flex" src="icon/tuber-01.png" id="game"><h1>　渋谷ハル</h1>
				</a></div>
				<?php
					$url = "https://www.youtube.com/feeds/videos.xml?channel_id=UChLfthKoUV502J7gU9STArg";
					$rss = file_get_contents($url);
					$rss = preg_replace("/<([^>]+?):(.+?)>/", "<$1_$2>", $rss);
					$rss = simplexml_load_string($rss,'SimpleXMLElement');
					echo '<ul style="list-style-type: none">';
					foreach($rss->entry as $value) {
						echo '<li>';
						echo '<div class="youtube-box"><iframe src="https://www.youtube.com/embed/' . htmlspecialchars($value->yt_videoId) . '" frameborder="0"></iframe></div>';
						echo '<div class="you_link"><p><a href="https://www.youtube.com/watch?v=' . htmlspecialchars($value->yt_videoId) . '" target="_blank">' . htmlspecialchars($value->title) . '</a></p></div>';
						echo '</li>';
					}
					echo '</ul>';
				?>
			</div>
			<div class="container_youtube">
				<div class="you_link"><a href="https://www.youtube.com/c/PIKASONICmusic" target="_blank">
					<image class="image_flex" src="icon/tuber-02.png"><h1>　PIKASONIC</h1>
				</a></div>
				<?php
					$url = "https://www.youtube.com/feeds/videos.xml?channel_id=UC2ne9XqtBWKJKLfIAKtmjAg";
					$rss = file_get_contents($url);
					$rss = preg_replace("/<([^>]+?):(.+?)>/", "<$1_$2>", $rss);
					$rss = simplexml_load_string($rss,'SimpleXMLElement');
					echo '<ul style="list-style-type: none">';
					foreach($rss->entry as $value) {
						echo '<li>';
						echo '<div class="youtube-box"><iframe src="https://www.youtube.com/embed/' . htmlspecialchars($value->yt_videoId) . '" frameborder="0"></iframe></div>';
						echo '<div class="you_link"><p><a href="https://www.youtube.com/watch?v=' . htmlspecialchars($value->yt_videoId) . '" target="_blank">' . htmlspecialchars($value->title) . '</a></p></div>';
						echo '</li>';
					}
					echo '</ul>';
				?>
			</div>
			<div class="container_youtube">
				<div class="you_link"><a href="https://www.youtube.com/c/TheFatRat" target="_blank">
					<image class="image_flex" src="icon/tuber-03.png"><h1>　TheFatRat</h1>
				</a></div>
				<?php
					$url = "https://www.youtube.com/feeds/videos.xml?channel_id=UCa_UMppcMsHIzb5LDx1u9zQ";
					$rss = file_get_contents($url);
					$rss = preg_replace("/<([^>]+?):(.+?)>/", "<$1_$2>", $rss);
					$rss = simplexml_load_string($rss,'SimpleXMLElement');
					echo '<ul style="list-style-type: none">';
					foreach($rss->entry as $value) {
						echo '<li>';
						echo '<div class="youtube-box"><iframe src="https://www.youtube.com/embed/' . htmlspecialchars($value->yt_videoId) . '" frameborder="0"></iframe></div>';
						echo '<div class="you_link"><p><a href="https://www.youtube.com/watch?v=' . htmlspecialchars($value->yt_videoId) . '" target="_blank">' . htmlspecialchars($value->title) . '</a></p></div>';
						echo '</li>';
					}
					echo '</ul>';
				?>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="rss.js"></script>
	
</body>