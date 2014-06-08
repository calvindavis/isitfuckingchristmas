<?php
define('IIFC_URL', 'http://isitfuckingchristmas.co.uk/');

$q = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
if ($q === 'rss') {
	header('Content-Type: text/xml');
	$pubDate = rssDate();
	$items = isItFuckingChristmasRss();
	include('rss.php');
} else {
	$message = isItFuckingChristmas($q);
	include('default.php');
}

function isItFuckingChristmas($dirtyDate = null) {
	$yes_messages = array(
		'It fucking is.',
		'It fucking is.',
		'It fucking is.',
		'It fucking is.',
		'It fucking is.'
	);
	$no_messages = array(
		'You fucking wish.',
		'Is it fuck.',
		'It fucking isn\'t.',
		'Fuck no.',
		'No fucking way.',
		'It\'s fucking not.',
		'You fucking wish.',
		'Is it fuck.',
		'It fucking isn\'t.',
		'Fuck no.',
		'You fucking wish.',
		'Is it fuck.',
		'It fucking isn\'t.',
		'Fuck no.',
		'No fucking way.',
		'It\'s fucking not.',
		'You fucking wish.',
		'Is it fuck.',
		'It fucking isn\'t.',
		'Fuck no.',
	);
	$date = cleanDate($dirtyDate);
	$year = substr($date, 0, 4);
	$month_day = substr($date, -5);
	$time = strtotime($date);
	$days = $time / (24 * 60 * 60);
	
	if ($time > time()) return 'No fucking precognition.';
	elseif ($month_day === '12/25') return getValue($yes_messages, $year);
	elseif ($month_day === '02/29') return 'No, it\'s a fucking leap day.';
	elseif ( $date === '2012/04/06' ) return 'It\'s fucking Good Friday.';
	elseif ( $date === '2012/04/08' ) return 'It\'s Easter you daft cunt.';
	elseif ( $date === '2012/04/09' ) return 'Holy shit! It\'s Easter Monday.';
	else return getValue($no_messages, $days);
}

function isItFuckingChristmasRss() {
	$time = strtotime(cleanDate());
	$items = array();
	for ($n = 0; $n - 5; ++$n) {
		$item = array(
			'description' => isItFuckingChristmas($time),
			'pubDate' => rssDate($time),
			'link' => IIFC_URL . cleanDate($time)
		);
		$items[] = $item;
		
		$time -= (24 * 60 * 60);
	}
	return $items;
}

function cleanDate($dirtyDate = 0) {
	$time = is_int($dirtyDate) ? $dirtyDate : strtotime($dirtyDate);
	if (!$time) $time = time();
	return date('Y/m/d', $time);
}

function rssDate($dirtyDate = 0) {
	$date = cleanDate($dirtyDate);
	$time = strtotime($date);
	return date(DATE_RSS, $time);
}

function getValue($array, $seed) {
	return $array[$seed % count($array)];
}