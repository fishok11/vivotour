$(function() {
	/* sticky header */
/*	$(window).scroll(stick_header).resize(stick_header);
	
	function stick_header() {
		if (document.body.scrollWidth > document.body.clientWidth) {
			$('body').removeClass('header-fixed');
			$('header').css("width", "auto");
			return;
		}

//	   $(".header-menu-submenu").removeClass("active");
		if ($(window).scrollTop() > 178) {
		   $('body').addClass('header-fixed');
		   setTimeout("$('.header').addClass('active')", 0);
		}
		else {
		   $('body').removeClass('header-fixed');
		   $('.header').removeClass('active');
		}
	   $('header').css("width", $('header').parent().width() + "px");
	}*/

	/* menu */
	$(".header-menu-item.w-submenu").children("a").click(function(event) {
		var $submenu = $(this).next(".header-menu-submenu");
		if ($submenu.is(".active")) {
			$submenu.removeClass("active");
		} else {
			$(".header-menu-submenu").removeClass("active");
			$submenu.toggleClass("active");
		}
		event.stopPropagation()
		return false;
	});
	$(".header-menu-submenu").click(function(event) {
		event.stopPropagation()
	});
	$(document).click(function() {
		$(".header-menu-submenu").removeClass("active");
	});
	
	/* property details bookmarks */
	$("#bookmarks_gallery").click(function() {
		$("#detail_gallery_gallery").show();
		$("#detail_gallery_video video")[0].pause()
		$("#detail_gallery_video").hide();

		$(".detail-gallery-bookmarks-item").removeClass("detail-gallery-bookmarks-item-active");
		$(this).addClass("detail-gallery-bookmarks-item-active");
	});
	$("#bookmarks_video").click(function() {
		$("#detail_gallery_gallery").hide();
		$("#detail_gallery_video").show();

		$(".detail-gallery-bookmarks-item").removeClass("detail-gallery-bookmarks-item-active");
		$(this).addClass("detail-gallery-bookmarks-item-active");
	});

	/* forms */
	$(function() {
		$("[name$='_min'], [name$='_max']", $(".form-field-range")).change(function() {
			$range_span = $(this).closest(".form-field-range");
			var value_min = $("[name$='_min']", $range_span).val();
			var value_max = $("[name$='_max']", $range_span).val();
			if ("" !== value_min || "" !== value_max) {
				$("[type='hidden']", $range_span).val((value_min?value_min:"") + "-" + (value_max?value_max:""));
			} else {
				$("[type='hidden']", $range_span).val("");
			}
		});
	});
	
	/* misc */
	var hm_html = '<a href="mzfailzfto:trzfavel_e_tvzfivozftour.zfrzfu">tzfravel_e_tvivzfotozfur.zfruzf</a>';
	$("#hm").html(hm_html.split('zf').join('').split('_e_t').join('@'));

/*	$(".form-validate").submit(function() {
		var res = true;
		$(".required", this).each(function() {
			if ("" == $(this).val()) {
				res = false;
				$(this).addClass("form-input-invalid");
			} else {
				$(this).removeClass("form-input-invalid");
			}
		});
		return res;
	});*/
	
	/* accordion */
	$(".acc-block-control").click(function() {
		// sic! $__block_control is global
		$__block_control = $(this);
		var $block = $(this).parent();
		var $block_body = $(".acc-block-body", $block);
		if (!$.hasData($block_body[0])) {
			$block_body.css({"visibility": "hidden", "max-height": "none"});
			$block_body.data("actual_height", $block_body.height() + "px");
			$block_body.css({"max-height": 0, "visibility": "visible"});
			setTimeout("$__block_control.click()", 0);
			return false;
		}
		if ($block.is(".active")) {
			$block_body.css("max-height", 0);
		} else {
			$block_body.css("max-height", $block_body.data("actual_height"));
		}
		$block.toggleClass("active")
	});
	
	/* flex slider */
	$('.detail-gallery-thumbs').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 173,
		itemMargin: 5,
		asNavFor: '.detail-gallery-view'
	});
	$('.detail-gallery-view').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: ".detail-gallery-thumbs"
	});
});

function text_format_quantity_ru(num, format) {
	// usage: text_format_quantity_ru(price, ['рубль', 'рубля', 'рублей'])
	num = num.toString();
	var a = num.substring(num.length-1, 1);
	var b = num.substring(num.length-2, 2);
	if (a==1 && b!=11) return format[0];
	if (a>=2 && a<=4 && b!=12 && b!=13 && b!=14) return format[1];
	if (a==0 || (a>=5 && a<=9) || (b>=11 && b<=14)) return format[2]; 
}
