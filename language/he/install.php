<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'לוח התקנה',
	'SELECT_LANG'	=> 'בחר שפה',

	'STAGE_INSTALL'	=> 'מתקין phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'הקדמה',
	'INTRODUCTION_BODY'		=> 'ברוך הבא ל phpBB3!<br /><br />phpBB® הוא מערכת הפורומים הנפוצה בעולם, והגרסה האחרונה מאז שהמוצר הושק בשנת 2000. <br /><br />
	מערכת ההתקנה תנחה אותו בתהליך ההתקנה, ותעדכן מערכת קיימת מגרסה ישנה יותר, וגם מאפשר המרה ממערכות פורומים אחרות. למידע נוסף אנו מציעים לקרוא את <a href="../docs/INSTALL.html">מדריך ההתקנה</a>.<br /><br />כדי להמשיך, בחר את האפשרות הרצויה מהלשוניות למעלה.',

	// Support page
	'SUPPORT_TITLE'		=> 'תמיכה',
	'SUPPORT_BODY'		=> 'תמיכה מלאה תסופק לגרסה היציבה הנוכחית של phpBB3, ללא תשלום. זה כולל:</p><ul><li>התקנה</li><li>קונפיגרציה</li><li>שאלות טכניות</li><li>בעיות שנוגעות לבאגים בתוכנה</li><li>עדכון מגרסאות מועמדות לשחרור</li><li>המרה מ phpBB 2.0.x ל phpBB3</li><li>המרה מתוכנות פורומים אחרות ל phpBB3 (אנא ראה את <a href="https://www.phpbb.com/community/viewforum.php?f=486">פורום הממירים</a>)</li></ul><p></p><h2>תוספים/עיצובים</h2><p>בנוגע לנושאים שקשורים לתוספים, אנא שאל ב<a href="https://www.phpbb.com/community/viewforum.php?f=451">פורום התוספים</a>.<br />לנושאים שקשורים לעיצובים, אנא פרסם ב<a href="https://www.phpbb.com/community/viewforum.php?f=471">פורום העיצובים</a>.<br /><br /></p><h2>לקבל תמיכה</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">חבילת התמיכה לחדשים</a><br /><a href="https://www.phpbb.com/support/">מדור תמיכה</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">מדריך התחלה מהירה</a><br /><br />כדי לוודא שאתה מעודכן עם החדשות האחרונות, אתה מוזמן <a href="https://www.phpbb.com/support/">להרשם לרשימת הדיוור שלנו</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'רשיון פומבי כללי',

	// Install page
	'INSTALL_INTRO'				=> 'ברוך הבא להתקנה',
	'INSTALL_INTRO_BODY'		=> 'עם אפשרות זו, תוכל להתקין את phpBB3 על גבי השרת שלך.</p><p>בשביל להמשיך, תצטרך את הגדרות בסיס הנתונים שלך. אם אינך יודע מה הן הגדרות בסיס הנתונים שלך, צור קשר עם ספק האחסון שלך ושאל אותו. לא תוכל להמשיך בלעדיהם. אתה צריך:</p>

	<ul>
		<li>סוג בסיס הנתונים - בסיס הנתונים בו אתה תשתמש.</li>
		<li>שם שרת בסיס הנתונים או DSN - כתובת שרת בסיס הנתונים.</li>
		<li>יציאת שרת בסיס הנתונים - היציאה של שרת בסיס הנתונים (בדרך כלל לא דרוש).</li>
		<li>שם בסיס הנתונים - השם של בסיס הנתונים בשרת.</li>
		<li>שם משתמש לבסיס נתונים וססמה לבסיס נתונים - פרטי ההתחברות לגישה לבסיס הנתונים.</li>
	</ul>

	<p><strong>הערה:</strong> אם אתה מתקין בעזרת SQLite, אתה צריך להזין את הנתיב המלא לקובץ בסיס הנתונים בשדה ה־DSN ולהשאיר את שדות שם המשתמש והססמה ריקים. מטעמי ביטחון, אתה צריך לוודא שהקובץ אינו נמצא במיקום הנגיש לרשת.</p>

	<p>phpBB3 תומך בבסיסי הנתונים הבאים:</p>
	<ul>
		<li>MySQL 3.23 או מעל (MySQLi נתמך)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 או מעל (ישירות או דרך ODBC)</li>
		<li>MS SQL Server 2005 או מעל (מקומי)</li>
		<li>Oracle</li>
	</ul>

	<p>רק בסיסי הנתונים אשר נתמכים בשרת שלך יוצגו.',

	'ACP_LINK'	=> 'קח אותי ל<a href="%1$s">ממשק הניהול</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB כבר מותקן.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB עדיין לא מותקן.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'הקובץ לא קיים',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'כדי להתקין את phpBB הקובץ %1$s צריך להיות מותקן.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'מומלץ שהקובץ %1$s יהיה קיים לחווית משתמש אופטימאלית.',
	'FILE_NOT_WRITABLE'						=> 'הקובץ לא ניתן לכתיבה',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'כדי להתקין את phpBB הקובץ %1$s צריך להיות ניתן לכתיבה.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'מומלץ שהקובץ  %1$s יהיה ניתן לכתיבה לחווית משתמש מאופטימאלית.',

	'DIRECTORY_NOT_EXISTS'						=> 'הספרייה לא קיימת',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'To be able to install phpBB the %1$s directory needs to exist.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'It is recommended that the %1$s directory exist for a better forum user experience.',
	'DIRECTORY_NOT_WRITABLE'					=> 'הספרייה לא ניתנת לכתיבה',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'To be able to install phpBB the %1$s directory needs to be writable.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'It is recommended that the %1$s directory be writable for a better forum user experience.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'גרסת PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB requires PHP version 5.4.0 or higher.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'פונקציית ה־PHP getimagesize() זמינה',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>נדרש</strong> - כדי ש־phpBB3 תעבוד כראוי, הפונקציה getimagesize צריכה להיות זמינה.',
	'PCRE_UTF_SUPPORT'				=> 'תמיכה ב־PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>לא</strong> תפעל אם התקן ה־PHP שלך אינו מותאם לתמיכה ב־UTF-8 בסיומת PCRE.',
	'PHP_JSON_SUPPORT'				=> 'תמיכה ב-PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>נדרש</strong> - על מנת שphpBB יפעל באופן תקין, הסיומת PHP JSON צריכה להיות זמינה.',
	'PHP_XML_SUPPORT'					=> 'תמיכה ב-PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'In order for phpBB to function correctly, the PHP XML/DOM extension needs to be available.',
	'PHP_SUPPORTED_DB'				=> 'בסיסי נתונים נתמכים',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>נדרש</strong> - אתה חייב לתמוך בבסיס נתונים אחד לפחות המותאם ל־PHP. אם לא מוצגים בסיסי נתונים זמינים, אתה צריך ליצור קשר עם ספק האחסון שלך או לסקור את מסמך ההתקן של PHP המתאים לעזרה.',

	'RETEST_REQUIREMENTS'	=> 'בדוק מחדש דרישות',

	'STAGE_REQUIREMENTS'	=> 'בדוק דרישות',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'אתה חייב להשלים את כל השדות בחלק זה.',

	'TIMEOUT_DETECTED_TITLE'	=> 'ההתקנה גילתה נתק בתקשורת',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'The installer has detected a timeout, you may try to refresh the page, which may lead to data corruption. We suggest that you either increase your timeout settings or try to use the CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'קבע מידע להתקנה',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'		=> 'פרטי מנהל ראשי',

	// Form labels
	'ADMIN_CONFIG'				=> 'הגדרות מנהל ראשי',
	'ADMIN_PASSWORD'			=> 'ססמה למנהל הראשי',
	'ADMIN_PASSWORD_CONFIRM'	=> 'אישור הססמה למנהל הראשי',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'הזן ססמה באורך של 6 ועד 30 תווים.',
	'ADMIN_USERNAME'			=> 'שם משתמש למנהל הראשי',
	'ADMIN_USERNAME_EXPLAIN'	=> 'הזן שם משתמש באורך של בין 3 ועד 20 תווים.',

	// Errors
	'INST_ERR_EMAIL_INVALID'	=> 'כתובת הדואר האלקטרוני שהזנת אינה חוקית.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'הססמאות שהזנת אינן תואמות.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'הססמה שהזנת ארוכה מדי. האורך המרבי הוא 30 תווים.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'הססמה שהזנת קצרה מדי. האורך המינימלי הוא 6 תווים.',
	'INST_ERR_USER_TOO_LONG'	=> 'שם המשתמש שהזנת ארוך מדי. האורך המרבי הוא 20 תווים.',
	'INST_ERR_USER_TOO_SHORT'	=> 'שם המשתמש שהזנת קצר מדי. האורך המינימלי הוא 3 תווים.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'תצורת מערכת הפורומים',
	'DEFAULT_LANGUAGE'	=> 'שפת ברירת מחדל',
	'BOARD_NAME'		=> 'שם הפורומים',
	'BOARD_DESCRIPTION'	=> 'תיאור קצר של הפורומים',

	//
	// Database data
	//
	'STAGE_DATABASE'		=> 'הגדרות בסיס נתונים',

	// Form labels
	'DB_CONFIG'				=> 'הגדרות בסיס נתונים',
	'DBMS'					=> 'סוג בסיס נתונים',
	'DB_HOST'				=> 'שם שרת בסיס הנתונים או DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN הנו שם מקור הנתונים ומתאים להתקני ODBC בלבד. ב־PostgreSQL, השתמש ב־localhost כדי להתחבר לשרת המקומי דרך UNIX domain socket ו־127.0.0.1 כדי להתחבר דרך TCP. עבור SQLite, הכנס את הנתיב המלא לקובץ בסיס הנתונים שלך.',
	'DB_PORT'				=> 'יציאת שרת בסיס הנתונים',
	'DB_PORT_EXPLAIN'		=> 'השאר ריק אלא אם כן אתה יודע שהשרת שלך משתמש ביציאה לא רגילה.',
	'DB_PASSWORD'			=> 'ססמה לבסיס הנתונים',
	'DB_NAME'				=> 'שם בסיס הנתונים',
	'DB_USERNAME'			=> 'שם משתמש לבסיס הנתונים',
	'DATABASE_VERSION'		=> 'גרסת בסיס נתונים',
	'TABLE_PREFIX'				=> 'קידומת לטבלאות בבסיס הנתונים',
	'TABLE_PREFIX_EXPLAIN'		=> 'הקידומת חייבת להתחיל באות, ויכולה להכיל אותיות, מספרים וקו תחתון בלבד.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'שגיאה בהתקנת מסד נתונים',
	'INST_ERR_NO_DB'			=> 'לא ניתן לטעון את אפשרות PHP לסוג בסיס הנתונים הנבחר.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'הקידומת שהזנת לא חוקית. היא חייבת להתחיל באות, ויכולה להכיל אותיות, מספרים וקו תחתון בלבד.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'קידומת הטבלאות שציינת ארוכה מדי. האורך המרבי הוא %d תווים.',
	'INST_ERR_DB_NO_NAME'		=> 'לא צוין שם בסיס הנתונים.',
	'INST_ERR_DB_FORUM_PATH'	=> 'קובץ בסיס הנתונים שצוין נמצא בתוך עץ תיקיות המערכת. אתה צריך לשים קובץ זה במיקום לא נגיש.',
	'INST_ERR_DB_CONNECT'		=> 'לא ניתן להתחבר לבסיס הנתונים, ראה הודעת שגיאה להלן.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'גם מסד הנתונים וגם הספריה שמכילה את הפורום חייבים להיות ניתנים לכתיבה.',
	'INST_ERR_DB_NO_ERROR'		=> 'לא ניתנה הודעת שגיאה.',
	'INST_ERR_PREFIX'			=> 'טבלאות עם הקידומת שצוינה כבר קיימות, בחר קידומת אחרת.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'הגרסה של MySQL המותקנת על שרת זה אינה מותאמת לאפשרות “MySQL עם סיומת MySQLi” אשר בחרת. נסה את האפשרות “MySQL” במקום זאת.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'הגרסה של סיומת SQLite אשר התקנת ישנה מדי, אתה חייב לשדרג אותה לפחות לגרסה 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'הגרסה של Oracle המותקנת על שרת זה דורשת ממך לקבוע את הפרמטר <var>NLS_CHARACTERSET</var> ל־<var>UTF8</var>. שדרג את ההתקנה לגרסה 9.2+ או שנה את הפרמטר.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'בסיס הנתונים שבחרת לא נוצר בקידוד <var>UNICODE</var> או <var>UTF8</var>. נסה להתקין עם בסיס נתונים בקידוד <var>UNICODE</var> או <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'קובץ הסכמה לא ניתן לכתיבה',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'תצורת אימייל',

	// Package info
	'PACKAGE_VERSION'					=> 'גרסת החבילה המתוקנת',
	'UPDATE_INCOMPLETE'				=> 'התקנת המערכת phpBB לא עודכנה בצורה תקינה.',
	'UPDATE_INCOMPLETE_MORE'		=> 'אנא קרא את המידע מתחת על מנת לתקן את השגיאה.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>עדכון לא תקין</h1>

		<p>We noticed that the last update of your phpBB installation hasn’t been completed. Visit the <a href="%1$s" title="%1$s">database_update script</a> and run it. If it is missing, please <a href="https://www.phpbb.com/downloads/" title="phpBB downloads">download your package version</a>, upload the "install" folder to your phpBB root directory (where your config.php file is) and <a href="%1$s" title="%1$s">run the database update script</a>.</p>',
	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'גרסה חדשה <strong>%1$s</strong> זמינה. קרא בבקשה <a href="%2$s" title="%2$s"><strong>את ההכרזה</strong></a> ללמוד מה יש לגרסה החדשה להציע.',
	'SERVER_CONFIG'				=> 'הגדרות שרת',
	'SCRIPT_PATH'				=> 'נתיב הסקריפט',
	'SCRIPT_PATH_EXPLAIN'		=> 'הנתיב בו phpBB3 נמצא יחסית לשם המתחם, למשל <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'בתודה, ההנהלה',
	'CONFIG_SITE_DESC'				=> 'טקסט קצר שמתאר את הפורום',
	'CONFIG_SITENAME'				=> 'שם האתר',

	'DEFAULT_INSTALL_POST'			=> 'זוהי הודעת הדגמה בהתקנת phpBB3. הכול נראה עובד כשורה. אתה רשאי למחוק את הודעה זו אם אתה רוצה להמשיך להגדיר את המערכת. במהלך תהליך ההתקנה הקטגוריה הראשונה והפורום הראשון נוצרו והרשאות מתאימות לקבוצות המנהלים הראשיים, הבוטים, המנהלים הגלובליים, האורחים ומשתמשים רשומים. אם אתה רוצה גם למחוק את הקטגוריה הראשונה והפורום הראשון, אל תשכח להעניק הרשאות לכל קבוצות המשתמשים הללו לכל הקטגוריות החדשות והפורומים שאתה תיצור. מומלץ לשנות את השם של הקטגוריה הראשונה והפורום הראשון ולהעתיק את ההרשאות מהם שאתה יוצר קטגוריות חדשות ופורומים חדשים. תהנה!',

	'FORUMS_FIRST_CATEGORY'			=> 'הקטגוריה הראשונה שלך',
	'FORUMS_TEST_FORUM_DESC'		=> 'התיאור של הפורום הראשון שלך.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'הפורום הראשון שלך',

	'RANKS_SITE_ADMIN_TITLE'		=> 'מנהל האתר',
	'REPORT_WAREZ'					=> 'ההודעה מכילה מידע וקישורים שאינם חוקיים.',
	'REPORT_SPAM'					=> 'ההודעה שדווחה בעינינה היה רק לפרסום אתרים ותוספים אשר אינם קשורים לאתר.',
	'REPORT_OFF_TOPIC'				=> 'ההודעה שדווחה היא נושא שאינו קשור לפורום.',
	'REPORT_OTHER'					=> 'ההודעה שדווחה לא תואמת לאף אחת מהאפשרויות לדיווח, אנא השתמש בשדה המידע נוסף.',

	'SMILIES_ARROW'					=> 'חץ',
	'SMILIES_CONFUSED'				=> 'מבולבל',
	'SMILIES_COOL'					=> 'מגניב',
	'SMILIES_CRYING'				=> 'בוכה או מאוד עצוב',
	'SMILIES_EMARRASSED'			=> 'מתבייש',
	'SMILIES_EVIL'					=> 'רשע או מאוד כועס',
	'SMILIES_EXCLAMATION'			=> 'סימן קריאה',
	'SMILIES_GEEK'					=> 'חנון',
	'SMILIES_IDEA'					=> 'רעיון',
	'SMILIES_LAUGHING'				=> 'צוחק',
	'SMILIES_MAD'					=> 'כועס',
	'SMILIES_MR_GREEN'				=> 'מר ירוק',
	'SMILIES_NEUTRAL'				=> 'ללא הבעה',
	'SMILIES_QUESTION'				=> 'סימן שאלה',
	'SMILIES_RAZZ'					=> 'חוצפן',
	'SMILIES_ROLLING_EYES'			=> 'מגלגל עיניים',
	'SMILIES_SAD'					=> 'עצוב',
	'SMILIES_SHOCKED'				=> 'המום',
	'SMILIES_SMILE'					=> 'מחייך',
	'SMILIES_SURPRISED'				=> 'מופתע',
	'SMILIES_TWISTED_EVIL'			=> 'מאוד רשע',
	'SMILIES_UBER_GEEK'				=> 'מאוד חנון',
	'SMILIES_VERY_HAPPY'			=> 'מאוד שמח',
	'SMILIES_WINK'					=> 'קורץ',

	'TOPICS_TOPIC_TITLE'			=> 'ברוך הבא ל־phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'סקירה כללית',
	'MENU_INTRO'		=> 'הקדמה',
	'MENU_LICENSE'		=> 'רישיון',
	'MENU_SUPPORT'		=> 'תמיכה',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'יצירת קובץ קונפיגרציה',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'הוספת אפשרויות קונפיגרציה',
	'TASK_ADD_DEFAULT_DATA'				=> 'הוספת אפשרויות ברירת מחדל למסד הנתונים',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'יצירת קובץ סכמת מסד נתונים',
	'TASK_SETUP_DATABASE'				=> 'יצירת מסד נתונים',
	'TASK_CREATE_TABLES'				=> 'יצירת טבלאות',

	// Install data
	'TASK_ADD_BOTS'				=> 'רישום בוטים',
	'TASK_ADD_LANGUAGES'		=> 'שפות זמינות להתקנה',
	'TASK_ADD_MODULES'			=> 'התקנת מודלים',
	'TASK_CREATE_SEARCH_INDEX'	=> 'יצירת אינדקס חיפוש',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'התקנת חבילת תוספים',
	'TASK_NOTIFY_USER'			=> 'שליחת מייל התרעה',
	'TASK_POPULATE_MIGRATIONS'	=> 'איכלוס המרות',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'ההתקנה הסתיימה בהצלחה',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'מודל לא נמצא',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'A module could not be found because the service, %s, is undefined.',

	'TASK_NOT_FOUND'				=> 'מטלה לא נמצאה',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'A task could not be found because the service, %s, is undefined.',

	'SKIP_MODULE'	=> 'דלג על מודל “%s”',
	'SKIP_TASK'		=> 'דלג על מטלה “%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'All installer task services should start with “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installer task service definition is invalid. Service name “%1$s” given, the expected class namespace is “%2$s” for that. For more information please see the documentation of task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'קובץ התצורה של ההתקנה לא ניתן לכתיבה.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'התקנת phpBB',
	'CLI_UPDATE_BOARD'				=> 'עדכון phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Show the configuration which will be used',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validate a configuration file',
	'CLI_CONFIG_FILE'				=> 'Config file to use',
	'MISSING_FILE'					=> 'Unable to access file %1$s',
	'MISSING_DATA'					=> 'Config file is missing data or might contain invalid settings.',
	'INVALID_YAML_FILE'				=> 'Could not parse YAML file %1$s',
	'CONFIGURATION_VALID'			=> 'The configuration file is valid',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'עדכון התקן phpBB3',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'עם אפשרות זו, תוכל לעדכן את מערכת phpBB שלך לגרסה האחרונה.<br />במשך התהליך גרסת כל הקבצים תיבדק. תוכל לסקור את כל ההבדלים והקבצים לפני העדכון.<br /><br />קובץ העדכון עצמו יכול להתבצע בשתי דרכים שונות.</p><h2>עדכון ידני</h2><p>עם עדכון זו אתה מוריד את ערכת הקבצים ששונו בלבד כדי לוודא שלא תפגע בתוספות הקבצים שיכול להיות והוספת. לאחר שהורדת את החבילה אתה צריך להעלות את הקבצים ידנית אל מיקומם הנכון תחת תיקיית המערכת של phpBB3. לאחר שתסיים, תוכל לבצע את שלב בדיקת הקבצים שנית כדי לוודא שהעברת את הקבצים למיקומם הנכון.</p><h2>עדכון אוטומטי עם FTP</h2><p>שיטה זו דומה לשיטה הראשונה אבל ללא הצורך להוריד את הקבצים ששונו ולהעלות אותם בעצמך. הפעולה תתבצע בשבילך. כדי להשתמש בשיטה זו אתה צריך לדעת את פרטי החיבור ל־FTP מפני שתתבקש להם. לאחר הסיום תועבר לבדיקת הקבצים שנית כדי לוודא שהכול עודכן כראוי.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '
		<h1>הכרזת שחרור</h1>

		<p>קרא את הכרזת שחרור הגרסה האחרונה לפני שתמשיך בתהליך העדכון, היא יכולה לכלול מידע שימושי. היא תכלול בנוסף קישורים מלאים להורדה וכמו כן את השינויים.</p>

		<br />

		<h1>כיצד לעדכן את המערכת שלך באמצעות החבילה המלאה</h1>

		<p>הדרך המומלצת לעדכן את המערכת שלך היא בשימוש עם החבילה המלאה. אם קבצי ליבה של המערכת השתנו, אתה יכול להעדיף להשתמש במערכת העדכון האוטומטית על-מנת לא לאבד שינויים אלו. אתה גם יכול לעדכן את המערכת שלך בדרכים האחרות המופיעות בקבצי ההתקנה. הצעדים לעדכון המערכת שלך באמצעות החבילה המלאה הם:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">גבה את כל קבצי המערכת ואת מסד הנתונים.</strong></li>
			<li>גש ל <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">עמוד ההורדות של phpBB.com</a> והורד את קובץ הארכיון העדכני ביותר "Full Package".</li>
			<li>חלץ את הארכיון.</li>
			<li>הסר (מחוק) את הקובץ <code class="inline">config.php</code>, ואת התיקיות<code class="inline">/images</code>, <code class="inline">/store</code> ו- <code class="inline">/files</code> <em>מהחבילה</em> (לא מהאתר שלך).</li>
			<li>גש לממשק הניהול, תפריט הגדרת המערכת, וודא שהסגנון prosilver הוא סגנון ברירית המחדל. אם לא, קבע אותו כברירת המחדל.</li>
			<li>מחק את התיקיות <code class="inline">/vendor</code> ו- <code class="inline">/cache</code> מתיקית הבסיס של הפורומים בשרת.</li>
			<li>באמצעות FTP או SSH העלה את הקבצים והתיקיות שנותרו (כלומר, התוכן שנשאר מקובץ החבילה המלאה) אל תיקית הבסיס של הפורומים שלך, ודרוס את הקבצים הקיימים. הערה: שים לב לא למחוק אף תוסף בתיקייה <code class="inline">/ext</code> כשאתה מעלה את התכנים העדכניים של phpBB3.</li>
			<li><strong><a href="%1$s" title="%1$s">כעת התחל את תהליך העדכון על-ידי כניסה לתיקיית ההתקנה באמצעות הדפדפן שלך.</a>.</strong></li>
			<li>עקוב אחרי הצעדים לעדכון מסד הנתונים, ותן לתהליך לרוץ עד לסיומו.</li>
			<li>באמצעות FTP או SSH מחק את התיקייה <code class="inline">/install</code> מתיקיית הבסיס של הפורום שלך.<br><br></li>
		</ol>
		
		<p>כעת יש לך פורום חדש ועדכני שמכיל את כל המידע שלך. מטלות לביצוע בהמשך:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>עדכון חבילת השפה שלך לגרסה העדכנית</li>
			<li>עדכון הסגנון שלך<br><br></li>
		</ul>
		
		<h1>כיצד לעדכן את המערכת שלך עם חבילת העדכון האוטומטית</h1>

		<p>החבילה האוטומטית מומלצת לשימוש רק במידה ששינית את קבצי הבסיס של phpBB. הצעדים לעדכון phpBB3 באופן אוטומטי הם:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>עבור אל <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">עמוד ההורדות של phpBB</a> והורד את קובץ הארכיון "חבילת עדכון אוטומטית".<br><br></li>
			<li>חלץ את הארכיון.<br /><br /></li>
			<li>העלה את התיקיות "install" ו-"vendor" השלמות הלא דחוסות לתיקיית המערכת של phpBB3 (היכן שנמצא הקובץ config.php).<br><br></li>
		</ul>

		<p>לאחר ההעלה, הפורום יהיה כבוי למשתמשים רגילים מפני שתיקיית ההתקנה שהעלת כעת קיימת.<br><br>
		<strong><a href="%1$s" title="%1$s">כעת התחל בתהליך העדכון על־ידי הפניית הדפדפן שלך לתיקייה install</a>.</strong><br>
		<br />
		אתה תודרך לאורך תהליך העדכון. תקבל הודעה כאשר העדכון יושלם.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'סוג העדכון לביצוע',

	'UPDATE_TYPE_ALL'		=> 'עדכן מסד נתונים וקבצים',
	'UPDATE_TYPE_DB_ONLY'	=> 'עדכן מסד נתונים בלבד',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'שיטות להעלאת קבצים',

	'UPDATE_FILE_METHOD'			=> 'שיטה להעלאת קבצים',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'הורד קבצים מעודכנים כארכיון',
	'UPDATE_FILE_METHOD_FTP'		=> 'עדכן קבצים באמצעות FTP (אוטומטית)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'עדכן קבצים באמצעות גישה ישירה לקבצים (אוטומטית)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'בחר תבנית ארכיון להורדה',

	// FTP settings
	'FTP_SETTINGS'				=> 'הגדרות FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No valid update directory was found, please make sure you uploaded the relevant files.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'OLD_UPDATE_FILES'				=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'עדכון קבצים',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'בדוק קבצים לעדכון',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'משווה הקבצים לא הצליח לפתוח את %s.',

	'UPDATE_FILE_DIFF'		=> 'משווה קבצים ששונו',
	'ALL_FILES_DIFFED'		=> 'כל הקבצים ששונו הושוו.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'עדכן קבצים',

	'DOWNLOAD'							=> 'הורד',
	'DOWNLOAD_CONFLICTS'				=> 'הורד את ההתנגשויות עבור קובץ זה',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'חפש &lt;&lt;&lt; כדי לראות את ההתנגשויות',
	'DOWNLOAD_UPDATE_METHOD'			=> 'הורד ארכיון קבצים ששונו',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'לאחר סיום ההורדה אתה צריך לחלץ את קובץ הארכיון. אתה תמצא את הקבצים ששונו אשר אתה צריך להעלות לתיקיית המערכת של phpBB3. העלה את הקבצים למיקומים שלהם בהתאמה. לאחר שהעלת את כל הקבצים, בדוק את הקבצים שנית עם הכפתור האחר שלהלן.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'הקובץ כבר מעודכן.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'הקובץ לא ניתן לשינוי.',
	'FILE_USED'						=> 'מידע בשימוש מ',			// Single file
	'FILES_CONFLICT'				=> 'התנגשות קבצים',
	'FILES_CONFLICT_EXPLAIN'		=> 'הקבצים הבאים שונו ואינם מיצגים את הקבצים המקוריים מהגרסה הישנה. phpBB גילה כי קבצים אלו ייצרו התנגשויות אם  ננסה למזג אותם. בדוק את ההתנגשויות ונסה לפתור אותן בעצמך או המשך בעדכון על־ידי בחירת שיטת המיזוג המועדפת. אם אתה פותר את ההתנגשויות ידנית בדוק את הקבצים שנית לאחר ששינית אותם. תוכל גם לבחור לבחור בין שיטת מיזוג מועדפת לכל קובץ. השיטה הראשונה תביא לקובץ בו השורות המתנגשות מהקובץ הישן שלך ימחקו, השיטה השנייה תגרום למחיקת השינויים מהגרסה החדשה יותר.',
	'FILES_DELETED'					=> 'קבצים שנמחקו',
	'FILES_DELETED_EXPLAIN'			=> 'הקבצים הבאים לא קיימים בגרסה החדשה. קבצים אלה יש למחוק מההתקנה שלך.',
	'FILES_MODIFIED'				=> 'קבצים ששונו',
	'FILES_MODIFIED_EXPLAIN'		=> 'הקבצים הבאים שונו ואינם מיצגים את הקבצים המקוריים מהגרסה הישנה. הקובץ המעודכן ימזג בין השינויים שלך והקובץ החדש.',
	'FILES_NEW'						=> 'קבצים חדשים',
	'FILES_NEW_EXPLAIN'				=> 'הקבצים הבאים אינם קיימים כרגע בתיקיית ההתקן שלך. קבצים אלה יתווספו לתיקייה זו.',
	'FILES_NEW_CONFLICT'			=> 'קבצים חדשים מתנגשים',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'הקבצים הבאים חדשים לגרסה האחרונה אך התגלה כי כבר ישנם קבצים עם שם זהה באותו המיקום. הקבצים החדשים ישמרו במקום הקודמים.',
	'FILES_NOT_MODIFIED'			=> 'קבצים שלא שונו',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'הקבצים הבאים לא שונו ומיצגים את הקבצים המקוריים של phpBB מהגרסה ממנה אתה מעוניין לעדכן.',
	'FILES_UP_TO_DATE'				=> 'קבצים שכבר מעודכנים',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'הקבצים הבאים כבר מעודכנים לגרסה האחרונה ואינם דורשים עדכון.',
	'FILES_VERSION'					=> 'גרסת קבצים',
	'TOGGLE_DISPLAY'			=> 'הצג/הסתר רשימת קבצים',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'מעדכן קבצים',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'עדכון הקובץ “%1$s“ נכשל. ההתקנה תנסה דרך “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'המשך תהליך עדכון',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'בדוק קבצים שוב',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'עדכן מסד נתונים',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'עדכון בסיס הנתונים.',

	'TASK_UPDATE_EXTENSIONS'	=> 'עדכון תוספים',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'ההמרה שצוינה אינה קיימת.',
	'DEV_NO_TEST_FILE'			=> 'לא צוין ערך למשתנה test_file בהמרה. אם אתה משתמש של המרה זו, אינך אמור להיתקל בשגיאה זו, דווח על הודעה זו ליוצר ההמרה. אם אתה יוצר ההמרה, אתה חייב לציין את שם הקובץ הקיים במערכת המקורית כדי לאפשר לנתיב אליו להיות חוקי.',
	'COULD_NOT_FIND_PATH'		=> 'לא ניתן לאתר את הנתיב למערכת הקודמת שלך. בדוק את ההגדרות ונסה שנית.<br />» %s צוין בתור הנתיב במקור',
	'CONFIG_PHPBB_EMPTY'		=> 'משתנה ההגדרות של phpBB3 לערך “%s” ריק.',

	'MAKE_FOLDER_WRITABLE'		=> 'וודא שהתיקייה הבאה קיימת וניתנת לכתיבה על־ידי השרת ונסה שנית:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'וודא שהתיקיות הבאות קיימות וניתנות לכתיבה על־ידי השרת ונסה שנית:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'בדוק שנית',

	'NO_TABLES_FOUND'			=> 'לא נמצאו טבלאות.',
	'TABLES_MISSING'			=> 'לא ניתן למצוא את הטבלאות הבאות<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'בדוק את קידומת הטבלאות שלך ונסה שנית.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'המשך המרה',
	'CONTINUE_CONVERT_BODY'		=> 'ניסיון המרה קודם התגלה. תוכל לבחור כעת בין להתחיל המרה חדשה או להמשיך בהמרה הקודמת.',
	'CONVERT_NEW_CONVERSION'	=> 'המרה חדשה',
	'CONTINUE_OLD_CONVERSION'	=> 'המשך המרה שהותחלה מקודם',
	
	// Start conversion
	'SUB_INTRO'					=> 'הקדמה',
	'CONVERT_INTRO'				=> 'ברוך הבא אל ממשק ההמרה הייחודי של phpBB3',
	'CONVERT_INTRO_BODY'		=> 'מכאן, אתה יכול לייבא נתונים מתוכנות מערכת אחרות (מותקנות). הרשימה הבאה מציגה את כל אפשרויות ההמרה הזמינות הנוכחיות. אם אין המרה מוצגת ברשימה זו לתוכנת המערכת ממנה אתה מעוניין להמיר, בדוק באתר שלנו בו יכולות להיות זמינות אפשרויות המרה נוספות להורדה.',
	'AVAILABLE_CONVERTORS'		=> 'המרות זמינות',
	'NO_CONVERTORS'				=> 'אין המרות זמינות לשימוש.',
	'CONVERT_OPTIONS'			=> 'אפשרויות',
	'SOFTWARE'					=> 'תוכנת פורומים',
	'VERSION'					=> 'גרסה',
	'CONVERT'					=> 'המרה',

	// Settings
	'STAGE_SETTINGS'			=> 'הגדרות',
	'TABLE_PREFIX_SAME'			=> 'קידומת הטבלאות צריכה להיות האחת אשר בשימוש על־ידי התוכנה שממנה אתה ממיר.<br />» קידומת הטבלאות שצוינה היא %s.',
	'DEFAULT_PREFIX_IS'			=> 'ההמרה לא מצאה טבלאות עם הקידומת שצוינה. וודא שהזנת את הפרטים הנכונים למערכת ממנה אתה ממיר. קידומת הטבלאות כברירת מחדל ל־%1$s היא <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'ציון אפשרויות המרה',
	'FORUM_PATH'				=> 'נתיב למערכת',
	'FORUM_PATH_EXPLAIN'		=> 'זהו הנתיב <strong>היחסי</strong> למערכת הקודמת שלך מ<strong>תיקיית ההתקן של מערכת phpBB3 זו</strong>',
	'REFRESH_PAGE'				=> 'רענן עמוד כדי להמשיך בהמרה',
	'REFRESH_PAGE_EXPLAIN'		=> 'אם נקבע לכן, ההמרה תרענן את העמוד כדי להמשיך בתהליך ההמרה לאחר שהסתיים שלב. אם זוהי ההמרה הראשונה שלך למטרות בדיקה ובמטרה לזהות שגיאות, אנו מציעים לקבוע ללא.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversion in progress',

	'AUTHOR_NOTES'				=> 'Author notes<br />» %s',
	'STARTING_CONVERT'			=> 'Starting conversion process',
	'CONFIG_CONVERT'			=> 'Converting the configuration',
	'DONE'						=> 'Done',
	'PREPROCESS_STEP'			=> 'Executing pre-processing functions/queries',
	'FILLING_TABLE'				=> 'Filling table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Filling tables',
	'DB_ERR_INSERT'				=> 'Error while processing <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Error while processing <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error while executing <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error while executing <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error while running <code>SELECT</code> query.',
	'STEP_PERCENT_COMPLETED'	=> 'Step <strong>%d</strong> of <strong>%d</strong>',
	'FINAL_STEP'				=> 'Process final step',
	'SYNC_FORUMS'				=> 'Starting to synchronise forums',
	'SYNC_POST_COUNT'			=> 'Synchronising post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronising post_counts from <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Starting to synchronise topics',
	'SYNC_TOPIC_ID'				=> 'Synchronising topics from <var>topic_id</var> %1$s to %2$s.',
	'PROCESS_LAST'					=> 'Processing last statements',
	'UPDATE_TOPICS_POSTED'		=> 'Generating topics posted information',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'An error occurred while generating topics posted information. You can retry this step in the ACP after the conversion process is completed.',
	'CONTINUE_LAST'				=> 'Continue last statements',
	'CLEAN_VERIFY'				=> 'Cleaning up and verifying the final structure',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Naming conflict: %s and %s are both aliases<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'ההמרה הושלמה',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'המרת בהצלחה עכשיו את מערכת הפורומים שלך ל-phpBB 3.1. עכשיו אתה יכול להתחבר ו<a href="../"> לגשת </a> למערכת שלך. אנא ודא שההגדרות הועברו בצורה נכונה לפני הפעלת המערכת שלך על-ידי מחיקת התיקיה install. זכור שעזרה בנוגע לשימוש ב-phpBB זמינה באופן מקוון באיזורי ה<a href="https://www.phpbb.com/support/docs/en/3.1/ug/">תיעוד</a> (אנגלית) וב<a href="http://phpbb.co.il/viewforum.php?f=21">פורום התמיכה בעברית</a> או <a href="https://www.phpbb.com/community/viewforum.php?f=46">באנגלית</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'העלאת FTP לקבצים מצורפים פעילה בפורום הישן. כבה את אפשרות העלאת FTP וודא שתיקיית העלאה חוקית צוינה, ולאחר מכן העתק את כל הקבצים המצורפים לתיקייה הנגישה לרשת החדשה הזו. לאחר שביצעת זאת, התחל מחדש את ההמרה.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'אין פרטי הגדרות זמינים להמרה.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'לא ניתן לקבל את פרטי הגישה לפורום.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'לא ניתן לקבל קטגוריות.',
	'CONV_ERROR_GET_CONFIG'				=> 'לא ניתן לקבל את הגדרות המערכת שלך.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'לא ניתן לגשת/לקרוא את “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'לא ניתן לקבל פרטי הרשאות קבוצה.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'אי התאמה בטבלת הקבוצות התגלתה ב־add_bots() - אתה צריך להוסיף את כל הקבוצות המיוחדות אם תרצה זאת בעצמך.',
	'CONV_ERROR_INSERT_BOT'				=> 'לא ניתן להוסיף פרטי רובוט לטבלת המשתמשים.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'לא ניתן להוסיף פרטי רובוט לטבלת הרובוטים.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'לא ניתן להוסיף משתמש לטבלת קבוצות המשתמשים.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'הודעת שגיאה תחבירית',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'הערה למפתח: אתה חייב לציין $convertor[\'avatar_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'הנתיב היחסי למערכת המקורית לא צוין.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'הערה למפתח: אתה חייב לציין $convertor[\'avatar_gallery_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_GROUP'				=> 'הקבוצה "%1$s" לא נמצאה ב־%2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'הערה למפתח: אתה חייב לציין $convertor[\'ranks_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'הערה למפתח: אתה חייב לציין $convertor[\'smilies_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'הערה למפתח: אתה חייב לציין $convertor[\'upload_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_PERM_SETTING'			=> 'לא ניתן להוסיף/לעדכן הגדרת הרשאה.',
	'CONV_ERROR_PM_COUNT'				=> 'לא ניתן לבחור מונה תיקיית הודעות פרטיות.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'לא ניתן להוסיף פורום חדש המחליף קטגוריה ישנה.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'לא ניתן להוסיף פורום חדש המחליף פורום ישן.',
	'CONV_ERROR_USER_ACCESS'			=> 'לא ניתן לקבל פרטי גישת משתמש.',
	'CONV_ERROR_WRONG_GROUP'			=> 'הקבוצה השגויה "%1$s" מוגדרת ב־%2$s.',
	'CONV_OPTIONS_BODY'					=> 'עמוד זה אוסף את הנתונים הנדרשים כדי לגשת למערכת המקור. הזן את פרטי בסיס הנתונים של המערכת הקודמת שלך. ההמרה לא תשנה שום דבר בבסיס הנתונים אשר ניתן להלן. מערכת המקור צריכה להיות כבויה כדי לאפשר המרה עקבית.',
	'CONV_SAVED_MESSAGES'				=> 'הודעות שמורות',

	'PRE_CONVERT_COMPLETE'			=> 'כל שלבי ההכנה להמרה הושלמו בהצלחה. תוכל להתחיל כעת בתהליך ההמרה הממשי. שים לב שתוכל לבצע ולהתאים כמה דברים ידנית. לאחר ההמרה, בייחוד לאחר בדיקת ההרשאות שנקבעו, בנה מחדש את טבלאות החיפוש אשר לא הומרו וגם וודא שקבצים הועתקו כראוי, למשל סמלים אישיים וסמיילים.',
));
