<!DOCTYPE html>
<html lang="<?=$_SITE['html_lang']?>">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?	//  define SEO_ constants in inner template ?>
	<title><?=defined('SEO_PAGE_TITLE')?SEO_PAGE_TITLE:$_SITE['page_title']?></title>
<?	if (defined('SEO_PAGE_NOINDEX')) { ?>
	<meta name="robots" content="NOINDEX, NOFOLLOW">
<?	} ?>
<?	if (defined('SEO_DESCRIPTION')) { ?>
    <meta name="description" content="<?=SEO_DESCRIPTION?>">
<?	} else if ($_SITE['seo_description']) { ?>
    <meta name="description" content="<?=$_SITE['seo_description']?>">
<?	}
	if (defined('SEO_KEYWORDS')) { ?>
    <meta name="keywords" content="<?=SEO_KEYWORDS?>">
<?	} else if ($_SITE['seo_keywords']) { ?>
    <meta name="keywords" content="<?=$_SITE['seo_keywords']?>">
<?	}
	if (defined('SEO_CANONICAL')) { ?>
    <link rel="canonical" href="<?=SEO_CANONICAL?>">
<?	} ?>



	<link href="/css/content.css" rel="stylesheet">
    <link href="/css/card.css" rel="stylesheet">
    <link href="/css/redesignStyle.css" rel="stylesheet">
    
    
	<link href="/fonts/font-awesome.min.css" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/0ed78f30c5.js" crossorigin="anonymous"></script>

	<script src="/js/jquery-1.11.1.min.js"></script>
	<script src="/js/jquery.easing.js"></script>
    <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-62890787-1', 'auto');
ga('send', 'pageview');
    </script>
