# quasiRobots #
quasiRobots is a MODX Revolution Extra that generates robots.txt.
# Usage #
## Example 1 ##
	[[!quasiRobots?
		&sitemap=`189`
		&site_status=`1`
	]]
## Result 1 ##
	User-agent: *
	Disallow: /connectors/
	Disallow: /assets/components/
	Disallow: /search
	Disallow: /index.php
	Disallow: /?
	Host: https://quasi-art.ru/
	Sitemap: https://quasi-art.ru/customsitemap.xml
## Example 2 ##
	[[!quasiRobots?
		&site_status=`1`
	]]
## Result 2 ##
	User-agent: *
	Disallow: /connectors/
	Disallow: /assets/components/
	Disallow: /search
	Disallow: /index.php
	Disallow: /?
	Host: https://quasi-art.ru/
	Sitemap: https://quasi-art.ru/sitemap.xml
## Example 3 ##
	[[!quasiRobots]]
## Result 3 ##
	User-agent: *
	Disallow: /connectors/
	Disallow: /assets/components/
	Disallow: /search
	Disallow: /index.php
	Disallow: /?
	Host: https://quasi-art.ru/
	Sitemap: https://quasi-art.ru/sitemap.xml
## Example 4 ##
	[[!quasiRobots?
		&site_status=`0`
	]]
## Result 4 ##
	User-agent: *
	Disallow: /
# Options #
| Параметр | Описание | Значение по умолчанию |
|---|---|---|
| sitemap | Идентификатор ресурса карты сайта | |
| site_status | 1 - сайт открыт для индексации, 0 - сайт закрыт для индексации | 1 |