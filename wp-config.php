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
define( 'DB_NAME', 'gelinlikcollection_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'Sananelan12' );

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
define( 'AUTH_KEY',         'iW<2ivH7w-A3b3UZ}7Uiz9@=.<*{S~~_x[WfusRtTpMER8RKmt[ShP)8--bT)pb5' );
define( 'SECURE_AUTH_KEY',  ';b>5j8tE+qrR>H0[GcJNt@zm9CX<_WoyB5uX@[y/xYH =1vjlmMq-1&ek=X@#Ffq' );
define( 'LOGGED_IN_KEY',    'j{ PD_hG~><X1Ej3u*[2I81|^JIBPd%}X8$`9=AV`F&f$MAn4WGXO)PY(rHH$p|7' );
define( 'NONCE_KEY',        'Z/8r!K`G1[e<9=Le!WgVlkoI$v s}4ANqw~?Y|=$f[9Pet9L=<qu=<NB8VLtmRg8' );
define( 'AUTH_SALT',        ';-<j ^;yvfEg~Zv.7[Ob?Sv/+h2tgv~gs7e$LBU^Wsu[3RB%n<m5NQW>vXLomc3A' );
define( 'SECURE_AUTH_SALT', 'DnV5mO.gslS,v95I^FK:hp+po>#mMG+kd&ns}87p X0z+ZU8*DYbNSZU#^.RG9?V' );
define( 'LOGGED_IN_SALT',   '2&Va-LAz&gRz#pNNPibGtpAhDmiap_,I(&ESe3~(!bMV>WvGxpr49=-@;]/KLp5B' );
define( 'NONCE_SALT',       'Km~_fQ}{q*x(>_@-6CX-4 3ROEN4a6a~?j7Q$4qZ]mST3.xQ<sduAtltc}gt`MV)' );
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
