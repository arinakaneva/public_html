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
define( 'DB_NAME', '587-21_49237' );

/** Имя пользователя базы данных */
define( 'DB_USER', '587-21_49237' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'fbab8a671b8368ac801f' );

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
define( 'AUTH_KEY',         'bW?&gpA%h&=|60:xeIJ7I5;&dlrO4>2Qw9TJ5QIfu@lR6_Br8-:zN*Uq?<i=#}u-' );
define( 'SECURE_AUTH_KEY',  ',NLh.$z01$&!.ho@v2#lSb<buPeo:p>J)~}<Wm>%BNu/$DQ3 4-Y]P$<O/]{IOq<' );
define( 'LOGGED_IN_KEY',    'Ia!,EozNuX1q_LMJA@eW[`b9Cf26<q{wXje1Xd$u=5O}jn|Sg?N5jjs9F@FUz9 4' );
define( 'NONCE_KEY',        'NKq&;$!bgA|xJbU=ESYOzW5@[N$<,]rn;3CF/kC m)N~sDb!r5+,}!(~ORfUR`?X' );
define( 'AUTH_SALT',        'Naoe>a8nWL]:en0hm&Wf*l56_)EtG]IW4$:&e^5^[XXn*vA0D=uS|D:Cz?-owW@ ' );
define( 'SECURE_AUTH_SALT', 'kuk:(p)XQKo39yxJ0p{^d7$A,|%I/@6@s)9%L&~=^$VM7IWx%>P=k5A0oN%mp)%8' );
define( 'LOGGED_IN_SALT',   'dl-Jh{aTH8z)LZL5huvdYybW$]vz43mep-qMCKiRt4y$.R.{O0c3v.U1hyL&.dY1' );
define( 'NONCE_SALT',       'oZg]uA!+GV(b%>)wX9_6pd2MF7cPMfs?ZL*)cKig4$35C QIyO/RZHOwnUj_QHTH' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'oegVe_';


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