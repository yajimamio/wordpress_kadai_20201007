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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wl$LmPz_hkZZb~qHaz}aXh]q}z%c,n_0(}#WKOQ^hhY~T~x.A:|, lf6>@}*[mCt' );
define( 'SECURE_AUTH_KEY',  'WH@jVpkWdx,pi7gsC2<5y4%&`_`7}q8!r#tz6RI}g@eEp)^11]J,+FdcidHb=O _' );
define( 'LOGGED_IN_KEY',    '|}Udc2q,(`uZJlg(:```};2(%eI1h#1mEyjenOJcEQ$ptYEo8$D7*5R:.~&Xpxq.' );
define( 'NONCE_KEY',        'sJv|zAjal|=uj?f0_AH6 p,rr1@n|:O1%2T(HLoc):2^h6rJ,{@@(#H[%YQW3u?v' );
define( 'AUTH_SALT',        '/FaB!wVeT4*<{}LP.I.y-t?]xPI^./#r@6jVZK>Xd:23[@PO~s7xVd-0wr `pGeI' );
define( 'SECURE_AUTH_SALT', 'm2px/wc&[@9%vaG?1TV#KYKR30_u1@iq/Nj Qx6]e1?4 4bnG2X+3a94rW,KgfIG' );
define( 'LOGGED_IN_SALT',   '$1g DabH0!=GvD9tXpv7oGTr4HCejqw?]&cE3t)!7a(*O[Z?M/Nc>)iGK2?.8[+9' );
define( 'NONCE_SALT',       '_TR$T>PyF4hsV~3hC;Q/7^|PXnmkv<g?$lJaNH(,zC?w?PxK(2 <=0cCMyIG;m4~' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
