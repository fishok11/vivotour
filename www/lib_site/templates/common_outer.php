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

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-indigo.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    
	<link href="/fonts/font-awesome.min.css" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/0ed78f30c5.js" crossorigin="anonymous"></script>

    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <link href="/css/redesignStyle.css" rel="stylesheet">
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

	<header class="header">
        <a href="#" class="header-burger-link">
            <i class="fa-solid fa-bars"></i>
        </a>
        <nav class="header-burger-menu">
            <a href="" class="header-burger-menu-arrow">
                <i class="fa-solid fa-bars"></i>
            </a> 
            <ul class="header-burger-menu-list">      
                <li class="header-burger-menu-item">
                    <a href="" class="header-burger-menu-link">Как это работает?</a>
                </li>
                </li>
            </ul>
        </nav>
        <div class="header-container">    
            <div class="g-container"> 
                <div class="header-top">
                    
                    <div class="header-logo">
                        <a class="header-logo-link" href="/">VIVO tour</a>
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
                



   	<?=$__CMS__INNER_TEMPLATE_CONTENTS?>


    <div class="background-feedback">
        <div class="feedback">
            <div class="g-container"> 
                <div class="feedback-heading">
                    <p class="feedback-top">Отзывы о нас</p>
                    <div class="feedback-line">
                        <div class="feedback-line1"></div>
                        <div class="feedback-line2"></div>
                    </div>               
                    <p class="feedback-subtitle">Что пишут о нас путешественники</p>
                </div>
                <div class="feedback-people">

                    <div class="feedback__container swiper-wrapper">                                
                        <div class="feedback__item swiper-slide">
                            <div class="feedback-item__stars">
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star"></i>
                            </div>
                            <div class="feedback-item__user">
                                <span class="feedback-item__user-name">Ирина</span> про <span class="feedback-item__user-title">"Название экскурсии"</span>
                            </div>
                            <div class="feedback-item__info">
                                Я бронировала экскурсию в сервисе по колизею, мы были вдвоем с дочкой 6 лет. Мне очень понравилось, как гид Евгений, провел экскурсию не скучно, с юмором, все было понятно и очень познавательно... 
                            </div>
                        </div>

                        <div class="feedback__item swiper-slide">
                            <div class="feedback-item__stars">
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star"></i>
                            </div>
                            <div class="feedback-item__user">
                                <span class="feedback-item__user-name">Александр Сергеевич</span> про <span class="feedback-item__user-title">"Название экскурсии"</span>
                            </div>
                            <div class="feedback-item__info">
                                Я бронировала экскурсию в сервисе по колизею, мы были вдвоем с дочкой 6 лет. Мне очень понравилось, как гид Евгений, провел экскурсию не скучно, с юмором, все было понятно и очень познавательно... 
                            </div>
                        </div>

                        <div class="feedback__item swiper-slide">
                            <div class="feedback-item__stars">
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star"></i>
                            </div>
                            <div class="feedback-item__user">
                                <span class="feedback-item__user-name">Александр Сергеевич</span> про <span class="feedback-item__user-title">"Название экскурсии"</span>
                            </div>
                            <div class="feedback-item__info">
                                Я бронировала экскурсию в сервисе по колизею, мы были вдвоем с дочкой 6 лет. Мне очень понравилось, как гид Евгений, провел экскурсию не скучно, с юмором, все было понятно и очень познавательно... 
                            </div>
                        </div>
                        
                        <div class="feedback__item swiper-slide">
                            <div class="feedback-item__stars">
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star star--color"></i>
                                <i class="fa-solid fa-star star"></i>
                            </div>
                            <div class="feedback-item__user">
                                <span class="feedback-item__user-name">Александр Сергеевич</span> про <span class="feedback-item__user-title">"Название экскурсии"</span>
                            </div>
                            <div class="feedback-item__info">
                                Я бронировала экскурсию в сервисе по колизею, мы были вдвоем с дочкой 6 лет. Мне очень понравилось, как гид Евгений, провел экскурсию не скучно, с юмором, все было понятно и очень познавательно... 
                            </div>
                        </div>
                    </div>   

                    <div class="feedback-arrow1" role="button">
                        <a href="">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>   

                    <div class="feedback-arrow2"  role="button">
                        <a href="">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div> 
                </div>       
            </div>          
        </div>
        <div class="g-container">
            <div class="location">
                <div class="location-volcano">
                    <i class="location-map fa-solid fa-location-dot"></i>
                    <p class="location-text1">Вулкан Этна</p>
                    <p class="location-text2">Сицилия</p>
                </div>
                <div class="location-ruins">
                    <i class="location-map fa-solid fa-location-dot"></i>
                    <p class="location-text1">Руины Таормине</p>
                    <p class="location-text2">Сицилия</p>
                </div>
            </div>
            <div class="description">
                <div class="description-container">
                    <div class="description-title">
                        <p class="description-title-text">О компании VIVO</p>
                        <div class="description-line">
                            <div class="description-line1"></div>
                            <div class="description-line2"></div>
                        </div>
                    </div>
                    <div class="description-text">
                        <div  class="description-text-left">
                            <p>
                                Наш сервис - это совместный проект содружества
                                профессиональных гидов и путешественников.
                            </p>
                            <p>
                                Мы твердо убеждены, что разнообразие - это ключ к лучшему
                                пониманию потребностей наших искушенных
                                путешественников, следователно , к лучшему пониманию их
                                желаний. Именно по этому мы объеденили самых энергичных
                                и увлеченных профессионалов из разных регионв Италии
                                и Европы.
                            </p>
                            <p>
                                Мы предоставляем интернет-платформу, позволяющюю
                                выбрать и  воспользоваться лучшими экскурсионными
                                предложениями по достопримечательностям Италии и Европы.
                            </p>
                        </div>
                        <div  class="description-text-right">
                            <p>
                                Наша компания дает вам возможность увидеть
                                самые популярные и уникальные места и
                                побывать на необычных экскурсиях в лучших
                                регионах европейских стран.
                            </p>
                            <p>
                                Вы можете написать на по адресу
                                <a href="#">support@vivotour.ru,</a>
                                а с 9:00 до 18:00 по московскому времени -
                                позвонить по телефону <strong>+7 (495) 991-07-55.</strong>
                            </p>
                            <p>
                                Подробная контактная
                                информация и доступные
                                способы связи
                                <a href="#">размещены здесь.</a>
                            </p>
                        </div>
                    </div>    
                </div>    
            </div>
        </div>
    </div>            
    
    <footer class="footer">    
        <div class="g-container"> 
            <div class="footer-excursion">
                <div class="footer-excursion-container">
                    <div class="footer-excursion-title">
                        <p class="description-title-text">Рекомендуем по темам</p>
                        <div class="description-line">
                            <div class="description-line1"></div>
                            <div class="description-line2"></div>
                        </div>
                    </div>
                    <div class="body-excursion__container-net-big"> 
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

                    <div class="body-excursion__container-net-small">
                        <a href="#" class="body-excursion__arrow-small body-excursion__arrow-small-left">
                            <i class="fa fa-angle-left"></i>
                        </a>

                        <div class="body-excursion__slides swiper-wrapper">
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

                        <a href="#" class="body-excursion__arrow-small body-excursion__arrow-small-right">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div> 

                    <div class="footer-excursion-button">
                        <div class="g-container-box home-button">
                            <a href="" class="g-button">Посмотреть все экскурсии</a>
                        </div>
                    </div>
                </div>
            </div>  
  
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
                        <a href="#" class="footer-contacts-chat-vk"></a>
                        <a href="#" class="footer-contacts-chat-fb"></a>
                        <a href="#" class="footer-contacts-chat-tg"></a>
                    </div>
                    <p class="footer-contacts-chat-text2"><i class="fa-regular fa-copyright footer-copyright"></i> 2022 VIVO Tour</p>
                </div>
                <div class="footer-contacts-numbers">
                    <a href="#" class="footer-contacts-numbers-mail">support@vivotour.ru</a>
                    <p class="footer-contacts-numbers-phone">+7 (495) 991-07-55</p>
                    <p class="footer-contacts-numbers-hours">Без выходных </br>09:00-18:00 по Москве</p>
                </div>
                <div class="footer-contacts-mailing">
                    <p class="footer-contacts-chat-text1">Узнайте первым о скидках и акциях</p>
                    <form class="footer-contacts-mailing-form">
                        <input class="footer-contacts-mailing-input" type="text" placeholder="Ваш email">
                        <button class="footer-contacts-mailing-button" type="submit">подписаться</button>
                    </form> 
                    <p class="footer-contacts-mailing-text">Нажимая кнопку Пописаться, вы соглашаетесь </br>с политикой <a herf="#" class="footer-text-border">персональных данных.</a></p>
                </div>
                <div class="footer-contacts-icons">
                    <a href="#" class="footer-contacts-icons-logo"></a>
                    <div class="footer-contacts-icons-massengers">
                        <a href="" class="footer-contacts-icons-inst"></a>
                        <a href="" class="footer-contacts-icons-vk"></a>
                        <a href="" class="footer-contacts-icons-tw"></a>
                        <a href="" class="footer-contacts-icons-fb"></a>
                    </div>
                    <a href="" class="footer-contacts-icons-logo-cards"></a>
                    <p class="footer-contacts-chat-text2-mobile"><i class="fa-regular fa-copyright footer-copyright"></i> 2022 VIVO Tour</p>
                </div>
            </div>
        </div>
    </footer>     
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

        <script src="/js/script-new.js"></script>
</body>
</html>