</head>
<body class="page-<?=$_SITE['section_type']?>">
<div class="body">
	<header class="header"> 
        <div class="g-container">
            <div class="header-top">
                <div >
                    <a class="header-logo" href="/">VIVO tour</a>
                </div>
                <?  if (!empty($_SITE['menu']['main'])) { ?>
                <nav class="header-menu g-clearfix">
                    <ul>
                    <?	foreach ($_SITE['menu']['main'] as $id => $menu_item) { ?>
                            <li class="header-menu-item<? /*=!empty($menu_item['submenu'])?' w-submenu':''*/?>">
                                <a href="<?=$menu_item['url']?>"><?=$menu_item['title']?></a>
                            <?	/*if (isset($menu_item['submenu'])) { ?>
                                <div class="header-menu-submenu">
                                    <ul>
                                        <?	foreach ($menu_item['submenu'] as $id => &$submenu_item) { ?>
                                            <li><a href="<?=$submenu_item['url']?>"<?=$submenu_item['target_blank']?' target="_blank"':''?>><?=$submenu_item['title']?></a></li>
                                        <?	} ?>
                                    </ul>
                                </div>
                            <?	} */?>
                            </li>
                    <?	} ?>
                    </ul>
                </nav>
                <?  } ?>  
            </div>
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
                        <input class="header-search-input" type="text" placeholder="Название города или достопримечательности">
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
    </header>


   	<!--<?=$__CMS__INNER_TEMPLATE_CONTENTS?>-->


    <div class="background-footer">
        <div class="reviews">
            <div class="g-container">
                <div class="reviews-heading">
                    <p class="reviews-top">Отзывы о нас</p>
                    <div class="reviews-line">
                        <div class="reviews-line1"></div>
                        <div class="reviews-line2"></div>
                    </div>               
                    <p class="reviews-subtitle">Что пишут о нас путешественники</p>
                </div>
                    <div class="reviews-feedback">
                        <div class="reviews-arrow1">
                            <div class="reviews-arrow1-top"></div>
                            <div class="reviews-arrow1-bottom"></div>
                        </div>
                        <div class="reviews__container">
                                    <div class="reviews__item">
                                        <div class="reviews-item__stars">
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="reviews-item__user">
                                            <span class="reviews-item__user-name">Ирина</span> про <span class="reviews-item__user-title">"Название экскурсии"</span>
                                        </div>
                                        <div class="reviews-item__info">
                                            Я бронировала экскурсию в сервисе по колизею, иы были</br> вдвоем с дочкой 6 лет. Мне очень понравилось, как гид </br>Евгений, провел экскурсию не скучно, с юмором, все было </br>понятно и очень познавательно...
                                            
                                            <div class="reviews-item__info-item">
                                                <div class="excursion-item__arrow-container">
                                                    <div class="excursion-item__arrow">
                                                        <a>
                                                            <div class="header-search-arrow1"></div>
                                                            <div class="header-search-arrow2"></div>
                                                        </a>   
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviews__item">
                                        <div class="reviews-item__stars">
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star star--color"><i class="fa fa-star"></i></span>
                                            <span class="star"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="reviews-item__user">
                                            <span class="reviews-item__user-name">Ирина</span> про <span class="reviews-item__user-title">"Название экскурсии"</span>
                                        </div>
                                        <div class="reviews-item__info">
                                        Я бронировала экскурсию в сервисе по колизею, иы были</br> вдвоем с дочкой 6 лет. Мне очень понравилось, как гид </br>Евгений, провел экскурсию не скучно, с юмором, все было </br>понятно и очень познавательно... 

                                            <div class="reviews-item__info-item">
                                                <div class="excursion-item__arrow-container">
                                                    <div class="excursion-item__arrow">
                                                        <a>
                                                            <div class="header-search-arrow1"></div>
                                                            <div class="header-search-arrow2"></div>
                                                        </a>   
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                        <div class="reviews-arrow2">
                            <div class="reviews-arrow2-top"></div>
                            <div class="reviews-arrow2-bottom"></div>
                        </div>
                    </div>
            </div>            
        </div>


        <footer class="footer">
            <div class="g-container">
                <div class="footer-location">
                    <div class="footer-location-volcano">
                        <p class="location-text1">Вулкан Этна</p>
                        <p class="location-text2">Сицилия</p>
                    </div>
                    <div class="footer-location-ruins">
                        <p class="location-text1">Руины Таормине</p>
                        <p class="location-text2">Сицилия</p>
                    </div>
                </div>
                <div class="footer-description">
                    <div class="footer-description-container">
                        <div class="footer-description-title">
                            <p class="footer-description-title-text">О компании VIVO</p>
                            <div class="footer-description-line">
                                <div class="footer-description-line1"></div>
                                <div class="footer-description-line2"></div>
                            </div>
                        </div>
                        <div class="footer-description-text">
                            <div class="footer-description-text-left">
                                <p>Наш сеервис - это совместный проект содружества </br>профессиональных гидов и путешественников.</p>
                                <p>Мы твердо убеждены, что разнообразие - это ключ к лучшему </br>пониманию потребностей наших искушенных </br>путешественников, следователно , к лучшему пониманию их </br>желаний. Именно по этому мы объеденили самых энергичных </br>и увлеченных профессионалов из разных регионв Италии </br>и Европы.</p>
                                <p>Мы предоставляем интернет-платформу, позволяющюю </br>выбрать и  воспользоваться лучшими экскурсионными </br>предложениями по достопримечательностям Италии и Европы.</p>
                            </div>
                            <div class="footer-description-text-right">
                                <p>Наша компания дает вам возможность увидеть </br>самые популярные и уникальные места и </br>побывать на необычных экскурсиях в лучших </br>регионах европейских стран.</p>
                                <p>Вы можете написать на по адресу </br><span class="footer-description-text-border">support@vivotour.ru,</span> </br>а с 9:00 до 18:00 по московскому времени - </br>позвонить по телефону<span class="footer-description-number">+7 (495) 991-07-55.</span></p>
                                <p>Подробная контактная </br>информация и доступные </br>способы связи </br><span class="footer-description-text-border">размещены здесь</span>.</p>
                            </div>
                        </div>    
                    </div>    
                </div>
            </div>
            <div class="footer-bottom">
                <div class="g-container">    
                    <div class="footer-menu">
                        <nav>
                            <ul class="footer-menu-list">
                                <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">О сервисе</a></li>
                                <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Контакты</a></li>
                                <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Условия пользования</a></li>
                                <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Гидам</a></li>
                                <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Часто задавемые вопросы</a></li>
                                <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">MICE в Италии</a></li>
                            </ul>
                        </nav>                               
                    </div>
                    <div class="footer-contacts">
                        <div class="footer-contacts-chat">
                            <p class="footer-contacts-chat-text1">Написать в чат</p>
                            <div class="footer-contacts-chat-messenger">
                                <div class="footer-contacts-chat-vk"><a href="#"></a></div>
                                <div class="footer-contacts-chat-fb"><a href="#"></a></div>
                                <div class="footer-contacts-chat-tg"><a href="#"></a></div>
                            </div>
                            <p class="footer-contacts-chat-text2">2021 VIVO Tour</p>
                        </div>
                        <div class="footer-contacts-numbers">
                            <p class="footer-contacts-numbers-mail">support@vivotour.ru</p>
                            <p class="footer-contacts-numbers-phone">+7 (495) 991-07-55</p>
                            <p class="footer-contacts-numbers-hours">Без выходных </br>09:00-18:00 по Москве</p>
                        </div>
                        <div class="footer-contacts-mailing">
                            <p class="footer-contacts-chat-text1">Узнайте первым о скидках и акциях</p>
                            <div>
                                <form class="footer-contacts-mailing-form">
                                    <input class="footer-contacts-mailing-input" type="text" placeholder="Ваш email">
                                    <button class="footer-contacts-mailing-button" type="submit">подписаться</button>
                                </form>
                            </div>
                            <p class="footer-contacts-mailing-text">Нажимая кнопку Пописаться, вы соглашаетесь </br>с политикой <span class="footer-description-text-border">персональных данных</span></p>
                        </div>
                        <div class="footer-contacts-icons">
                            <div class="footer-contacts-icons-logo"><a href=""></a></div>
                            <div class="footer-contacts-icons-massengers">
                                <div class="footer-contacts-icons-inst"><a href=""></a></div>
                                <div class="footer-contacts-icons-vk"><a href=""></a></div>
                                <div class="footer-contacts-icons-tw"><a href=""></a></div>
                                <div class="footer-contacts-icons-fb"><a href=""></a></div>
                            </div>
                            <div class="footer-contacts-icons-logo-cards"><a href=""></a></div>
                        </div>
                    </div>
                </div>    
                <!--<div class="footer-btl">
                    <div class="footer-col">
                        <div>
                            © <?=date('Y')?> VIVO Tour
                        </div>
                        <div class="footer-sm">
                            <a href="https://vk.com/vivotour" target="_blank" title="VIVO Tour вКонтакте"><i class="fa fa-vk"></i></a>
                            <a href="https://www.instagram.com/vivo_tour/" target="_blank" title="VIVO Tour в Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://mobile.twitter.com/VIVO_tour" target="_blank" title="VIVO Tour в Twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="footer-col">
                    <?  if (!empty($_SITE['menu']['footer'])) { ?>
                        <nav>
                            <ul>
                            <?	foreach ($_SITE['menu']['footer'] as $id => $menu_item) { ?>
                                    <li class="footer-menu-item">
                                        <a href="<?=$menu_item['url']?>"><?=$menu_item['title']?></a>
                                    </li>
                            <?	} ?>
                            </ul>
                        </nav>
                    <?  } ?>
                    </div>
                    <div class="footer-col">
                        <div class="footer-img">
                            <img src="/images/card/logo_small.png" alt="Visa / Matercard / Mir" />
                        </div>
                    </div>
                </div>-->
            </div>
        </footer>
    </div>    
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter30196819 = new Ya.Metrika({id:30196819,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/30196819" style="position:absolute; left:-9999px;" alt="" /></div></noscript>


<script src="https://kit.fontawesome.com/0ed78f30c5.js" crossorigin="anonymous"></script>
</body>
</html>