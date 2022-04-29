<?
function out_duration($duration) {
    return str_replace('.0', '', $duration) . ' ' .         (($duration < 2 and $duration != 1) ? 'часа' : text_format_quantity_ru((int)$duration, array('час', 'часа', 'часов')));
}

function out_crumbs($levels_num = 3) {
    global $_SITE; ?>
    <nav class="crumbs">
        <ul>
            <li class="crumbs__item"><a href="/">Главная</a></li>
        <?  // /excursion/rome/sem-holmov-rima/
            $level = 0;
            foreach($_SITE['crumbs'] as $path => $crumb) {
                $is_current = false;
                $level++;
                if ($level == 1) continue;
                if ($level == 2 && $levels_num > 2) {
                    // sic! hack! trim! - see $page_title_key_make_unique in url_processor.php
                    $url = $_SITE['section_paths']['city']['path'] . trim($path);
                } else {
                    $is_current = true;
                } ?>
                <li class="crumbs__item">
                    <? if (empty($is_current)) { ?>
                        <a href="<?=$url?>"><?=$crumb['title']?></a>
                    <? } else { ?>
                        <?=$crumb['title']?>
                    <? }?>
                </li>
        <?  } ?>
        </ul>
    </nav>
<?
}

function get_title_by_tag($tag_ids, $case = 0, $type_str = '') {
    $tag2texts = [
        // 0 default
        0 => ['экскурсия ', 'экскурсии', 'экскурсию'],
        12 => ['трансфер ', 'трансфера', 'трансфер'],
        15 => ['фотосессия ', 'фотосессии', 'фотосессию'],
    ];
    if (!empty($tag_ids)) {
        $tag_ids = explode(',', $tag_ids);
        foreach ($tag_ids as $tag_id) {
            if (!empty($tag2texts[$tag_id])) {
                return $tag2texts[$tag_id][$case];
            }
        }
    }
    return $type_str . ' ' . $tag2texts[0][$case];
}

/*

define('ITEMS_IN_ROW', 4);
define('ITEMS_ON_PAGE', 12);

function out_aside() {
	global $_SITE, $_DATA, $__; ?>
    <aside class="body-content-side">
    <?	if ($_DATA['listing_main']) { ?>
        <div class="side-title">Лучшие предложения</div>
        <div class="side-block properties-side g-clearfix">
            <ul>
            <?	foreach ($_DATA['listing_main']['items'] as &$item) {
                    $detail_link = $_SITE['section_paths']['property_detail']['path'] . '?detail=' . $item['id']; ?>
                    <li class="properties-side-item g-clearfix">
                        <div class="properties-side-item-image" style="background-image: url('<?=$item['img_src_thumb']?>')">
                            <a href="<?=$detail_link?>"></a>
                        </div>
                        <div class="properties-side-item-desc">
                            <div class="properties-side-item-type"><?=$item['listing_type_id_lookup']?></div>
                            <div class="properties-side-item-title"><a href="<?=$detail_link?>"><?=text_left_cut($item['title'], 57)?></a></div>
                            <div class="properties-side-item-price"><?=my_number_format($item['price'], $_SITE['locale'])?> <span class="p-item-bot-price-currency"><?=$item['currency_id_lookup']?></div>
                        </div>
                    </li>
            <?	}
                unset($item); ?>
            </ul>
        </div>
    <?	} ?>
    </aside>
<?
}

function out_paginator($page, $items_on_page, $count, $prev_text = '', $next_text = '') {
	if (!(int)$page) $page = 1;
	if ($count > $items_on_page) {
		$pages_num = ceil($count / $items_on_page);

		$uri_parts = parse_url($_SERVER['REQUEST_URI']);
		$uri_params = array();
		parse_str($uri_parts['query'], $uri_params);
		unset($uri_params['page']);
		$uri_query = http_build_query($uri_params);
		$uri_page = $uri_parts['path'] . ($uri_query?'?' . $uri_query . '&':'?') . 'page=';
		$uri_page_first = $uri_parts['path'] . ($uri_query?'?'.$uri_query:''); // this is an important thing for seo ?>
        <div class="paginator">
            <div class="paginator-prev"><a<?=$page != 1?' href="' . ($page != 2?$uri_page . ($page - 1):$uri_page_first) . '"':' class="paginator-inactive"'?>><?=$prev_text?></a></div>
            <div class="paginator-next"><a<?=$page != $pages_num?' href="' . $uri_page . ($page + 1) . '"':' class="paginator-inactive"'?>><?=$next_text?></a></div>
            <div class="paginator-pages">
            <?	for ($p = 1; $p <= $pages_num; $p++) { ?><span<?=$p == $page?' class="selected"':''?>><a href="<?=$p != 1?$uri_page . $p:$uri_page_first?>"><?=$p?></a></span><? } ?>
            </div>
            <div class="cl"></div>
        </div>
<?	}
}

function out_sharing() { ?>
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5085730966084007"></script>
<?
} */
?>