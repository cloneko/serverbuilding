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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'iamnotatngn');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y|IikPLEKO2@o01P;ZC}oK}E|Z7},iq5#<I&O3?2E}rY&AH7y9:C`ZWWAI-xpzv(');
define('SECURE_AUTH_KEY',  '8t[|V8r8x(XGYnY*ggx|6AE4/yxNED{<SIti5;t-MTKhmw!NrcMeq[0-19:bbD:F');
define('LOGGED_IN_KEY',    '(5,~]~}OA_rvPQVm%f)-N]%cG7R4_mI^iYvf2k-ue`2E-}5r4==83p0L-~no+Z1S');
define('NONCE_KEY',        '4<jy;s>)7k[JB.EzG,[me]SWRD&Jklaf39M@ZEAD[9S{KVhFKl[yqC$q#|<4r^)q');
define('AUTH_SALT',        '+f99:J[hmr]-1kpK9X$C~ }D8qWjRxnIxtLq>ZOW,3{wVqP)-E1Y/}`BJL8N_Mg1');
define('SECURE_AUTH_SALT', '-_f<EaX!,0w+o~L@IQU{(unHfn!qfbQt[rUBY$$cQ,NLD-b_)|NGWgN)290f>BY ');
define('LOGGED_IN_SALT',   'B0x5kk3}oH8MFDx{!y+>J|h2nZZ7g(PX>-e!)MB(s7O3kW%?-;+<~6++n&k5$Y:8');
define('NONCE_SALT',       '}!6>@7q`NuBxY<_|o{e<@Qs,fc7~Q^_<)-N)=v=/7:y&2RTTpb=$SMC$YL+ :tln');

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
