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
				<div class="tab_action">
					<a href="youtube_news.php"><img class="icon" src="icon/home.png">
					<span class="title">　Youtube　</span></a>
				</div>
				<div class="tab">
					<img class="icon" src="icon/home.png">
					<span class="title">　Tool　</span>
				</div>
			</div>
		</div>
		
		<!-- ============================== ウェブページ ============================== -->
		<div class="rss">
			<div class="container_youtube"><div class="you_link">
				<p><a href="https://www.google.co.jp/maps/place/%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%9D%B1%E4%BA%AC/@35.6684415,139.6007845,11z/data=!3m1!4b1!4m5!3m4!1s0x60188b857628235d:0xcdd8aef709a2b520!8m2!3d35.6803997!4d139.7690174" target="blank">GoogleMapへ</a>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207446.24819706788!2d139.60078451430465!3d35.66844146170516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2z5p2x5Lqs6YO95p2x5Lqs!5e0!3m2!1sja!2sjp!4v1643378286127!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="container_youtube"><div class="you_link">
				<p><a href="https://twitter.com/" target="blank"">Twitterへ</a></p>
			</div>
				<a href="https://twitter.com/ShibuyaHAL?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @ShibuyaHAL</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<a class="twitter-timeline" href="https://twitter.com/ShibuyaHAL?ref_src=twsrc%5Etfw">Tweets by ShibuyaHAL</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
	</div>
</body>
