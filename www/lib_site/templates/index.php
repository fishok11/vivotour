<?  // seo fix
    if (isset($_GET['city'])) {
        redirect_301($_SITE['section_paths']['city']['path'] . '?city=' . (int)$_GET['city']);
    }

    $banner = current($_DATA['banner']['items']); ?>
    <!-- <div class="index-hero" style="background-image: url('<?=$banner['img_src']?>')">
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
    </div> -->
                <div class="header-middle">
                    <div class="header-middle-container">
                        <p class="header-middle-textTop">увлектаелные экскурсии</p>
                        <p class="header-middle-textMiddle">ПО ИТАЛИИ И ЕВРОПЕ</p>
                        <p class="header-middle-textBottom">60 городов и направлений</p>
                    </div>    
                </div>
                <div class="header-location">
                    <i class="location-map fa-solid fa-location-dot"></i>
                    <p class="location-text1">Монумент Витториано</p>
                    <p class="location-text2">Рим</p>
                </div>
                <div class="header-search"> 
                    <div class="header-search-container">  
                        <form class="header-search-form">
                            <input class="header-search-input" type="text" placeholder="Название города">
                            <button class="header-search-button" type="submit">найти
                                <div class="header-search-arrow">
                                    <div class="header-search-arrow1"></div>
                                    <div class="header-search-arrow2"></div>
                                </div>   
                            </button>
                        </form>
                    </div>           
                </div>
            </div>
        </div>
    </header>
    <div class="popular-excursions">
        <div class="g-container">
            <div class="popular-excursions__container">
                <div class="popular-excursions__text">
                    <div class="popular-excursions__head">
                      <span class="popular-excursions__head-color">Популярные</span> экскурсии 
                    </div>
                   <div class="line">
                        <div class="line-green"></div>
                        <div class="line-red"></div>
                   </div>
                   <div class="popular-excursions__text-info">
                       Направления, которые выбирали наши посетители
                    </div>
                </div>
                
                <div class="popular-excursions__info">
                    <div class="popular-excursions__slides swiper-wrapper">
                        <div class="popular-excursions__info-item swiper-slide">
                            <a href="" class="popular-excursions__info-img-container">
                                <img src="/imgNew/img/bridge.jpg" alt="" class="popular-excursions__info-img">
                            </a>
                            <div class="body-excursion__item-container">
                                <div class="excursion-item__text">
                                    <a href="" class="excursion-text__head">Название экскурсии</a>
                                    <div class="excursion-text__info">1 час</div>
                                </div>
                                <div class="excursion-item__arrow-container">
                                    <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="popular-excursions__info-item swiper-slide">
                            <a href="" class="popular-excursions__info-img-container">
                                <img src="/imgNew/img/bridge.jpg" alt="" class="popular-excursions__info-img">
                            </a>
                            <div class="body-excursion__item-container">
                                <div class="excursion-item__text">
                                    <a href="" class="excursion-text__head">Название экскурсии</a>
                                    <div class="excursion-text__info">1 час</div>
                                </div>
                                <div class="excursion-item__arrow-container">
                                    <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="popular-excursions__info-item swiper-slide">
                            <a href="" class="popular-excursions__info-img-container">
                                <img src="/imgNew/img/bridge.jpg" alt="" class="popular-excursions__info-img">
                            </a>
                            <div class="body-excursion__item-container">
                                <div class="excursion-item__text">
                                    <a href="" class="excursion-text__head">Название экскурсии</a>
                                    <div class="excursion-text__info">1 час</div>
                                </div>
                                <div class="excursion-item__arrow-container">
                                    <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="popular-excursions__info-item swiper-slide">
                            <a href="" class="popular-excursions__info-img-container">
                                <img src="/imgNew/img/bridge.jpg" alt="" class="popular-excursions__info-img">
                            </a>
                            <div class="body-excursion__item-container">
                                <div class="excursion-item__text">
                                    <a href="" class="excursion-text__head">Название экскурсии</a>
                                    <div class="excursion-text__info">1 час</div>
                                </div>
                                <div class="excursion-item__arrow-container">
                                    <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="popular-excursions__info-item swiper-slide">
                            <a href="" class="popular-excursions__info-img-container">
                                <img src="/imgNew/img/bridge.jpg" alt="" class="popular-excursions__info-img">
                            </a>
                            
                            <div class="body-excursion__item-container">
                                <div class="excursion-item__text">
                                    <a href="" class="excursion-text__head">Название экскурсии</a>
                                    <div class="excursion-text__info">1 час</div>
                                </div>

                                <div class="excursion-item__arrow-container">
                                    <div class="excursion-item__arrow">
                                        <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                    <div class="popular-excursion__arrow popular-excursion__arrow-left">
                        <a href="#">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>

                    <div class="popular-excursion__arrow popular-excursion__arrow-right">
                        <a href="#">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="g-container-box home-button">
                    <a href="" class="g-button">Посмотреть все экскурсии</a>
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
                    <div class="navigation-info">
                        <div class="navigation-container__text">
                           <p>Куда поедете ?</p> 
                        </div>
                        <div class="line">
                            <div class="line-green"></div>
                            <div class="line-red"></div>
                        </div>
                        <div class="navigation__text">
                            выберите страну и город
                        </div>
                    </div>

                    <div class="navigation-item">
                        <div class="navigation-item__info-select">
                            <a href="#">Италия</a>
                            <div class="arr-bottom">
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>

                        <ul class="navigation-item__list">
                            <li class="navigation-item__info "><a href="#">Испания</a></li>
                            <li class="navigation-item__info "><a href="#">Греция</a></li>
                            <li class="navigation-item__info "><a href="#">Германия</a></li>
                            <li class="navigation-item__info "><a href="#">Голландия</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="g-container-box cities">
            <?  foreach ($_DATA['vi_city']['items'] as $city) { ?>
                <div class="cities-container">
                    <div class="cities__item">
                        <a href="<?=$_SITE['section_paths']['city']['path']?>?city=<?=$city['id']?>">
                            <img src="<?=$city['img_src']?>" alt="">
                        </a>
                        <div class="cities__item-container">
                            <div class="cities__item-container-text">
                                <a href="<?=$_SITE['section_paths']['city']['path']?>?city=<?=$city['id']?>" class="cities__item-info">
                                    <?=$city['name']?>
                                </a>
                                <div class="cities__item-excursion">
                                    <span class="cities__excursion-number">1243</span> экскурсии
                                </div>   
                            </div>    
                        </div>
                    </div>
                </div>    
            <?  } ?>
            </div>
        </div>
        <div class="g-container">
            <div class="g-container-box home-button">
                <a href="<?=$_SITE['section_paths']['allcities']['path']?>" class="g-button" rel="nofollow">Смотреть все города</a>
            </div>
        </div>
        <div class="g-container">
            <div class="body-info">
                <div class="body-info__container">
                    <div class="body-geo">
                    <i class="location-map fa-solid fa-location-dot"></i>
                    <p class="location-text1">Амальфитанское побережье</p>
                    <p class="location-text2">Салерно, Кампания</p>
                    </div>
                    <div class="body-info__container-head">
                        Наши преимущества
                    </div>
                    <div class="body-info__container-text">
                        <div class="body-text__item">
                            <img src="/imgNew/img/listg.png" alt="">
                            <div>
                                <span class="body-text__item-head">Lorem ipsum dolor sit amet.<br></span>  Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                            </div>
                        </div>
                        <div class="body-text__item">
                            <img src="/imgNew/img/peoplecartg.png" alt="">
                            <div>
                                <span class="body-text__item-head">Lorem ipsum dolor sit amet.<br></span>  Quis ipsum suspendisse ultrices gravida. Risus commodo viverra 
                            </div>
                        </div>
                        <div class="body-text__item">
                            <img src="/imgNew/img/babkig.png" alt="">
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

                            <div class="body-excursion__slides swiper-wrapper">
                                <div class="body-excursion__item swiper-slide">
                                    <div class="body-excursion__item-container">
                                        <div class="excursion-item__text">
                                            <a href="" class="excursion-text__head">Название экскурсии теперь реально длинное</a>
                                            <div class="excursion-text__info">1 час</div>
                                        </div>
                                        <div class="excursion-item__arrow-container">
                                            <div class="excursion-item__arrow">
                                                <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                                <div class="body-excursion__item swiper-slide">
                                    <div class="body-excursion__item-container">
                                        <div class="excursion-item__text">
                                            <a href="" class="excursion-text__head">Название экскурсии</a>
                                            <div class="excursion-text__info">1 час</div>
                                        </div>
                                        <div class="excursion-item__arrow-container">
                                            <div class="excursion-item__arrow">
                                                <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                                <div class="body-excursion__item swiper-slide">
                                    <div class="body-excursion__item-container">
                                        <div class="excursion-item__text">
                                            <a href="" class="excursion-text__head">Название экскурсии</a>
                                            <div class="excursion-text__info">1 час</div>
                                        </div>
                                        <div class="excursion-item__arrow-container">
                                            <div class="excursion-item__arrow">
                                                <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                            </div>
                                        </div>  
                                    </div>
                                </div> 

                                <div class="body-excursion__item swiper-slide">
                                    <div class="body-excursion__item-container">
                                        <div class="excursion-item__text">
                                            <a href="" class="excursion-text__head">Название экскурсии</a>
                                            <div class="excursion-text__info">1 час</div>
                                        </div>
                                        <div class="excursion-item__arrow-container">
                                            <div class="excursion-item__arrow">
                                                <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                            </div>
                                        </div>  
                                    </div>
                                </div> 

                                <div class="body-excursion__item swiper-slide">
                                    <div class="body-excursion__item-container">
                                        <div class="excursion-item__text">
                                            <a href="" class="excursion-text__head">Название экскурсии</a>
                                            <div class="excursion-text__info">1 час</div>
                                        </div>
                                        <div class="excursion-item__arrow-container">
                                            <div class="excursion-item__arrow">
                                                <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                            </div>
                                        </div>  
                                    </div>
                                </div> 
                            </div>      

                            <a href="#" class="body-excursion__arrow body-excursion__arrow-left">
                                <i class="fa fa-angle-left"></i>
                            </a>

                            <a href="#" class="body-excursion__arrow body-excursion__arrow-right">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        
                        <!-- <div class="body-excursion__container-net-small">
                            <div class="body-excursion__item body-excursion__item--active">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <a href="" class="excursion-text__head">Название экскурсии</a>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                            <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="body-excursion__item body-excursion__item--active">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <a href="" class="excursion-text__head">Название экскурсии</a>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                            <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            
                            <div class="body-excursion__item">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <a href="" class="excursion-text__head">Название экскурсии</a>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                            <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="body-excursion__item">
                                <div class="body-excursion__item-container">
                                    <div class="excursion-item__text">
                                        <a href="" class="excursion-text__head">Название экскурсии</a>
                                        <div class="excursion-text__info">1 час</div>
                                    </div>
                                    <div class="excursion-item__arrow-container">
                                        <div class="excursion-item__arrow">
                                            <a><img src="/imgNew/img/arrRight.png" alt=""></a>   
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>     -->
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
