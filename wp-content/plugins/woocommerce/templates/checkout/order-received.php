<?php
/**
 * "Order received" message.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/order-received.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.8.0
 *
 * @var WC_Order|false $order
 */

defined( 'ABSPATH' ) || exit;
?>

<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
	<?php
	/**
	 * Filter the message shown after a checkout is complete.
	 *
	 * @since 2.2.0
	 *
	 * @param string         $message The message.
	 * @param WC_Order|false $order   The order created during checkout, or false if order data is not available.
	 */
	$message = apply_filters(
		'woocommerce_thankyou_order_received_text',
		esc_html( __( 'Thank you. Your order has been received.', 'woocommerce' ) ),
		$order
	);

	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $message;
	?>
</p>

<style>
    /* Toàn bộ chữ trong Thankyou page */
	.woocommerce-order,
	.woocommerce-order * {
		color: #1A0E0E !important;
	}

	/* Tên sản phẩm trong Thankyou page thành màu đỏ */
	.woocommerce-order-details .woocommerce-table__product-name a,
	.woocommerce-order-details .product-name a {
		color: #AF2522 !important;
		font-weight: 600;
	}


	/* Tiêu đề lớn hơn & đậm hơn */
	.woocommerce-order h2,
	.woocommerce-order h1,
	.woocommerce-thankyou-order-received {
		color: #1A0E0E !important;
		font-size: 28px;
		font-weight: 700;
		margin-bottom: 20px;
	} 

	/* Mã đơn, email khách, ngày đặt hàng */
	/* .woocommerce-order-overview li {
		font-size: 18px;
		font-weight: 500;
	}

	/* Tổng tiền trong bảng sản phẩm */
	/* .woocommerce-order-details .woocommerce-Price-amount {
		font-size: 20px;
		font-weight: 700;
	} 

</style>
