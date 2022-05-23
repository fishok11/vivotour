<?
    $guide = current($_DATA['vi_guide']['items']); ?>

                <div class="guide-hero">
                    <div class="g-container">
                        <div class="g-container-box">
                            <div class="guide-index">
                                <div class="guide__photo">
                                    <img src="<?=$guide['img_src']?>" alt="">
                                </div>
                                <div class="home-promo">
                                    <h1><?=$guide['name']?></h1>
                                    <h2><?=$guide['vi_city_lookup']?>. Гид по городу и региону.</h2>
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
                <!-- <div class="guide-index">
                    <div class="guide__photo">
                        <img src="<?=$guide['img_src']?>" alt="">
                    </div>
                    <div class="home-promo">
                        <h1><?=$guide['name']?></h1>
                        <h2><?=$guide['vi_city_lookup']?>. Гид по городу и региону.</h2>
                    </div>
                </div> 
            
                <div class="single__body-main">
                    <?=$guide['annotation']?>
                </div> -->
            <?  if (isset($_DATA['vi_excursion']['items'])) { ?>
                <div class="single__body-title">Мои экскурсии</div>
                <div class="excursions">
                <?  foreach ($_DATA['vi_excursion']['items'] as $excursion) {
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
                <?  } ?>
                </div>
            <?  } ?>
            </div>
        </div>
    </div>
