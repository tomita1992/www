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
define( 'DB_PASSWORD', 'cui02093920' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'NJ9jfBRNQ4lUDwStWB=.an^)GeFf%m>b_@.[7B0t0F?M9XPn Y9)|[L$A}SdGT^m' );
define( 'SECURE_AUTH_KEY',  '8H2lUzhC]BbiaYHZ1-rQl1E3:*b4q^S2cb0pnEo=J0/+mO`p@SnM!)9,n@W&MKM[' );
define( 'LOGGED_IN_KEY',    ')PdLbd[o%4Z~MutM&8ozov.?f.|op)qA*+rAN/|3Y7;n?Yh/I/fb>`~,P^k!)Se{' );
define( 'NONCE_KEY',        '.fatprg$Q}PxkT*-v w75!H+dV>`C>h~qjGqr4No9>)q&Dluk?r<o/Pf$+9vz.D#' );
define( 'AUTH_SALT',        'W=P/W[|`$5kiOy9a&k4&1(jnR/sKD%j?;o,:>8f!LJ;W#7 cY_nqGwl#/LMmJws`' );
define( 'SECURE_AUTH_SALT', 'sV:`EzC@9*ADA`|9nAgV8vy)Z-q(jM5m/j;nmja6<*<,b^1 `C49d+[SB9a6`,NA' );
define( 'LOGGED_IN_SALT',   '3)O&NgJH<FCsI)i_#(|dB/mgLBo#Vn!M*b9!u:D75,1-b3My)N<}ZLt-z=$x]*1 ' );
define( 'NONCE_SALT',       'yfeNB1}jl>f36q2tZ#[,dc=9 DdfO7&KCCNCxSlE_R[C9hm$B>899d[fXW7^456t' );

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
