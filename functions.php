add_filter( 'woocommerce_product_single_add_to_cart_text', 'codeithub_add_symbol_add_cart_button_single' );
 
function codeithub_add_symbol_add_cart_button_single( $button ) {
$button_new = '&raquo; ' . $button;
return $button_new;
}
