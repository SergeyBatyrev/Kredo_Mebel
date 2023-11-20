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
 * * Настройки базы данных
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
define( 'DB_NAME', 'cy82793_kredo' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'cy82793_kredo' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'uYCneg@dd&*]eaZ@@dGs6x#Af.Erej>`8|&fx`0:R|yA&%^_An!v2+Tp8->}P-x)' );
define( 'SECURE_AUTH_KEY',  '@,QY[0>s?3V}g,{V,.uNHD;!!t`ZUXc,@ZUWI!HytN*xlPlDqV@z?RA>)hh<o%D0' );
define( 'LOGGED_IN_KEY',    '+WW&xr_BHjShvFw)@Y] ,7C<Uy0nGpC%h@^>u7?aMrwQ|m<FlPieDOsG&PTbQ`b^' );
define( 'NONCE_KEY',        'Xc_mBZy|;y-j-F]a[3(R.f/]y:fUUrk!GWm_anT/BhA5WJpz9*svY3x(6g}rt9Ho' );
define( 'AUTH_SALT',        's/$roA%iU8nn00ip|*#lG&e_0l4^o52<p@MI+ KVg_wq+~owh.c:wIYa|Lwi&vG(' );
define( 'SECURE_AUTH_SALT', 'mcy_Rw>;qrl--SoJ;bS5/^Ki#bISW,yk]CBV(]5.EK:6vVsf.du1`--XGb3+L-1L' );
define( 'LOGGED_IN_SALT',   ' L{?XSVhsphIi +0N/Y+f_NPnv_8]4xHv%@Gc#R42tRlT~jUi@a%h$GJ/V>$HU)e' );
define( 'NONCE_SALT',       'gHIA!M-D)da.U?#aUYrMBL!.@RWE)Q8J#H3[)=)z1!Q&rc>8Z1XR%t{hVRg^6;hR' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'Kredo_';

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

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);