<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'nitch');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'counter');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GPWE|m?1S>! |;+isq 6YC%?5d=J7+;iCZ|s.D1nJL+JNx$cu*_F~Cv3r`A%Rg^x');
define('SECURE_AUTH_KEY',  'X{WO3oI`HEhZs:+Rkf~zz:!563/$Q<+Y}|P`Tbv@i;8Ot^;xQNv3z9?G2/*Z;[{r');
define('LOGGED_IN_KEY',    '?p-`^R`ez?,A*x|9+o`n&l*U+?PufFu3v68mpZfmme=5*/PD9P{!-bYEEQ(u.iK:');
define('NONCE_KEY',        '*,ud;b2}7&j!v,6Ix$[a>*]|wbX3y+{b,h1&-W`W5a0AFe+C_22|A}[K^<QV|q {');
define('AUTH_SALT',        ';C+R_A{8UiVTH@,neE:8u+k4]WT#;0sJ=>;Es!NrEE%O~zqMXVONp:Pk1E%M2H;_');
define('SECURE_AUTH_SALT', '*zM#ko_.)wB~k5c18}p4d>(.L/hF=K^]Yp-R$5Jem a`||D~{!n>M->e* [3gXR>');
define('LOGGED_IN_SALT',   '&qIcYw%S+[NI#lz$Ck^e)nI6a Z|6&4sV+(Z7)tSo-dzX0MG:qKBgbLOup#RWHL(');
define('NONCE_SALT',       '7,v~tfey|rxBhBww7LydJEf 3eflsSbaRgIxn*)n8|mx}C$:XVMPU)BJK4vX[)sL');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');