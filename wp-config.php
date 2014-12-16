<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'travel');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WFh^Y+Q%~A5X-Cx1 )B$OE0|p!O1e/qr)zMFX(!tM+Q~XB|?lH|2oHBQ2(/M}TSU');
define('SECURE_AUTH_KEY',  'usr CeAaU}S=|lHp*YZU)@J[D=d+^>}R2JYm]Bcc+=:z.G8ItrJEyw:mI,@VzB5w');
define('LOGGED_IN_KEY',    '<ws+j-5_ |snB:!wL;/}Bi*IFU&{iqil1,)d,Gh#<2TpLu~`K%-|@gD-97g+29oG');
define('NONCE_KEY',        'uYBuxa%g&WzU,VEKG7RBTWgV~Pc8!Q!/!0Z]IIKi8Ve*Pq$MvqpG!TR`#yn=MADR');
define('AUTH_SALT',        '<9QJ(o5EY|Cm1g!oM@`e6 p0qHoxV1Z -_Fyuct>G9a]m+&=jFt.5Y7pu-YSux|C');
define('SECURE_AUTH_SALT', 'Tp0[{EMwRj)L/Ui1Ta39c^m&9o9}2I&hVMeuu&|UVA*l-o!k4x]]S91YzJl,SVlf');
define('LOGGED_IN_SALT',   '`Jh_(5v-h[.`a)fj|a )X! |FT0[}9-:Zs+^(Z|7GN&K<!ti&(5b|$n#-`|EHj-?');
define('NONCE_SALT',       '~sUku:rJ9Znle),gmOqrCvQ5ds:-5_ACiru}0*u+<h[-nwD9N&8y-85|lR/}]CcT');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

