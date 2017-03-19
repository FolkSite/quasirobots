<?php
$output = '';
$site_status = (int)$modx->getOption('site_status', $scriptProperties, 1);
$site_url = $modx->getOption('site_url', null, '');
$sitemap = (int)$modx->getOption('sitemap', $scriptProperties, 0);

$disallow = [
	'User-agent: *',
	'Disallow: /connectors/',
	'Disallow: /assets/components/',
	'Disallow: /search',
	'Disallow: /index.php',
	'Disallow: /?',
];

$offlineText = [
	'User-agent: *',
	'Disallow: /'
];

if ($site_status === 1) {
	$output = implode("\n", $disallow);
	$output .= "\nHost: ".$site_url;
	if ($sitemap > 0) {
		$output .= "\nSitemap: ".$modx->makeUrl($sitemap, '', '', 'full');
	}
} else {
	$output = implode("\n", $offlineText);
}

return $output;