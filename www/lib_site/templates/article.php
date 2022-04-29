<?
if (!isset($_DATA['article']['items'])) {
	define('SEO_PAGE_NOINDEX', true);
	exit;
}

$banner = current($_DATA['banner']['items']);
$article = current($_DATA['article']['items']);
?>
<div class="index-hero" style="background-image: url('<?=$banner['img_src']?>')">
    <div class="g-container">
        <div class="g-container-box">
        
            <div class="home-promo">
                <h1><?=$article['title']?></h1>
            </div>

        </div>
    </div>
</div>
<div class="body-content">
    <div class="g-container">
        <div class="g-container-box text-content">
        	<?=$article['body']?>
        </div>
    </div>
</div>
