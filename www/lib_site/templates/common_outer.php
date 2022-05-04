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
<div class="body">
	<header>
        <div class="g-container">
            <div class="g-container-box">
            	<div class="header">
                    <div class="header-top">
                        <div class="header-logo">
                            <a href="/">VIVO tour</a>
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
                        <div class="header-contacts">
                        	<? /*<div class="header-contacts-text">Звоните, спрашивайте!</div> */ ?>
                            <div class="header-contacts-phone"><?=$_SITE['settings']['phone']?></div>
                            <div class="header-contacts-hours"><?=$_SITE['settings']['phone_hours']?></div>
                        </div>
                    </div>
	            </div>
            </div>
        </div>
    </header>


   	<?=$__CMS__INNER_TEMPLATE_CONTENTS?>


    <footer>
        <div class="g-container">
            <div class="g-container-box">
                <div class="footer-btl">
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
                </div>
            </div>
        </div>
    </footer>
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
</body>
</html>