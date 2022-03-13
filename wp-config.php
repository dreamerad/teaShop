<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress_shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vGNDH+7~_d7DD]IpT|+Q,e: L,%$x4>qQsYl7yZV|mv?DD`{ZrWW/zSEfH28%y:(' );
define( 'SECURE_AUTH_KEY',  'sjJ{{O*!/rn:)`9**~ecN%5PJEqbzb&du7PrP:d7?_Vd%+b(_^9CRyfzsB<Zu]2$' );
define( 'LOGGED_IN_KEY',    ';SI.H7O?9dGekMb`2s*DP(7JnyG6M#Kf:*/`bc&>ad=oDNFNxTK}}M?_*jd&~p,x' );
define( 'NONCE_KEY',        ']hx=Qw>Tp-UA6uy$(1h!L`[P<{:Y,wO@N0!m/pv[>D%H`^r,if*i|Kk,V)9^R ag' );
define( 'AUTH_SALT',        '@dpq.r3,JPC-Z2+k5|qj$t8At4^X}9bc%g3[6<4/H$[C{HT;-*+]FNp/)#inxva`' );
define( 'SECURE_AUTH_SALT', 'm5dy|f5&.4v$C<vo&6jYyq7*y!yGlWJPRYz:v:`0)Q>m~:Xiov90|~r;f8@,Z9pf' );
define( 'LOGGED_IN_SALT',   '7]{)tq/&,64kc_SUZ-Ip(^Yd,?v:y26KpUy:V+Z@Y sY>xm7:ytx$)=VvI:dtW-N' );
define( 'NONCE_SALT',       '/yL&ycyhVq>B?pYEX6IgQc)Qy s_8SSeD-VS?avZ5TTySy]/{B10N17uLp?g6s;n' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
