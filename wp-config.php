<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'la vie des plantes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'g 25<?7+R]RBBHO>H~B3_0P#$mu8DDy$@;iIF,Yu?Dt?O[*oV.[=DO(!U)}3o% 8' );
define( 'SECURE_AUTH_KEY',  '&)&u4!v[Vn#nUXp%1L_F<r+3wxBh? e)DODY0yNvyJpZxAJy5ZOLy&,[-$>dJ S}' );
define( 'LOGGED_IN_KEY',    'P?}D+3nA>20di.V At|Cw8aqy>ta~iBbSDMabP(c,]uSZZ,JX54;Q} aJqb(*m0}' );
define( 'NONCE_KEY',        'O }XkCOh1W#>$bNFhQ[(e{`}N`w:;IbGpV<]v}2vH4?f$S?)XIeI5<.V+=t} #rO' );
define( 'AUTH_SALT',        'ZwfO.1nR<k&+[-HHF(i__ycZ1K-01Da*gY4Dn#*Z.*Jhd(@&oANITh,kh VDa6vc' );
define( 'SECURE_AUTH_SALT', 'BH17]wiqTqyZt3!i$0u@At0=pEJB`ce#~)Rqx(au]x!s-TCEK|[KxN 3N1mz2r~,' );
define( 'LOGGED_IN_SALT',   'S6[KdQDl47tlaMTWekV&%=tB>G86w4S{OkYp$0S<f}VGpm_1UVRJ-p)2[|:Zw5$/' );
define( 'NONCE_SALT',       'Z-}o=XYtp|sBw-#K4}_3pzn1IkHY8+iIqn&xCoBhuzN5tZ|Y]WOHu^p9d.S3BWcG' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
