<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。
// Develop（localhost）
if (strstr(@$_SERVER["SERVER_NAME"], 'localhost')) {
  define('DB_NAME', 'g-growth');
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'cielciel');
  define('DB_HOST', '172.18.0.2:3306');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');
  //デバック有効化
  define('WP_DEBUG', false);
  define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
  define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST'].'/wp');
  }
  elseif(strstr(@$_SERVER["SERVER_NAME"], 'www.g-growth.com')) {
    define('DB_NAME', 'g-growth');
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'URgVcrEDnDXB');
  define('DB_HOST', 'localhost');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');
  //デバック有効化
  define('WP_DEBUG', false);
  define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
  define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST'].'/wp');
  }
 else {
// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'uek_co_jp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'uek');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'Jx97EzWS');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql.uek.co.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');
  //デバック無効化
  define('WP_DEBUG', false);
//  define('WP_HOME', 'https://'.$_SERVER['HTTP_HOST']);
//  define('WP_SITEURL', 'https://'.$_SERVER['HTTP_HOST']);
}


/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ur$<A x=XR|p$LRDEU[*IKcMZ^-+A#;T||AM5@Pg-?ev`SKUe >|G8OZKs=G3>^8');
define('SECURE_AUTH_KEY',  'K}@qQ?sXrdmMN}=|;)u5/t-jHOi1?C!]EJ2V#/zE&}fu21yg;+h;Q#r<W|^gD|B}');
define('LOGGED_IN_KEY',    '&$p5(|7f: PC`6>?7n(s:dIjQ^o)tW{nPa09o#,cMO4M*|?P >2tj6!:PLY<fjTW');
define('NONCE_KEY',        '`2$}3l|m+39_TAdTM?p[?@Nr#qJst7ok.4/EP+#*8YN,f{oz)QH|Xe!H#@xFHYr;');
define('AUTH_SALT',        '&~|*|(YM`ivviM|m_=Ro|{V4;AlWk:34upK!Ola9Vnr,UN=|~=(UluIxAYb_4K,%');
define('SECURE_AUTH_SALT', '$KgUXF#;goU,/+0/ O|D7`-Nz@i@{*GCZ&tN*|W$eu@R/k4MEdhHJ-&g_{63?#V5');
define('LOGGED_IN_SALT',   '+|%fY?%,0^pA*&w^(9fahxL.nZ$ ]*0a&bOn|VcY7N]yKz~xl7AC%{U|el-pmYbN');
define('NONCE_SALT',       '}RL6CXZm(Z/6|Y[?98YmAz-z?#{aky+=-/+6tNFyC&(3V[RiDL3mz=4XN6ydz1)#');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
