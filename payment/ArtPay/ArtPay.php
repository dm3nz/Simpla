<?php
class ArtPay extends Simpla
	{
		$order = $this->orders->get_order((int)$order_id);
		$price = round($this->money->convert($order->total_price, $payment_method->currency_id, false), 2);
		$ap_data['ap_storeid'] = $payment_settings['ap_storeid'];
		// описание заказа
					'<input type=submit class=checkout_button value="'.$button_text.'">'.
					'</form>';
		return $button;