<div class="container_youtube">
<div class="you_link"><a href="https://www.youtube.com/user/ANNnewsCH" target="_blank">
	<h1>　ANNNewsCH</h1>
</a></div>
<?php
	$url = "https://www.youtube.com/feeds/videos.xml?channel_id=UCGCZAYq5Xxojl_tSXcVJhiQ";
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