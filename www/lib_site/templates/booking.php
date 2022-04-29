<?
define('SEO_PAGE_NOINDEX', true);

set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . '/lib');

require "mail.php";

$excursion = current($_DATA['vi_excursion']['items']);
$excursion_title = html_entity_decode($excursion['title']);
$is_auto_booking = (bool)$excursion['is_auto_booking'];
$upfront_percentage = ($is_auto_booking ? 100 : $excursion['upfront']);
$has_upfront = ($upfront_percentage ? $upfront_percentage <= 100 : false);
$is_group_price = (bool)$excursion['price_excursion'];
$sum_rub = floor((!empty($_GET['upfront'])?$_GET['upfront']:0) * $_DATA['currency']['items']['eur']['rate']);
$booking_error = null;
if ($is_group_price) {
	$upfront_price = $excursion['price_excursion'] / 100 * $upfront_percentage;
	$price_excursion = $excursion['price_excursion'];
}

$tag_id = $excursion['vi_tag_id'];

// 'surname' is our pretty witty honey pot!
// ... && empty($_POST['surname'] - filled in means it's a bot
// ... $_POST['surname'] == $_POST['email'] - the last chance! - user seeing the 'surname' input means the css is not active and the label says 'Email' again
if ('POST' == $_SERVER['REQUEST_METHOD'] && (empty($_POST['surname']) || $_POST['surname'] == $_POST['email'])) {
	$params = get_post();

	// TODO insert and get id

	$order_num = rand(10000, 99999);

	// TODO validation

	$pay_by_date = strtotime('-1 day', strtotime($params['date']));

	$pay_query = "excursion=" . $_GET['excursion'] . "&order=" . $order_num . "&name=" . urlencode($params['name']) . "&email=" . $params['email'] . "&questions=" . urlencode($params['questions']) . "&phone=" . urlencode($params['phone']) . "&date=" . $params['date'] ."&paybydate=" . date("Y-m-d", $pay_by_date) . "&time=" . $params['time'] . "&num=" . $params['num'] . "&upfront=" . $params['upfront'] . "&total=" . $params['total'];

	$mail_recepients = make_mail_recepients($params['email']);
	$rcpt = $mail_recepients[0];
	$subject = "Заказ " . get_title_by_tag($tag_id, 1) . " №{$order_num}";
	$mail_message = "{$params['name']}, здравствуйте!

Вы оформили заказ на " . get_title_by_tag($tag_id, 2) . " \"{$excursion_title}\" на " . date("d.m.Y", strtotime($params['date'])) . ", {$params['time']}
Оплатите " . get_title_by_tag($tag_id, 2) . " до окончания срока бронирования! После оплаты мы сообщим Вам место начала " . get_title_by_tag($tag_id, 1) . " и контактную информацию гида. Регистрация завершится " . date("d.m.Y", $pay_by_date) . ", {$params['time']}

Итоговая информация по заказу:

" . mb_convert_case(get_title_by_tag($tag_id), MB_CASE_TITLE, 'UTF-8') . ": {$excursion_title}
Дата и время: " . date("d.m.Y", strtotime($params['date'])) . " {$params['time']}
Количество участников: {$params['num']}" . 
((isset($params['questions']) && trim($params['questions']))?"
Вопросы и комментарии: " . $params['questions']:"")
. "
					
Стоимость: EUR {$params['upfront']} (оплачиваете полностью на сайте).

Перейти к оплате: https://www.vivotour.ru/booking/?" . $pay_query . "

По любым вопросам обращайтесь в службу поддержки Виво Тур: {$_SITE['settings']['email_support']}, {$_SITE['settings']['phone']}
Наша служба поддержки также доступна в мессенджерах WhatsApp, Telegram, Viber


Спасибо!
До встречи!";

	if (true !== ($r = @mail_send($rcpt, $subject, $mail_message, null, ['name' => 'Служба поддержки Виво Тур', 'email' => $_SITE['settings']['email_support']]))) {
		//echo $r;
		$error[0] = 'Непредвиденная ошибка при бронировании. Пожалуйста, попробуйте еще раз чуть позже.';
	}

	$order_details = '';
	$order_details .= mb_convert_case(get_title_by_tag($tag_id), MB_CASE_TITLE, 'UTF-8') . ": " . $excursion_title . "\n";
	$order_details .= "Дата и время: " . date("d.m.Y", strtotime($params['date'])) . " {$params['time']}\n";
	$order_details .= "Количество участников: {$params['num']}\n";
	if (isset($params['questions']) && trim($params['questions'])) {
		$order_details .= "Вопросы и комментарии: " . $params['questions'] . "\n";
	}

	$order_details .= "\n";
	$order_details .= "Имя: " . $params['name'] . "\n";
	$order_details .= "Email: " . $params['email'] . "\n";
	$order_details .= "Телефон: " . $params['phone'] . "\n";

	$admin_message = 
		$order_details . 
		"\n\n----------- Копия сообщения, отправленного на адрес {$params['email']} -------------\n\n" .
		$mail_message;

	$mail_recepients = make_mail_recepients($_SITE['settings']['email_booking']);
	foreach ($mail_recepients as $rcpt) {
		@mail_send($rcpt, $subject, $admin_message);
	}

	if (!$error) {
		header("Location: ./?" . $pay_query);
		exit;
	} else {
		$booking_error = $error[0];
	}

} ?>
<div class="body-content ">
		<div class="g-container">
		  <div class="g-container-box">
			<?	if (isset($_GET['order'])) { ?>
					<h1>Оплата <?=get_title_by_tag($tag_id, 1)?> и резервирование мест</h1>
			<?	} else { ?>
					<h1><?=$excursion['title']?></h1>
			<?  } ?>
			</div>
		</div>	
    <div class="g-container">
        <div class="g-container-box single">
            <aside class="details">
                <div class="details__items">
                    <div class="details__title">
										    <?=get_title_by_tag($tag_id, 0, $excursion['type_id_lookup'])?>	
										</div>
                    <div class="details__item"><span class="details__item-title">Длительность</span> <?=out_duration($excursion['duration'])?></div>
                    <div class="details__item"><span class="details__item-title">Размер группы</span> до <?=$excursion['people_max']?> человек</div>
                    <div class="details__item"><span class="details__item-title">Дети</span> Можно с детьми</div>
                <?  if ($excursion['extra_info4']) { ?>
                        <div class="details__item"><div class="details__item-title">В стоимость включено</div><?=nl2br($excursion['extra_info4'])?></div>
                <?  }
                    if ($excursion['extra_info5']) { ?>
                        <div class="details__item"><div class="details__item-title">Не входит в стоимость</div><?=nl2br($excursion['extra_info5'])?></div>
                <?  } ?>
                </div>
                <div class="details__price">
                <?  if ($is_group_price) { ?>
                        <div class="details__item"><span class="details__price-number">€<?=$excursion['price_excursion']?></span> за <?=get_title_by_tag($tag_id, 2)?></div>
                <?  } else if ($excursion['price_person']) { ?>
                        <div class="details__item"><span class="details__price-number">€<?=$excursion['price_person']?></span> за человека</div>
                <?  } ?>
                </div>
            </aside>
        <?	if (isset($_GET['order'])) { 
        		$order_num = $_GET['order']; ?>
	        	<div class="details">
	            	<div class="order__status">
	            		<div class="order__status-message">
	            			Ваш заказ <span class="order__status-number">№<?=$order_num?></span>
	            		</div>
	            		<div class="order__status-badge order__status-pending">
	            			Ожидает оплаты
	            		</div>
	            	</div>
	            	<ul class="order__preview">
	            		<li>
	            			<span class="order__preview-label"><?=get_title_by_tag($tag_id)?></span>
	            			<?=$excursion['title']?>
	            		</li>
	            		<li>
	            			<span class="order__preview-label">Дата встречи</span>
	            			<?=date("d.m.Y", strtotime($_GET['date']))?>
	            		</li>
	            		<li>
	            			<span class="order__preview-label">Начало в</span>
	            			<?=$_GET['time']?> (время местное)
	            		</li>
	            		<li>
	            			<span class="order__preview-label">Продолжительность</span>
	            			<?=out_duration($excursion['duration']); ?>
	            		</li>
	            		<li>
	            			<span class="order__preview-label">Участников</span>
	            			<?=$_GET['num']?>
	            		</li>
	            		<li>
	            			<span class="order__preview-label">Стоимость итого</span>
	            			€<?=$_GET['total']?>
            				<div style="display: inline-block; width: 300px; vertical-align: top;">
            				
            			<?	if ($is_auto_booking) { ?>
            					(полная стоимость <?=get_title_by_tag($tag_id, 1)?>, оплачивается на сайте)
            			<?	} else { ?>
            					(€<span><?=$_GET['upfront'] ?></span>– предоплата, оплачивается на сайте
            					и €<span><?=$_GET['total'] - $_GET['upfront'] ?></span> – окончательная
								сумма, которая оплачивается гиду после <?=get_title_by_tag($tag_id, 1)?>)
						<?	} ?>
							</div>
	            		</li>
		            </ul>
	            	<br><br>
	            	<div style="margin-right: 400px;">
		            	<p>
		            	Для завершения бронирования внесите <?=!$is_auto_booking ? 'предварительную' : ''?> <span class="g-bold">€<?=$_GET['upfront']?></span> с банковской карты<!--или банковским переводом-->. После оплаты Ваше участие будет подтверждено, и станут известны контактные данные гида и место встречи. Деньги с карты списываются в рублях РФ.
		            	<br />
		            	Сумма к оплате: <span class="g-bold"><?=$sum_rub?> руб.</span> (курс евро = <?=$_DATA['currency']['items']['eur']['rate']?> руб.)
		            	</p>
		            	<p>
		            	Для оплаты
		            	можно использовать карту любого банка в любой валюте - конвертация в рубли произойдет автоматически по текущему курсу евро банка, которым выпущена ваша карта. Необходимо внести <?=!$is_auto_booking ? 'предоплату' : 'оплату'?> не позднее <?=date("d.m.Y", strtotime($_GET['paybydate']))?>, <?=$_GET['time']?>.
		            	</p>
	            	</div>
		           	<div class="creditCardForm">
		           	    <div class="heading">
		           	        <h1>Оплата заказа</h1>
		           	    </div>
		           	    <div class="cards">
		           	        <img src="/images/card/visa.svg" id="visa">
		           	        <img src="/images/card/mastercard.svg" id="mastercard">
		           	        <img src="/images/card/mir.svg" id="mir">
		           	    </div>
		           	    <div class="payment">
		           	        <form action="https://money.yandex.ru/eshop.xml" method="post" target="_blank">
<? /*		           	            <div class="form-group owner">
		           	                <label for="owner">Имя и фамилия на карте</label>
		           	                <input type="text" class="form-control" id="owner">
		           	            </div>
		           	            <div class="form-group CVV">
		           	                <label for="cvv">CVV</label>
		           	                <input type="text" class="form-control" id="cvv">
		           	            </div>
		           	            <div class="form-group" id="card-number-field">
		           	                <label for="cardNumber">Номер карты</label>
		           	                <input type="text" class="form-control" id="cardNumber">
		           	            </div>
		           	            <div class="form-group" id="expiration-date">
		           	                <label>Срок действия</label>
		           	                <select>
		           	                    <option value="01">Январь</option>
		           	                    <option value="02">Февраль </option>
		           	                    <option value="03">Март</option>
		           	                    <option value="04">Апрель</option>
		           	                    <option value="05">Май</option>
		           	                    <option value="06">Июнь</option>
		           	                    <option value="07">Июль</option>
		           	                    <option value="08">Август</option>
		           	                    <option value="09">Сентябрь</option>
		           	                    <option value="10">Октябрь</option>
		           	                    <option value="11">Ноябрь</option>
		           	                    <option value="12">Декабрт</option>
		           	                </select>
		           	                <select>
		           	                    <option value="18"> 2018</option>
		           	                    <option value="19"> 2019</option>
		           	                    <option value="20"> 2020</option>
		           	                    <option value="21"> 2021</option>
		           	                    <option value="22"> 2022</option>
		           	                    <option value="23"> 2023</option>
			           	                <option value="24"> 2024</option>
				           	            <option value="25"> 2025</option>
					           	        <option value="26"> 2026</option>
						           	    <option value="27"> 2027</option>
							           	<option value="28"> 2028</option>
		           	                </select>
		           	            </div> */ ?>
		           	            <div class="form-group g-clearfix" id="pay-now">
		           	            	<div class="form-sumbit">
		           	            		<button type="submit" class="g-button" id="confirm-purchase">Оплатить <?=$sum_rub?> руб.</button>
		           	            	</div>
		           	            	<div class="form-sumbit-comment">
		           	            		<i class="fa fa-lock"></i>
		           	            		Оплата производится через Яндекс.Кассу. Мы не получаем и никаким образом не обрабатываем данные вашей карты. 
		           	            	</div>
		           	            </div>
		           	            <input required name="shopId" value="555105" type="hidden"/>
		           	            <input required name="scid" value="896221" type="hidden"/>
		           	            <input required name="sum" value="<?=$sum_rub?>" type="hidden">
		           	        	<input required name="custName" value="<?=$_GET['name']?>" type="hidden"/>
		           	       		<input required name="custEmail" value="<?=$_GET['email']?>" type="hidden"/>
		           	       		<input required name="customerNumber" value="<?=$_GET['phone']?>" type="hidden"/>
		           	        </form>
		           	    </div>
		           	</div>
	           	</div>
        <?  } else { ?>
            <div>
            <?	if ($booking_error) { ?>
	            	<div class="g-error">
	            		<?=$booking_error?>
	            	</div>
	            	<br>
	            	<a href=".">Вернуться к <?=get_title_by_tag($tag_id, 1)?></a>
        	<?	} else { ?>
	            	<div class="order">
		            	<form method="post">
		            		<div class="order__field">
					        	<label>
					        		Дата <?=get_title_by_tag($tag_id, 1)?>
					        		<input type="date" name="date" min="<?=date('Y-m-d')?>" max="<?=date('Y-m-d', strtotime('+1 year'))?>" required />
					        	</label>
					        </div>
					        <div class="order__field">
						        <label>
						        	Время
						        	<select name="time" required>
						        		<option value="">Выберите</option>
						        	<?	$DEFAULT_FIRST = 9.00;
						        		$DEFAULT_LAST = 17.30;
						        		$INTERVAL_MIN = 30;

						        		$time_first = ($excursion['time_first'] ? $excursion['time_first'] : $DEFAULT_FIRST);
						        		$start_time = ($whole = floor($time_first )) . ':' . ((($time_first ) - $whole) * 100);
						        		$time_last = ($excursion['time_last'] ? $excursion['time_last'] : $DEFAULT_LAST);
										$end_time = ($whole = floor($time_last)) . ':' . ((($time_last) - $whole) * 100);
										$interval_sec = $INTERVAL_MIN*60;
						        		for ($time = strtotime($start_time), $end = strtotime($end_time); $time <= $end; $time += $interval_sec) {
						        				$option = date("H:i", $time); ?>
						        				<option value="<?=$option?>"><?=$option?></option>
						        		<?	} ?>
						        	</select>
						        </label>
						    </div>
		            		<div class="order__field">
					        	<label>
					        		Сколько вас будет?
	    				        	<select name="num" required>
	    				        		<option value="">Выберите</option>
	    				        	<?	$people_max_count = count($excursion['people_max']);
	    				        		for ($i = 1; $i <= $excursion['people_max']; $i++) { ?>
	    				        			<option value="<?=$i?>"><?=$i?></option>
	    				        	<?	} ?>
	    				        	</select>
					        	</label>
					        </div>
		            		<div class="order__field order__field-lineup">
					        	<label class="name">
					        		Как вас зовут?
	    				        	<input type="text" name="name" required />
					        	</label>
					        	<label class="surname">
					        		Ваш e-mail
	    				        	<input type="text" name="surname" required />
					        	</label>
					        	<label class="email">
					        		Ваш e-mail
	    				        	<input type="text" name="email" required />
					        	</label>
					        	<label class="phone">
					        		Ваш телефон
	    				        	<input type="text" name="phone" required />
					        	</label>
					        </div>
		            		<div class="order__field">
					        	<label>
					        		Вопросы и комментарии (если хотите)
	    				        	<textarea name="questions"></textarea>
					        	</label>
					        </div>
					        <div class="order__comment">
					        	<div id="order__num-needed"<?=$is_group_price ? ' style="display: none;"' : ''?>>
					        		<span class="g-bold">Укажите количество участников</span>, чтобы мы рассчитали стоимость <?=get_title_by_tag($tag_id, 1)?>. Вам ничего не нужно оплачивать, пока вы не получите ответ и подтверждение гида.
					        	</div>
					        	<div id="order__price"<?=!$is_group_price ? ' style="display: none;"' : ''?>>
						        <?	if (100 == $upfront_percentage) {
						        		$upfront_price = $excursion['price_excursion'];
						        	} else {
						        		$upfront_price = ceil($excursion['price_excursion'] / 100 * $upfront_percentage);
						        	} ?>
						        	Стоимость <?=get_title_by_tag($tag_id, 1)?> — <span class="g-bold">€<span id="order__price-total"><?=$excursion['price_excursion']?></span></span>
						        <?	if (!$is_group_price) {?>
						        		(€<?=$excursion['price_person']?> за человека)
						        <?	} ?>
						        	.
						        <?	if ($has_upfront) { ?>
						        	<span id="order__price-breakdown">
						        		После подтверждения бронирования <?=get_title_by_tag($tag_id, 1)?> вы оплачиваете €<span id="order__price-upfront"><?=$upfront_price?></span> на сайте<?
						        			if ($price_rest = $excursion['price_excursion'] - $upfront_price) { ?>,
						        				а €<span id="order__price-rest"><?=$price_rest?></span> на месте
						        		<?	} ?>.
						        	</span>
						        <?	} ?>
						        </div>
					        </div>
					        <input type="hidden" name="upfront" value="<?=$is_group_price ? ($has_upfront ? $upfront_price : $price_excursion) : 0 ?>" />
					        <input type="hidden" name="total" value="<?=$is_group_price ? $price_excursion : 0 ?>" />
					        <button type="submut" class="g-button">Забронировать <?=get_title_by_tag($tag_id, 2)?></button>
				        </form>
			        </div>
		    <?	} ?>
            </div>
        <? } ?>
        </div>
    </div>
</div>
<script>
	$(".order__field .surname input").removeAttr('required');

<?	if (!$is_group_price) { ?>
		var price_person = <?=$excursion['price_person']?>;
		$("[name='num']").change(function() {
			var num_persons = $(this).val();
			var price_total = price_person * num_persons;

			$("[name='total']").val(price_total);

			$("#order__price-total").text(price_total);

		<?	if ($has_upfront) { ?>
				var upfront_percentage = <?=$upfront_percentage?>;
				var price_upfront = Math.ceil(price_total / 100 * upfront_percentage);
				var price_rest = price_total - price_upfront;

				$("[name='upfront']").val(price_upfront);

				$("#order__price-upfront").text(price_upfront);
				$("#order__price-rest").text(price_rest);
		<?	} else { ?>
				$("[name='upfront']").val(price_total);
		<?	} ?>

			if (num_persons > 0) {
				$("#order__num-needed").hide();
				$("#order__price").show();
			} else {
				$("#order__num-needed").show();
				$("#order__price").hide();
			}
		});
<?	} ?>
</script>