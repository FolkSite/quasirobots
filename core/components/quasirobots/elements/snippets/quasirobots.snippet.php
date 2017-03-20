<?php
$output = '';
$site_status = (int)$modx->getOption('site_status', $scriptProperties, 1);
$site_url = $modx->getOption('site_url', null, '');
$sitemap = $modx->getOption('sitemap', $scriptProperties, false);

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
	if (intval($sitemap) > 0) {
		$output .= "\nSitemap: ".$modx->makeUrl($sitemap, '', '', 'full');
	} elseif (!$sitemap) {
		$output .= "\nSitemap: ".$site_url.'sitemap.xml';
	}
} else {
	$output = implode("\n", $offlineText);
}

return $output;