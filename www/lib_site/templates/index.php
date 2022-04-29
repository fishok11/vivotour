<?  // seo fix
    if (isset($_GET['city'])) {
        redirect_301($_SITE['section_paths']['city']['path'] . '?city=' . (int)$_GET['city']);
    }

    $banner = current($_DATA['banner']['items']); ?>
    <div class="index-hero" style="background-image: url('<?=$banner['img_src']?>')">
        <div class="g-container">
            <div class="g-container-box">

                <div class="home-promo">
                <?  if ($banner['url_title']) { ?>
                        <h2><?=$banner['url_title']?></h2>
                <?  } ?>
                    <h1><?=$banner['title']?></h1>
                </div>

            </div>
        </div>
    </div>
    <div class="body-content">
        <div class="g-container">
            <div class="g-container-box home-line">
                <?=$_SITE['section_paths']['allcities']['title']?>
            </div>
        </div>
        <div class="g-container">
            <div class="g-container-box cities">
            <?  foreach ($_DATA['vi_city']['items'] as $city) { ?>
                    <a href="<?=$_SITE['section_paths']['city']['path']?>?city=<?=$city['id']?>" class="cities__item">
                        <img src="<?=$city['img_src']?>" alt="">
                        <span class="cities__item-info">
                            <?=$city['name']?>
                        </span>
                    </a>
            <?  } ?>
            </div>
        </div>
        <div class="g-container">
            <div class="g-container-box home-button">
                <a href="<?=$_SITE['section_paths']['allcities']['path']?>" class="g-button" rel="nofollow">Посмотреть все города</a>
            </div>
        </div>
    <?  if (!empty($_DATA['excursion_top'])) { ?>
            <div class="g-container">
                <div class="g-container-box home-excursions">
                    <h3 class="home-excursions__title">
                        Основные достопримечательности
                    </h3>
                    <div class="home-excursions__items">
                <?  foreach ($_DATA['excursion_top']['items'] as $excursion) { ?>
                        <a href="<?=$_SITE['section_paths']['excursion']['path']?>?city=<?=$excursion['vi_city_id']?>&excursion=<?=$excursion['id']?>" class="home-excursions__item">
                            <div class="home-excursions__item-img">
                                <img src="<?=$excursion['img_src']?>" alt="">
                            </div>
                            <div class="home-excursions__item-info">
                                <?=$excursion['title']?>
                            </div>
                        </a>
                <?  } ?>
                    </div>
                </div>
            </div>
    <?  } ?>
    </div>
