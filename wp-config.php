<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'find6friends' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K1rM#aup5&<z*>B5{H%6~+Ht^T1yCWjI=}4U?QjcAN~iLC$F~>U2W/?bH51|icNR' );
define( 'SECURE_AUTH_KEY',  '7Yz0<de|ku7~FtR5:F2YVnAv;FQHi9U>.$w9LX.^<~W 4~.,^)|D)i&TG9L1g#Z%' );
define( 'LOGGED_IN_KEY',    'i$=Sth;.~8M@OTJ*J~C3vi6Qd$_<+0a+%?RJjj$k{$wenyH[$)^8mP4(P`fQT2$^' );
define( 'NONCE_KEY',        'mRQB`e~DPp;Zlg9ael)3+@+=q/}eva>G(iq5I}XG!HkRtb3V+/yWcE:eY$F^_!kM' );
define( 'AUTH_SALT',        'g*q}`Xytpra!ta:[:|Q0IK@N;_T$G(@bW^#~PrDigoU9`Yg,o5yf!*3jP?s_ -_8' );
define( 'SECURE_AUTH_SALT', 'F^wxn1L?![NM#m#G(k?KtcNtb`aa=P!*k6TNih<7~(*j[8y7_Gf=NU(zS&Z`Y~6/' );
define( 'LOGGED_IN_SALT',   'IK}=s(<K-Yk2Y+9/YNeObB$3d,B< B$osjbe# htScY%RR;``:1tjLDL%l|%gct0' );
define( 'NONCE_SALT',       'zygFB2sA:XJ()bf9#w%`YOEt#Li%QqOTPSqDc4Fy?R$?5j;*B*vK3sy:?mpVi]TP' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
 // Activer le mode WP_DEBUG
 define('WP_DEBUG', true);

 // Activer l'enregistrement de débogage dans le fichier /wp-content/debug.log
 define('WP_DEBUG_LOG', false);
 
 // Désactiver l'affichage des erreurs et des alertes 
 define('WP_DEBUG_DISPLAY', false);
 @ini_set('display_errors',0);
 
 // Utiliser les versions de dev des fichiers JS et CSS du noyau (nécessaire seulement si vous modifiez ces fichiers)
 define('SCRIPT_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
