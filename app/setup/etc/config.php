<?php defined( 'ABSPATH' ) || exit;

define( 'WPC_SETUP_CONFIG', ['bootstap' => 'hooks.php', 'welcome'  => false] );
define( 'WPC_REQUIRE_SYSTEM', ['php-version' => '>=7.2.33', 'wp-version' => '>=5.3.1', 'wc-version' => '>=4.3.1'] );
define( 'WPC_REQUIRE_PLUGINS', [ 'woocommerce/woocommerce.php' => [ 'name' => 'WooCommerce', 'url' => 'https://wordpress.org/plugins/woocommerce/'] ] );

define( 'WPC_SLUG', 'WPC' );
define( 'WPC_TITLE', __( 'WPC', 'WPC' ) );
define( 'WPC_URL', __( 'http://wpcplugin.com', 'WPC' ) );
define( 'WPC_VERSION', '2.0.1' );

define( 'WPC_PATH', dirname( __FILE__, 3 ) );
define( 'WPC_BASENAME', sprintf( '%s/bootstrap.php', 'wpc' ) );
define( 'WPC_URI', trailingslashit( plugin_dir_url( WPC_PATH ) ) );

define( 'WPC_LOGO_URL', WPC_URI . 'app/assets/img/logo.png' );