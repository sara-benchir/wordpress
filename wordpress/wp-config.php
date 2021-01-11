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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'oM1wl]ah:PJ@9/+9Y?X.B#&U nz&-*3?:cEfdch%uXTsjIFbLs[|em(+ts%1Gh $' );
define( 'SECURE_AUTH_KEY',  ';E7qxwX}oVn9kjst6kFm}7F_?71!Cx6-Gu(?cNa$Mv!@/&@<*kBg.`0oJ#XOSSKL' );
define( 'LOGGED_IN_KEY',    'kxIq9?eB+xYuDKuE<vni`IFOe<_1pa%Z^9tb*o]pWCYVe}~3l>aK~ G. dX##0#1' );
define( 'NONCE_KEY',        'CxsSZLxiB>6ZXt1 e^QWDOi`;2DYxbUE]6`na))yhf|bT:BYZp0BMi~@33iLz4$b' );
define( 'AUTH_SALT',        ' B,k}q0r%BQ&o~Bvg4t ~8emQ^uF=V3Q1p@[.jYp_7#2I<QI|vzyNX,x!/,G6Q(|' );
define( 'SECURE_AUTH_SALT', '-3=P%K;T,R7TW5]0sNt2g_itWq~$~K4GpJ,(Y~h_J_XXVwb& >]4=y|E80ol$da3' );
define( 'LOGGED_IN_SALT',   '@f$KO^-L{sqn0tOtglb$;WKjySI%0XN`>1Fg,0Uwr~OIX1&9>`!D$eC`?@%$*6ed' );
define( 'NONCE_SALT',       'Nn0ug.AFFxf}t,bjVEc=D.i@`|/5+r9WVI=GNljtC;pI:4BR6=sezF]0f8`rxo68' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
