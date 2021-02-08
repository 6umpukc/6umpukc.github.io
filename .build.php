<?php

$dest = 'index.html';

$url = 'https://whateveruse.bitrix24.site/';

$content = file_get_contents($url);

$content = str_replace('<head>', '<head>
	<base href="' . $url . '">', $content);

file_put_contents(__DIR__ . '/' . $dest, $content);
