<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'deneme' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4X]`,M^2w/[2d6P==>!L{A:-Z ;_fk_>Z%hW|k:F6)?mU}M3)m53yZhdCv*OZ2jT' );
define( 'SECURE_AUTH_KEY',  'NV$3sjr0>@i#DK7B7r`1:1_!9g50@hprD[VM|yg~Uy_M|wzZGle]QjcD([~&]Jy(' );
define( 'LOGGED_IN_KEY',    'S<*8SVsMv_A0-1ykkJ&ri;kI>2Na%, q8Gp9>{C25Yi;J#6:_;G6zRJY@E#DD>I,' );
define( 'NONCE_KEY',        '%w:*|uza2Bgf?iWL_NT>~QprU#PVH/`DZN~$jqZ.iV%/9A%gX}gN+m|FW3h-ba)%' );
define( 'AUTH_SALT',        'M&+%.U&da4H<V}tlt~CSE-zGk(3=Ckno>w.4U<H:ssh&qMh9n3:z}#nF^Pq&^o-L' );
define( 'SECURE_AUTH_SALT', 't+Gb%]LKIn4t4!FOwhkNfhZLq$lC4B(}1yuM/uRpB16nOyxbcm.|!6)~a~CcsmfK' );
define( 'LOGGED_IN_SALT',   'lMl>&2T8fL.b`|$:,u|R+B?ZtbY7^>-8u1] h&rR9TbX4;grQ+A3)95v*)-R<z27' );
define( 'NONCE_SALT',       '`D$@i[G,Ijx#7n7tdo2}lf,o@elyl)|1WFWv7M;WSKa=Xz}PfQ*yi6[v,[6r/AFh' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
