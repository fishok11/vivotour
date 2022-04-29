<?	$excursion = current($_DATA['vi_excursion']['items']);

    define('SEO_PAGE_TITLE', $excursion['title'] . ' — экскурсии в г. ' . $excursion['vi_city_id_lookup']);
    define('SEO_CANONICAL', 'https://' . $_SERVER['HTTP_HOST'] . $_SITE['section_paths']['excursion']['path'] . $excursion['vi_city_id_seo'] . '/' . $excursion['title_seo'] . '/');

    $is_auto_booking = $excursion['is_auto_booking'];
    $guides = [];
    if ($excursion['vi_guide_id']) {
        $guide_ids = explode(',', $excursion['vi_guide_id']);
        foreach ($guide_ids as $guide_id) {
            $guides[] = $_DATA['vi_guide']['items'][$guide_id];
        }
    }

    $reviews = null;
    $reviews_count = 0;
    $reviews_avg = 0;
    if (!empty($_DATA['vi_review'])) {
        $reviews = $_DATA['vi_review']['items'];
        $reviews_count = $_DATA['vi_review']['count'];
        $reviews_sum = 0;
        foreach ($reviews as $review) {
            $reviews_sum += $review['stars'];
        }
        $reviews_avg = round($reviews_sum / $reviews_count, 1);
    }

    $tag_id = $excursion['vi_tag_id'];
?>
<article itemscope itemtype="http://schema.org/Article">
    <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?=SEO_CANONICAL?>">
    <link itemprop="image" href="https://<?=$_SERVER['HTTP_HOST'] . $excursion['img_src']?>">
    <meta itemprop="description" content="<?=text_left_cut(defined('SEO_DESCRIPTION')?SEO_DESCRIPTION:$_SITE['seo_description'], 150)?>">
    <meta itemprop="author" content="VIVO Tour">
    <meta itemprop="datePublished" content="<?=substr($excursion['datePublished'], 0, 10)?>">
    <meta itemprop="dateModified" content="<?=substr($excursion['dateModified'], 0, 10)?>">
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <link itemprop="url image" href="https://vivotour.ru/images/vivo_tour_logo_small.png">
        </div>
        <meta itemprop="name" content="VIVO Tour">
        <meta itemprop="telephone" content="<?=$_SITE['settings']['phone']?>">
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <meta itemprop="addressCountry" content="RU">
        </div>
    </div>
    <div class="index-hero" style="background-image: url('<?=$excursion['img_src_detail']?>')">
        <div class="g-container">
            <div class="g-container-box">
                <div class="home-promo">
                    <h1 itemprop="headline name"><?=$excursion['title']?></h1>
                    <h2><?=$excursion['annotation']?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="body-content ">
        <div class="g-container">
            <div class="g-container-box">
            <?  out_crumbs(); ?>
            </div>
        </div>
        <div itemprop="articleBody" class="g-container">
            <div class="g-container-box single">
                <aside>
                    <div class="details">
                        <div class="details__items">
                            <div class="details__title">
                                <?=get_title_by_tag($tag_id, 0, $excursion['type_id_lookup']);?>
                            </div>
                            <div class="details__item"><span class="details__item-title">Длительность</span> <?=out_duration($excursion['duration'])?></div>
                            <div class="details__item"><span class="details__item-title">Размер группы</span> до <?=$excursion['people_max']?> человек</div>
                            <div class="details__item"><span class="details__item-title">Дети</span> Можно с детьми</div>
                        <?  if ($excursion['extra_info4']) { ?>
                                <div class="details__item"><div class="details__item-title">В стоимость включено</div><?=nl2br($excursion['extra_info4'])?></div>
                        <?  }
                            if ($excursion['extra_info5']) { ?>
                                <div class="details__item"><div class="details__item-title">Не входит в стоимость</div><?=nl2br($excursion['extra_info5'])?></div>
                        <?  }
                            if ($reviews_count) { ?>
                                <div class="details__item"><div class="details__item-title">Рейтинг</div>
                                <?  out_stars($reviews_avg) ?>
                                    <?=$reviews_avg?>
                                    <a href="#reviews" class="g-anchor">по <?=$reviews_count?> отзыв<?=1 == $reviews_count ? 'у' : 'ам'?></a>
                                </div>
                        <?  }
                        ?>
                        </div>
                        <div class="details__price">
                        <?  if ($excursion['price_excursion']) { ?>
                                <div class="details__item"><span class="details__price-number">€<?=$excursion['price_excursion']?></span> за <?=get_title_by_tag($tag_id, 2);?></div>
                        <?  // ! NB - for now! - price_excursion OR price_person
                            } else if ($excursion['price_person']) { ?>
                                <div class="details__item"><span class="details__price-number">€<?=$excursion['price_person']?></span> за человека</div>
                        <?  } ?>
                        </div>
                        <div class="details__order">
                            <a href="/booking/?excursion=<?=$_GET['excursion']?>" class="g-button" rel="nofollow">Заказать</a>
                        <?  if ($is_auto_booking) { ?>
                            <div class="details__order-text">
                                Моментальное бронирование без ожидания ответа гида
                            </div>
                        <?  } ?>
                        </div>
                    </div>
                <?  if (count($guides)) { ?>
                        <div class="guides">
                            <div class="guides__title"><?=get_title_by_tag($tag_id, 2);?> <?=count($guides) > 1 ? 'проводят' : 'проводит' ?></div>
                        <?  foreach ($guides as $guide) { ?>
                            <div class="guides__guide">
                                <div class="guide__photo">
                                    <a href="/guide/?guide=<?=$guide['id']?>">
                                        <img src="<?=$guide['img_src']?>" alt=""></a>
                                </div>
                                <div class="guide__details">
                                    <a href="/guide/?guide=<?=$guide['id']?>" class="guide__details-title">
                                        <?=$guide['name']?>
                                    </a>
                                </div>
                            </div>
                        <?  } ?>
                        </div>
                    <?  } ?>
                </aside>
                <div class="single__body text-content">
                    <div class="single__body-main">
                        <?=$excursion['body']?>
                    </div>
                <?  if ($excursion['extra_info3']) { ?>
                        <h3>Организационные детали</h3>
                        <?=$excursion['extra_info3']?>
                <?  } ?>
                <?  if ($reviews_count) { ?>
                        <a name="reviews"></a>
                        <div class="reviews">
                            <h3>Отзывы</h3>
                        <?  foreach ($reviews as $review) { ?>
                                <div class="reviews-item">
                                    <div>
                                        <?=$review['name']?>
                                        <?  out_stars($review['stars']) ?>
                                        <span class="review-item-date">
                                            <?=text_date_str($review['created']) ?>
                                        </span>
                                    </div>
                                    <div>
                                        <?=nl2br($review['body'])?>
                                    </div>
                                </div>
                        <?  } ?>
                        </div>
                <?  } ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?

function out_stars($rating) {
    for ($i = 1; $i <= 5; $i++) {
        $color = ($i <= round($rating) ? '#008cbb' : '#ccc'); ?><span class="star"><i class="fa fa-star" style="color: <?=$color?>;"></i></span><?  }
}
?>