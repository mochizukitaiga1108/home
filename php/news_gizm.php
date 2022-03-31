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

<a href="https://www.gizmodo.jp/" target="_blank"><img class="icon" src="icon/giz_mod.png"></a>
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