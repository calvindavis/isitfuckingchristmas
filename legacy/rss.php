<?php echo '<?xml version="1.0"?>'; ?>
<rss version="2.0">
	<channel>
		<title>Is it fucking Christmas?</title>
		<link><?php echo IIFC_URL; ?></link>
		<description>Is it fucking Christmas?</description>
		<language>en-gb</language>
		<pubDate><?php echo $pubDate; ?></pubDate>
		<lastBuildDate><?php echo $pubDate; ?></lastBuildDate>
<?php foreach($items as $item): ?>
		<item>
			<title><?php echo $item['description']; ?></title>
			<description><?php echo $item['description']; ?></description>
			<pubDate><?php echo $item['pubDate']; ?></pubDate>
			<link><?php echo $item['link']; ?></link>
			<guid><?php echo $item['link']; ?></guid>
		</item>
<?php endforeach; ?>
	</channel>
</rss>