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
        <!-- <div class="g-container">
            <div class="g-container-box home-line">
                <?=$_SITE['section_paths']['allcities']['title']?>
            </div>
        </div> -->
        <div class="g-container">
            <div class="navigation">
                <div class="navigation-container">
                    <div class="navigation-container__text">
                        Куда поедите ?
                    </div>
                    <div class="navigation-item">
                        <div class="navigation-item__info navigation-item__info--select">Италия</div>
                        <div class="navigation-item__info"><a href=""></a> Испания</div>
                        <div class="navigation-item__info">Греция</div>
                        <div class="navigation-item__info">Германия</div>
                        <div class="navigation-item__info">Голландия</div>
                    </div>
                </div>
                <div class="line">
                    <div class="line-green"></div>
                    <div class="line-red"></div>
                </div>
                <div class="navigation__text">
                    выберите страну и город
                </div>
            </div>
            <div class="g-container-box cities">
            <?  foreach ($_DATA['vi_city']['items'] as $city) { ?>
                <div class="cities-container">
                    <a href="<?=$_SITE['section_paths']['city']['path']?>?city=<?=$city['id']?>" class="cities__item">
                        <img src="<?=$city['img_src']?>" alt="">
                        <div class="cities__item-container">
                            <div class="cities__item-container-text">
                                <div class="cities__item-info">
                                    <?=$city['name']?>
                                </div>

                                <div class="cities__item-excursion">
                                    <span class="cities__excursion-number">1243</span> экскурсии
                                </div>   
                            </div>
                            
                        </div>
                    </a>
                </div>    
            <?  } ?>
            </div>
        </div>
        <div class="g-container">
            <div class="g-container-box home-button">
                <a href="<?=$_SITE['section_paths']['allcities']['path']?>" class="g-button" rel="nofollow">Посмотреть все города</a>
            </div>
        </div>
        <div class="g-container">
            <div class="body-info">
                <div class="body-info__container">
                    <div class="body-info__container-head">
                        Наши преимущества
                    </div>
                    <div class="body-info__container-text">
                        <div class="body-text__item">
                            <img src="/imgNew/Изображения/listg.png" alt="">
                            <div>
                                <span class="body-text__item-head">Lorem ipsum dolor sit amet.<br></span>  Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                            </div>
                        </div>
                        <div class="body-text__item">
                            <img src="/imgNew/Изображения/peoplecartg.png" alt="">
                            <div>
                                <span class="body-text__item-head">Lorem ipsum dolor sit amet.<br></span>  Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                            </div>
                        </div>
                        <div class="body-text__item">
                            <img src="/imgNew/Изображения/babkig.png" alt="">
                            <div>
                                <span class="body-text__item-head">Lorem ipsum dolor sit amet.<br></span>  Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
            <div class="g-container">
                <div class="body-excursion">
                    <div class="body-excursion__text">
                        Рекомендуем по темам
                    </div>

                    <div class="line">
                        <div class="line-green"></div>
                        <div class="line-red"></div>
                    </div>

                    
                    <div class="body-excursion__container">
                        <div class="body-excursion__container-net-big">       
                            <div class="body-excursion__item">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <div class="excursion-text__head">Название экскурсии</div>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/Изображения/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="body-excursion__item">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <div class="excursion-text__head">Название экскурсии</div>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/Изображения/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div> 
                            </div>

                            <div class="body-excursion__item">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <div class="excursion-text__head">Название экскурсии</div>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/Изображения/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div> 
                        </div>
                        
                        <div class="body-excursion__container-net-small">
                            <div class="body-excursion__item">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <div class="excursion-text__head">Название экскурсии</div>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/Изображения/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="body-excursion__item">
                            <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <div class="excursion-text__head">Название экскурсии</div>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/Изображения/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>   
                                </div>
                            </div>

                            <div class="body-excursion__item">
                            <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <div class="excursion-text__head">Название экскурсии</div>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/Изображения/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="body-excursion__item">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <div class="excursion-text__head">Название экскурсии</div>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/Изображения/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>

    <!-- <?  if (!empty($_DATA['excursion_top'])) { ?>
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
    <?  } ?> -->
    </div>
