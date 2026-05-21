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
define( 'AUTH_KEY',         '0cc3i0lda6oastifral7h3jhja5gaeudly96sh15hi2r59ot4a70v1mh5ogagvq4' );
define( 'SECURE_AUTH_KEY',  'uewlvl3naaz7lwinfeijg6rbkf3nxotypr4tyukdup6odcbwbjmzsz61km1nc2nc' );
define( 'LOGGED_IN_KEY',    'tv56gi2c0ri5uj776n0zxeabinnya86jzmmnkg0eu37kosr2yoszho3brg0kvszu' );
define( 'NONCE_KEY',        'u8ghptqct4e3py9t3341uiim5okdfgodv77kkqqxloege2ny8wh8rzdebgnz1905' );
define( 'AUTH_SALT',        'a35w7sfapnx3a69lxwearaqboewr8qay5hlz4msmbkaqdlggahhzudq91dr91u4h' );
define( 'SECURE_AUTH_SALT', '777nyga6eqf1nfy0d4u1nqcf6v7wge3t9yb7wzjnuhm34f1qzryuhtit0cgsdmwx' );
define( 'LOGGED_IN_SALT',   'p9yr3g8vu03az3yhda9pqmkw9bohtbnylsxa99mn84y977hkb5bm7ybd48lm9tek' );
define( 'NONCE_SALT',       '1shgdl39uwzpghxhhjd46e1w5nj3h8husqacdh6l42mbdvoe17kk2duwe2ozhuhz' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-d66b0ea0-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-d66b0ea0-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . DIRECTORY_SEPARATOR );
}
require_once ABSPATH . 'wp-settings.php';
