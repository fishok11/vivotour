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
    <div class="body-content">
        <div class="g-container">
            <div class="g-container-box">
                <div class="single__body-main">
                    <?=$guide['annotation']?>
                </div>
            <?  if (isset($_DATA['vi_excursion']['items'])) { ?>
                <div class="single__body-title">Мои экскурсии</div>
                <div class="excursions">
                <?  foreach ($_DATA['vi_excursion']['items'] as $excursion) {
                        $link = "{$_SITE['section_paths']['excursion']['path']}?city={$excursion['vi_city_id']}&excursion={$excursion['id']}" ?>
                        <figure class="excursions__item">
                            <a href="<?=$link?>" class="excursions__item-image">
                                <img src="<?=$excursion['img_src']?>" alt="">
                                <span class="excursions__item-duration"><?=out_duration($excursion['duration'])?> </span>
                            </a>
                            <figcaption>
                                <a href="<?=$link?>" class="excursions__item-title">
                                    <?=$excursion['title']?>
                                </a>
                                <div class="excursions__item-info">
                                    <?=$excursion['annotation']?>
                                </div>
                                <div class="excursions__item-price">
                                <?  if ($excursion['price_excursion']) { ?>
                                        <div>
                                            <span class="excursions__item-price-value">€ <?=$excursion['price_excursion']?></span> за экскурсию
                                        </div>
                                <?  } else if ($excursion['price_person']) { ?>
                                       <div>
                                           <span class="excursions__item-price-value">€ <?=$excursion['price_person']?></span> за человека
                                       </div>
                               <?  }?>
                                </div>
                            </figcaption>
                        </figure>
                <?  } ?>
                </div>
            <?  } ?>
            </div>
        </div>
    </div>
