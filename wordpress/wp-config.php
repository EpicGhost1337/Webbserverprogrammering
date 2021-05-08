<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wordpress');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0z-Zbm5rfzlXMg:inE1lQ%}G=p>BeX~pd%mpJ+GR2w}l[cti%SHb|tr_7PcDa?$G');
define('SECURE_AUTH_KEY',  'bG@ML2mk[0YcjntWm1X4(w$xsBIn+Dzn4B}V`5#A;ExU*uq8N^sd@JW8aA.XMyeY');
define('LOGGED_IN_KEY',    'hs)q_vH+tM)[f9szQf.-lh5j>p5FpA)LDFXa}si/1bd2&g$Rd>f[_Q-%?Qs{>o3H');
define('NONCE_KEY',        '+=ATiw9k%{Osd;J0oFgD0S_mYr=9(F:lQ#4E*z6d|7E8{C[xT/*=$*kZ@g1Nn83/');
define('AUTH_SALT',        '<U/lHd;:sf`Cl.6M bf!7r!vN3xF*<f0Uip2ioRw!4g!%r3n1nPTExSqJjX$rp6n');
define('SECURE_AUTH_SALT', 'GUqa8z<p_r/aw/s$w(S[]`Q4e>=tkZjLY[20j6bL<jS8|r 1OjJ?=0M:Jr0zTK:A');
define('LOGGED_IN_SALT',   '5@mrwio5.)M*TkAR#=a4$ w`f#19(rs;uqc=wI{B6smp*8#V<}S@cVJkvEr(ex{B');
define('NONCE_SALT',       'r}|$H3,2Q,[I2<8-BMFDC*qv:)]0RRMb[[=m]O=7h0soBGMU/8, YF@h`q1!ay.r');

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');