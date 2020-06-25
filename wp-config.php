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
define( 'AUTH_KEY',         '(i3T?wJ6c #Yz9UI`HWewsLu&.Q *CALCsz$Rs-|0!_R/t(~@R+p5w!}|0ql(w$A' );
define( 'SECURE_AUTH_KEY',  '9mD`T=9e=u=wuW$<yhI4[wilDcrrZ2|a(I.:>>N&D)em`zA-Or*`/N&}EOPpuSkF' );
define( 'LOGGED_IN_KEY',    'Y G#SgCMv#!sq{ly_2%y#)?3L*Gjkn<8wH!rz#_,rhFcB(#3,6WVa=wD}5]j>* ^' );
define( 'NONCE_KEY',        '.1WH^lp^,_DJ.R(yw&AdgKHsQ3$m;>y{A<miQ)5,h^q0Hd-X.YYodjL!9@r3Ze8e' );
define( 'AUTH_SALT',        'P.:{e1U7E_R}/7%KO9?{_&f3Pv&X5 rVHU9b)lN)/_|NaF.dsy O4] hGM[Ns)h%' );
define( 'SECURE_AUTH_SALT', '<WPlRzF6.*4f]b-*SC:3VP3`!+S%g1!aD4]i:d@&+/fKr`Aq]Q>ITKaUM|z514N7' );
define( 'LOGGED_IN_SALT',   'Wty.!od5PT?*uBZAqmNqW[4ziD[G!;$UNE35[$M3k73Bx3#}o.tL)YN1C1UWY$ak' );
define( 'NONCE_SALT',       'sm)iw+@6NN2NT:QgumG&}D:ExsPjxr*ezi-k!3Cm2gA$<S#}D+RSZt*rOpG9M:Sl' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
