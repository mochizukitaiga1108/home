<!DOCTYPE html>

<html>

<head>
	<title>Web</title>
	<link href="style.css" rel="stylesheet" type="text/css">
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
				<img src="icon/option.png" class="button" title="タイトル">
			</div>
			<div class="link">
				<a href="https://www.youtube.com/" target="_blank">
					<img class="icon" src="icon/youtube.png">
				</a>
				<a href="https://www.youtube.com/" target="_blank">YouTube</a>
				<img src="icon/option.png" class="button" title="タイトル">
			</div>
			<div class="link">
				<a href="https://www.nicovideo.jp/" target="_blank">
					<img class="icon" src="icon/niconico.png">
				</a>
				<a href="https://www.nicovideo.jp/" target="_blank">ニコニコ</a>
				<img src="icon/option.png" class="button" title="タイトル">
			</div>
			<div class="link">
				<a href="https://www.amazon.co.jp/" target="_blank">
					<img class="icon" src="icon/amazon.png">
				</a>
				<a href="https://www.amazon.co.jp/" target="_blank">Amazon</a>
				<img src="icon/option.png" class="button" title="タイトル">
			</div>
			<div class="link">
				<a href="https://twitter.com/" target="_blank">
					<img class="icon" src="icon/twitter.png">
				</a>
				<a href="https://twitter.com/" target="_blank">Twitter</a>
				<img src="icon/option.png" class="button" title="タイトル">
			</div>
		</div>
		
		<div class="main">
		<!-- ============================== サーチ ============================== -->
			<div class="search">
				<div class="form">
					<form method="get" action="http://www.google.co.jp/search" target="_blank">
						<img class="icon" src="icon/google.png">
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
						<img class="icon" src="icon/wiki.png">
						<input type="text" name="search">
						<input type="submit" name="fulltext" value="全文">
						<input type="submit" name="go" value="単語">
					</form>
				</div>
				<div class="space"></div>
				<div class="form">
					<form method="get" action="http://www.amazon.co.jp/gp/search" target="_blank">
						<img class="icon" src="icon/amazon_or.png">
						<input type="text" name="keywords">
						<input type="submit" name="submit" value="検索">
						<input type="hidden" name="tag" value="shihoriwish-22">
					</form>
				</div>
				<div class="space"></div>
				<div class="form">
					<form method="get" action="https://www.youtube.com/search" target="_blank">
						<img class="icon" src="icon/youtube_or.png">
						<input type="text" name="search_query">
						<input type="submit" name="btnY" value="検索">
					</form>
				</div>
			</div>
			<div class="tab_bar">
			<!-- ============================== タブ ============================== -->
				<div class="tab">
					<img class="icon" src="icon/home.png">
					<span class="title">Home</span>
					<img src="icon/option.png" class="button" title="タイトル">
				</div>
			</div>
		</div>
		
		<!-- ============================== ウェブページ ============================== -->
		<div class="rss">
			<?php 
				$data = array();
				$rss = simplexml_load_file('https://rss-weather.yahoo.co.jp/rss/days/4410.xml');
				foreach ($rss->channel->item as $item) {
					$x = array();
					$x['link'] = (string)$item->link;
					$x['title'] = (string)$item->title;
					$x['description'] = (string)$item->description;
					$x['pubDate'] = (string)$item->pubDate;
					$data[] = $x;
				}
			?>
			<div class="container">
				<h1>ＹＡＨＯＯ！天気・災害</h1>
				<div class="con_link">
					<p><a href="<?php echo $data[0]['link']; ?>" target="_blank"> <?php echo $data[0]['title']; ?></a></p>
				</div>
					<p><?php echo $data[0]['description']; ?></p>
					<p><?php echo $data[0]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[1]['link']; ?>" target="_blank"> <?php echo $data[1]['title']; ?></a></p>
				</div>
					<p><?php echo $data[1]['description']; ?></p>
					<p><?php echo $data[1]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[2]['link']; ?>" target="_blank"> <?php echo $data[2]['title']; ?></a></p>
				</div>
					<p><?php echo $data[2]['description']; ?></p>
					<p><?php echo $data[2]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[3]['link']; ?>" target="_blank"> <?php echo $data[3]['title']; ?></a></p>
				</div>
					<p><?php echo $data[3]['description']; ?></p>
					<p><?php echo $data[3]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[4]['link']; ?>" target="_blank"> <?php echo $data[4]['title']; ?></a></p>
				</div>
					<p><?php echo $data[4]['description']; ?></p>
					<p><?php echo $data[4]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[5]['link']; ?>" target="_blank"> <?php echo $data[5]['title']; ?></a></p>
				</div>
					<p><?php echo $data[5]['description']; ?></p>
					<p><?php echo $data[5]['pubDate']; ?></p>
			</div>
			<?php 
				$data = array();
				$rss = simplexml_load_file('https://news.yahoo.co.jp/rss/topics/top-picks.xml');
				foreach ($rss->channel->item as $item) {
					$x = array();
					$x['link'] = (string)$item->link;
					$x['title'] = (string)$item->title;
					$x['description'] = (string)$item->description;
					$x['pubDate'] = (string)$item->pubDate;
					$data[] = $x;
				}
			?>
			<div class="container">
				<h1>ＹＡＨＯＯ！ニュース</h1>
				<div class="con_link">
					<p><a href="<?php echo $data[0]['link']; ?>" target="_blank"> <?php echo $data[0]['title']; ?></a></p>
				</div>
					<p><?php echo $data[0]['description']; ?></p>
					<p><?php echo $data[0]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[1]['link']; ?>" target="_blank"> <?php echo $data[1]['title']; ?></a></p>
				</div>
					<p><?php echo $data[1]['description']; ?></p>
					<p><?php echo $data[1]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[2]['link']; ?>" target="_blank"> <?php echo $data[2]['title']; ?></a></p>
				</div>
					<p><?php echo $data[2]['description']; ?></p>
					<p><?php echo $data[2]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[3]['link']; ?>" target="_blank"> <?php echo $data[3]['title']; ?></a></p>
				</div>
					<p><?php echo $data[3]['description']; ?></p>
					<p><?php echo $data[3]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[4]['link']; ?>" target="_blank"> <?php echo $data[4]['title']; ?></a></p>
				</div>
					<p><?php echo $data[4]['description']; ?></p>
					<p><?php echo $data[4]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[5]['link']; ?>" target="_blank"> <?php echo $data[5]['title']; ?></a></p>
				</div>
					<p><?php echo $data[5]['description']; ?></p>
					<p><?php echo $data[5]['pubDate']; ?></p>
			</div>
		</div>
		<div class="rss">
			<?php 
				$data = array();
				$rss = simplexml_load_file('https://www.lifehacker.jp/feed/index.xml');
				foreach ($rss->channel->item as $item) {
					$x = array();
					$x['link'] = (string)$item->link;
					$x['title'] = (string)$item->title;
					$x['description'] = (string)$item->description;
					$x['pubDate'] = (string)$item->pubDate;
					$data[] = $x;
				}
			?>
			<div class="container">
				<h1>ＬＩＦＥＨＡＣＫＥＲ</h1>
				<div class="con_link">
					<p><a href="<?php echo $data[0]['link']; ?>" target="_blank"> <?php echo $data[0]['title']; ?></a></p>
				</div>
					<p><?php echo $data[0]['description']; ?></p>
					<p><?php echo $data[0]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[1]['link']; ?>" target="_blank"> <?php echo $data[1]['title']; ?></a></p>
				</div>
					<p><?php echo $data[1]['description']; ?></p>
					<p><?php echo $data[1]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[2]['link']; ?>" target="_blank"> <?php echo $data[2]['title']; ?></a></p>
				</div>
					<p><?php echo $data[2]['description']; ?></p>
					<p><?php echo $data[2]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[3]['link']; ?>" target="_blank"> <?php echo $data[3]['title']; ?></a></p>
				</div>
					<p><?php echo $data[3]['description']; ?></p>
					<p><?php echo $data[3]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[4]['link']; ?>" target="_blank"> <?php echo $data[4]['title']; ?></a></p>
				</div>
					<p><?php echo $data[4]['description']; ?></p>
					<p><?php echo $data[4]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[5]['link']; ?>" target="_blank"> <?php echo $data[5]['title']; ?></a></p>
				</div>
					<p><?php echo $data[5]['description']; ?></p>
					<p><?php echo $data[5]['pubDate']; ?></p>
			</div>
			<?php 
				$data = array();
				$rss = simplexml_load_file('https://www.gizmodo.jp/index.xml');
				foreach ($rss->channel->item as $item) {
					$x = array();
					$x['link'] = (string)$item->link;
					$x['title'] = (string)$item->title;
					$x['description'] = (string)$item->description;
					$x['pubDate'] = (string)$item->pubDate;
					$data[] = $x;
				}
			?>
			<div class="container">
				<h1>ＧＩＺＭＯＤＯ</h1>
				<div class="con_link">
					<p><a href="<?php echo $data[0]['link']; ?>" target="_blank"> <?php echo $data[0]['title']; ?></a></p>
				</div>
					<p><?php echo $data[0]['description']; ?></p>
					<p><?php echo $data[0]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[1]['link']; ?>" target="_blank"> <?php echo $data[1]['title']; ?></a></p>
				</div>
					<p><?php echo $data[1]['description']; ?></p>
					<p><?php echo $data[1]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[2]['link']; ?>" target="_blank"> <?php echo $data[2]['title']; ?></a></p>
				</div>
					<p><?php echo $data[2]['description']; ?></p>
					<p><?php echo $data[2]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[3]['link']; ?>" target="_blank"> <?php echo $data[3]['title']; ?></a></p>
				</div>
					<p><?php echo $data[3]['description']; ?></p>
					<p><?php echo $data[3]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[4]['link']; ?>" target="_blank"> <?php echo $data[4]['title']; ?></a></p>
				</div>
					<p><?php echo $data[4]['description']; ?></p>
					<p><?php echo $data[4]['pubDate']; ?></p>
				<div class="con_link">
					<p><a href="<?php echo $data[5]['link']; ?>" target="_blank"> <?php echo $data[5]['title']; ?></a></p>
				</div>
					<p><?php echo $data[5]['description']; ?></p>
					<p><?php echo $data[5]['pubDate']; ?></p>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="rss.js"></script>
	
</body>
