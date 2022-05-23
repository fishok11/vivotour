<?  // seo fix
    if (empty($_GET['city'])) {
        redirect_301('/');
    }
    if (isset($_GET['excursion'])) {
        redirect_301($_SITE['section_paths']['excursion']['path'] . '?city=' . (int)$_GET['city'] . '&excursion=' . (int)$_GET['excursion']);
    }

    if (isset($_GET['tag'])) {
        $current_tag = $_GET['tag'];
    }
    $all_tags = $_DATA['vi_tag']['items'];
    $tags = [];
    if (isset($_DATA['vi_excursion']['items'])) {
        foreach ($_DATA['vi_excursion']['items'] as $excursion) {
            if ($excursion['vi_tag_id']) {
                $tag_ids = explode(',', $excursion['vi_tag_id']);
                foreach ($tag_ids as $tag_id) {
                    if (!isset($tags[$tag_id])) {
                        $tags[$tag_id] = 1;
                    } else {
                        $tags[$tag_id]++;
                    }
                }
            }
        }
    }

    $city = current($_DATA['vi_city']['items']); ?>

                 <div class="index-hero" ><!--style="background-image: url('<?=$city['img_src_detail']?>')"-->
                    <div class="g-container">
                        <div class="g-container-box">
                            <div class="home-promo">
                                <h1><?=$city['name']?></h1>
                                <div class="home-promo-tags">
                                    <a href="./?city=<?=$city['id']?>"<?=!isset($current_tag)?' class="current"' : ''?>>Все экскурсии <?=count($_DATA['vi_excursion']['items'])?></a>
                                <?  foreach ($all_tags as $id => $tag) {

                                        // this one is kinda our system tag so do not show
                                        if ($tag['is_auto_booking'])  {
                                            continue;
                                        }

                                        $count_str = '';
                                        if (isset($tags[$id])) {
                                            $count_str = $tags[$id]; ?>
                                            <a href="./?city=<?=$city['id']?>&tag=<?=$id?>"<?=(isset($current_tag) && $current_tag == $id)?' class="current"' : ''?>><?=$all_tags[$id]['title']?> &nbsp;<?=$count_str?></a>
                                    <?  } ?>
                                <?  } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="body-content">
        <div class="g-container">
            <div class="g-container-box">
            <?  $levels_num = empty($current_tag) ? 2 : 3;
                out_crumbs($levels_num); ?>
            </div>
        </div>
        <div class="g-container">
            <div class="g-container-box excursions">
            <?  if (isset($_DATA['vi_excursion']['items'])) {
                    foreach ($_DATA['vi_excursion']['items'] as $excursion) {
                        $excursion_tags = explode(',', $excursion['vi_tag_id']);
                        // filter all excursions like this (not in SQL, by the tag parameter) because we need ALL excursions to show the tags and counts above

                        if (isset($current_tag) && !in_array($current_tag, $excursion_tags)) {
                            continue;
                        }
                        $link = "{$_SITE['section_paths']['excursion']['path']}?city={$excursion['vi_city_id']}&excursion={$excursion['id']}" ?>
                        <figure class="excursions__item">
                            <a href="<?=$link?>" class="excursions__item-image">
                                <img src="<?=$excursion['img_src']?>" alt="">
                            </a>

                            <div class="excursions__item-image-container">
                                <div class="excursions__item-image-text">
                                    <a href="<?=$link?>" class="excursions__item-title">
                                        <?=$excursion['title']?>
                                    </a>
                                    <span class="excursions__item-duration"><?=out_duration($excursion['duration'])?> </span>
                                </div>

                                <div class="excursion-item__arrow-container">
                                    <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                    </div>
                                </div> 
                            </div>
                            
                            <!-- <figcaption>
                                <div class="excursions__item-info">
                                    <?=$excursion['annotation']?>
                                </div>
                                <div class="excursions__item-price">
                                <?  if ($excursion['price_excursion']) { ?>
                                        <div>
                                            <span class="excursions__item-price-value">€ <?=$excursion['price_excursion']?></span> за <?=get_title_by_tag($excursion['vi_tag_id'], 2);?>
                                        </div>
                                <?  } else if ($excursion['price_person']) { ?>
                                       <div>
                                           <span class="excursions__item-price-value">€ <?=$excursion['price_person']?></span> за человека
                                       </div>
                               <?  }?>
                                </div>
                            </figcaption> -->
                        </figure>
                <?  }
                } ?>
            </div>
        </div>
    </div>