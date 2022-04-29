<?
echo(htmlspecialchars_decode(str_replace('<br />', '', $_DATA['seo_sitemap']['items'][$_SITE['site_id']]['sitemap_xml'])));
exit;