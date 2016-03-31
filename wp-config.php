<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'olympic_kl_com_ua');
/** Имя пользователя MySQL */
define('DB_USER', 'Olympic');
/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '023649523c');
/** Имя сервера MySQL */
define('DB_HOST', 'mysql.cba.pl');
/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/*2QSp95blU5AYg4#+|iic6)J/(U^Xhx@853CB-}a,qrz#mjRywk12~@HjM2j-Z2');define('SECURE_AUTH_KEY',  'Qh] C+AM0#TxJKRkl-rj,%[^UCBY%6p|=`ieaL.{t$6^MF9N(D#dA|.^5L.M;nEo');define('LOGGED_IN_KEY',    'K$o( L:IO|/*7IGpb;ScO_DvV|:6`A!1fqF9$#WX5kHB)GXFTV^fDb/BJm_L sJ$');define('NONCE_KEY',        'j% >6h_%4fe.tCLlx e]NhcynCiTav=a+/cGxPoChIyQ<Ec|`f vgR}85x<Gas|S');define('AUTH_SALT',        '%&6Mi)U#E,j^Z-Iu$~h=V=q+oO@8LTQ!T]Kr^b0%|ZH3dp91a?;m!ZNfK lu-!|A');define('SECURE_AUTH_SALT', 't_:[-PKHbBxr;MP,aVEb>+g*-J`AFLJ1N9oZ/-AZS+6.d><-fc)Ql(!yvl:Dbw%f');define('LOGGED_IN_SALT',   'P)}~ovtE@FW!bqTI<Y,Doja)%N]6|9jO,Ko]0.M BiXNRtBBb nw=L`O HQpax$J');define('NONCE_SALT',       'C>:<wjcK$l!lOX{Hn 0D-_B]]?[j~Hs #:3?d6;8ra!`LLo(!>y-+IeDL_vz~5q%');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'base_';
/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
