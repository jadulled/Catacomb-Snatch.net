<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!empty($news)) {
	$count = 0;

	foreach ($news as $entry): ?>
		<div class="entry row-fluid">
			<div class="span1 date-col">
				<? $date_time = strtotime($entry["created"]); ?>
				<div class="day"><?= date("d", $date_time) ?></div>
				<div class="month"><?= strtoupper(date("M", $date_time)) ?></div>
			</div>

			<div class="span9 cnt-col">
				<h3><a href="news/<? echo $entry['slug'] ?>"><? echo $entry['title'] ?></a></h3>
				<div class="info">
					written by <?= $entry["author"] ?>
					<? if(!empty($entry["category"])) echo " - posted in {$entry["category"]}"; ?>
				</div>
				<div id="main"><?= $entry["text"] ?></div>
			</div>
		</div><?

		if($count > 0) echo '<hr />';

		$count++;
	endforeach;
} else {
	echo "<h2>No news found</h2>";
}
