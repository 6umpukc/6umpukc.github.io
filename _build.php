<?php

$srcPath = __DIR__ . '/';
$destPath = __DIR__ . '/';

$url = 'https://6umpukc.bitrix24.site';
$pages = [
	'/' => 'index.html',
];

$counterContent = file_get_contents($srcPath . '_counters.html');

foreach ($pages as $pageUri => $page)
{
	$content = file_get_contents($url . $pageUri);

	// fix urls
	$content = str_replace('<head>', '<head>' . "\n" . '<base href="' . $url . '">', $content);

	// add counters
	$content = str_replace('</body>', $counterContent . "\n" .  '</body>', $content);

	//TODO!!! копировать ресуры
	
	file_put_contents($destPath . $page, $content);
}
