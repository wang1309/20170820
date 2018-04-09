<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'wang9876');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%Z:`U9a8&yE_@XDr(Ou/b$j>v`<S5HOCY,G=Y.I^qfGcC [ yVgo&5OOizIHckvO');
define('SECURE_AUTH_KEY',  'fVpTURiDOY)1X!YVy,}).fgo_9j5:y~M0!WU`0}W>0)BmNnF8EA$Bc]Me]$qW?+|');
define('LOGGED_IN_KEY',    'O8eyFL}l*XD1@o^6R$rPtE%yE+mlWYRvM&%n^9b.) u1yH9T79>[m*4oAAv98KqL');
define('NONCE_KEY',        '5erd][aG$7@fNhy%84DTJw/&7*Fj#9hEiK)AukfV@_->+;VS*m`/-XfLqJV(g#o4');
define('AUTH_SALT',        'J.2KqP^mh[HC1/%~RX?L:CTD1UF8|CQud6@fn#0=ODR7eh(a4ztGKJ~_ RFq:_|Y');
define('SECURE_AUTH_SALT', 'QT_aWpB>/fQz>a04X[EojS2m|(sYJcDG4o*t=f4#C)b^D =m[gm7URf*,0:R+ltE');
define('LOGGED_IN_SALT',   'GDI2sx>sbF+SzOAycuq^}*426rE?&(Uk*>q$_1h&^P>[r<~(7JMfmJ.XR/!l/r];');
define('NONCE_SALT',       '(9h/p:^[nXLw%,:ta/<*CU_# :#x#r>6c)3;BE5I#6 kdKzBV#2S$-]f]Z)(& ]Y');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

