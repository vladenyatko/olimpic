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
define('DB_NAME', 'olimpycs.ua');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ps s^7a|;#-{,}*w-/|yy^mSQ8gn%]]7 @8oQ;eV|-#aE+&]-<T]WehgB+fq}V!<');
define('SECURE_AUTH_KEY',  'S)rOB]QAJ|:*|0GW>oxG%5$sk&DWdyqQ44|&G|Dt.dE]>ZHiTN{wq zy>;4Xjts)');
define('LOGGED_IN_KEY',    'h6Wk X0c9nRzogl/h$[k|t[wcQ87H0buvFqmYV-S%uR@kP}d^!e[!TiX|`.PH $l');
define('NONCE_KEY',        'cSCB~?CbL[aem mg49qV//-P<+0p=-%.glp!H$9+bS-5#tkJHJpz1LB@@r-bR9`P');
define('AUTH_SALT',        '.6 iAR/~/<+~,&31}^VXH-yj?a*eR|e%~?>!K8.^+aRF/ht:_=OCkUi?$xKA6N)~');
define('SECURE_AUTH_SALT', 'PdX,u9}0~C-WlN1FZ&k+2(,5KDt+q3UI|@f9cY]A@@Cz!eQQ-Pr+5Jk+p<?GC3T%');
define('LOGGED_IN_SALT',   'tF~G[|IDluX!78=e^FP%&-AL&TG[$CDKDq0sHEBI2i50|[?S&|4Jdde1qTBjS}`j');
define('NONCE_SALT',       'h}MYB0c2mG+PEnJ;8M# 1L,`{bv+Psq:PZ9M@{<t[G`V&8|=Vl+5/>#*Ba`ULV,`');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'vlad_';

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
