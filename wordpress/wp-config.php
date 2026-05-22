<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'oz9e9u7r55ci6zujtzmnt5x4acqtvda9glai6yb1phgs3uzyt2gg6v4soyu2bxat' );
define( 'SECURE_AUTH_KEY',  'f93j4g8f7xyd6p7aec8f2996z73ia2r7v45dch1cazr91jfokunhill5jbeg7v1d' );
define( 'LOGGED_IN_KEY',    'bi81aqj7np24o6zl9xk0qszw5djqco4ovagfdr603jw9rfb1v0txsagpnfgu17ma' );
define( 'NONCE_KEY',        'w2stwxm9cwp11f8xqm1305f8w31bx7rxvyx587rz3hhfi4km2skgq6tm2vjwwlha' );
define( 'AUTH_SALT',        'a4yyaudklhtmuav3vrxby2ispsirk6trrusv9fx3czjw2r0mea8a3xbezmyfjwbg' );
define( 'SECURE_AUTH_SALT', 'q5phlrdkrlwiyc2aaw9x593cblnuxa9cakwvhgsvcs12ahgfqt0gribrvj1kq4f5' );
define( 'LOGGED_IN_SALT',   '6kximd4if11ql4uexa1oxi7z2hj230ju5fwunuumiuuk92nx8b06lud67adwxu03' );
define( 'NONCE_SALT',       'bkvwke90zqiqaazgmyvo9sps85jbvyru35iua1jwr2gwfdfieu5qy2hk9um1oycm' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-d441c9dd-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-d441c9dd-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
