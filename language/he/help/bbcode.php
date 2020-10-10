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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_INTRO'	=> 'מבוא',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'יצירת קישורים',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'יצירת רשימות',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'נושאים אחרים',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'ציטוט והצגת טקסט ברוחב מתוקן',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'עיצוב טקסט',
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'הצגת תמונות בהודעות',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'ניתן להכניס כעת קבצים מצורפים בכל מקום בהודעה בעזרת תגי ה־BBCode <strong>[attachment=][/attachment]</strong>, אם אפשרות צירוף הקבצים פעילה על־ידי המנהל הראשי של המערכת ואם יש לך את הגישות המתאימות לצירוף קבצים. בתוך מסך השליחה ישנה תיבת רשימה נגללת (בהתאמה לכפתור) להוספת קבצים מצורפים בתוך השורה.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'הוספת קבצים מצורפים להודעה',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode כולל תג להוספת תמונות להודעות. אתה חייב לזכור שני דברים חשובים בזמן השימוש בתג. הרבה משתמשים לא אוהבים תמונות רבות המוצגות בהודעות והדבר השני הוא שהתמונה חייבת להיות זמינה ברשת (היא לא יכול להיות על המחשב שלך למשל, אלא אם כן אתה מריץ שרת!). כדי להציג תמונה אתה חייב לתחום את הכתובת המצביע לתמונה עם התגים <strong>[img][/img]</strong>. למשל:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />As noted in the URL section above you can wrap an image in a <strong>[url][/url]</strong> tag if you wish, e.g.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />would generate:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'הוספת תמונה להודעה',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode הוא גרסה מיוחדת של HTML. למעשה אתה יכול להשתמש ב־BBCode בהודעות שלך בפורום לפי קביעת המנהל הראשי. בנוסף אתה יכול לכבות את BBCode בכל הודעה דרך טופס השליחה. BBCode עצמו דומה בסגנון ל־HTML, התגים תחומים בסוגריים מרובעים [ ו־] במקום &lt; ו־&gt; והוא מציע שליטה גבוהה יותר מעבר למה ואיך משהו מוצג. תלוי בערכה בה אתה משתמש, הוספת BBCode להודעות שלך אפילו פשוט יותר בעזרת ממשק לחיצה הנמצא מעל אזור טופס השליחה. יחד עם זאת תוכל למצוא את המדריך הבא כשימושי.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'מה זה BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode תומך במספר דרכים ליצירת קישורים.<ul><li>האפשרות הראשונה משתמשת בתגים <strong>[url=][/url]</strong>, מה שאתה מזין לאחר הסימן = ישמש בתור הכתובת. לדוגמה כדי לקשר לאתר phpBB.co.il תוכל להשתמש:<br /><br /><strong>[url=http://www.phpbb.co.il/]</strong>בקר ב־phpBB!<strong>[/url]</strong><br /><br />הקוד יצור את הקישור הבא, <a href="http://www.phpbb.co.il/">בקר ב־phpBB!</a> שים לב שהחלון יפתח באותו חלון או בחלון חדש לפי העדפות דפדפן המשתמש.</li><li>אם אתה רוצה שהכתובת עצמה תוצג כקישור תוכל לעשות זאת כך:<br /><br /><strong>[url]</strong>http://www.phpbb.co.il/<strong>[/url]</strong><br /><br />הקוד יצור את הקישור הבא, <a href="http://www.phpbb.co.il/">http://www.phpbb.co.il/</a></li><li>בנוסף phpBB מאופיינית במשהו הנקרא <i>קישורי קסם</i>, אשר יהפוך כל כתובת בעלת תחביר נכון לקישור ללא הצורך לציין אף תג או אפילו את http:// המוביל. לדוגמה הקלדת www.phpbb.co.il בהודעה שלך יהפוך אוטומטית אל <a href="http://www.phpbb.co.il/">www.phpbb.co.il</a> כאשר אתה צופה בהודעה.</li><li>אותו הדבר מתייחס במידה שווה לכתובות דואר אלקטרוני, אתה יכול לציין כתובת מפורשות למשל:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />יציג <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> או שאתה פשוט יכול להקליד no.one@domain.adr בהודעה שלך והכתובת תומר אוטומטית כאשר תצפה בה.</li></ul>יחד עם כל תגי ה־BBCode תוכל לתחום כתובות סביב כל אחד מהתגים האחרים כמו <strong>[img][/img]</strong> (ראה רישום הבא), <strong>[b][/b]</strong>, וכד\'. כמו בתגי העיצוב אתה חייב לוודא שסדר הפתיחה והסגירה של התגים נכון, למשל:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">אינו</span> נכון וכך תוכל לגרום להודעה שלך להימחק.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'קישור לאתר אחר',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'הסוג השני של רשימה, רשימה ממוספרת, מאפשר לך לבחור מה יוצג לפני כל פריט ברשימה. כדי ליצור רשימה ממוספרת השתמש ב־<strong>[list=1][/list]</strong> כדי ליצור רשימה ממוספרת או לחלופין השתמש ב־<strong>[list=a][/list]</strong> לרשימה המסודרת לפי אותיות לועזיות. כמו ברשימה לא ממוספרת, הרכיבים מצוינים עם <strong>[*]</strong>. לדוגמה:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>לך לחנות<br /><strong>[*]</strong>קנה מחשב חדש<br /><strong>[*]</strong>קלל את המחשב כאשר הוא קורס<br /><strong>[/list]</strong><br /><br />יצור את הרשימה הבאה:<ol style="list-style-type: decimal;"><li>לך לחנות</li><li>קנה מחשב חדש</li><li>קלל את המחשב כאשר הוא קורס</li></ol>ואלו לרשימה המסודרת לפי אותיות לועזיות תוכל להשתמש ב:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>התשובה האפשרית הראשונה<br /><strong>[*]</strong>התשובה האפשרית השנייה<br /><strong>[*]</strong>התשובה האפשרית השלישית<br /><strong>[/list]</strong><br /><br />אשר יציג<ol style="list-style-type: lower-alpha"><li>התשובה האפשרית הראשונה</li><li>התשובה האפשרית השנייה</li><li>התשובה האפשרית השלישית</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: upper-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: upper-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'יצירת רשימה ממוספרת',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode תומך בשני סוגים של רשימות, לא ממוספרות וממוספרות. הם ביסודם זהים לשווה ערכם ב־HTML. רשימה לא ממוספרת מציגה כל רכיב ברשימה שלך ברציפות אחד אחרי השני יחד עם תו תבליט. כדי ליצור רשימה לא ממוספרת השתמש ב־<strong>[list][/list]</strong> והגדר כל פריט ברשימה עם <strong>[*]</strong>. לדוגמה, כדי ליצור את רשימת הצבעים האהובים עליך הזן:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>אדום<br /><strong>[*]</strong>כחול<br /><strong>[*]</strong>צהוב<br /><strong>[/list]</strong><br /><br />הקוד יצור את הרשימה הבאה:<ul><li>אדום</li><li>כחול</li><li>צהוב</li></ul><br />לחלופין אתה יכול להגדיר את עיצוב הפריט על ידי שימוש ב<strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, או <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'יצירת רשימה לא ממוספרת',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'If you are an administrator on this board and have the proper permissions, you can add further BBCodes through the Custom BBCodes section.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Can I add my own tags?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'אם אתה רוצה להציג חלק מקוד או אפילו כל דבר הדורש רוחב מתוקן, למשל גופן מסוג Courier אתה צריך לתחום את הטקסט בתגים <strong>[code][/code]</strong>, למשל<br /><br /><strong>[code]</strong>echo &quot;זהו קוד&quot;;<strong>[/code]</strong><br /><br />כל הסגנונות אשר בשימוש בתוך התגים <strong>[code][/code]</strong> נשמרות אשר אתה צופה בהן מאוחר יותר. ניתן להפעיל הדגשת תחביר PHP בעזרת <strong>[code=php][/code]</strong> ומומלץ לעשות זאת בעד שליחת קוד PHP כדי לשפר את איכות הקריאה.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'ציטוט קוד או נתונים בעלי רוחב מתוקן',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'ישנן שני דרכים בהן תוכל לצטט טקסט, עם אזכור או בלי.<ul><li>כאשר אתה משתמש באפשרות הציטוט כדי להגיב להודעה במערכת אתה צריך להשים לב שתוכן ההודעה נוסף לחלון ההודעה תחום בתגים <strong>[quote=&quot;&quot;][/quote]</strong>. שיטה זו מאפשרת לך לצטט עם אזכור לאדם או לכל דבר אחר אשר אתה בוחר להכניס! לדוגמה כדי לצטט טקסט אשר מר בלובי כתב אתה צריך להזין:<br /><br /><strong>[quote=&quot;מר בלובי&quot;]</strong>הטקסט שמר בלובי קטן יהיה כאן<strong>[/quote]</strong><br /><br />בתוצאה הפלט יוסיף אוטומטית &quot;מר בלובי כתב:&quot; לפני הטקסט עצמו. זכור שאתה <strong>חייב</strong> לכלול את גרשי הציטוט &quot;&quot; סביב השם אותו אתה מצטט, הם אינם רשות.</li><li>השיטה השנייה מאפשרת לך לצטט משהו באופן עיוור. כדי להשתמש בשיטה זו תחום את הטקסט בתגים <strong>[quote][/quote]</strong>. כאשר אתה צופה בהודעה אתה פשוט תראה את הטקסט בחלון ציטוט.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'ציטוט טקסט בתגובות',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode כולל תגים המאפשרים לך לשנות את הסגנון הבסיסי של הטקסט במהירות. תוכל לבצע זאת בדרכים הבאות: <ul><li>על מנת להדגיש טקסט השתמש בתגים <strong>[b][/b]</strong>, למשל <br /><br /><strong>[b]</strong>שלום<strong>[/b]</strong><br /><br />יציג <strong>שלום</strong></li><li>לטקסט בעל קו תחתי השתמש בתגים <strong>[u][/u]</strong>, למשל:<br /><br /><strong>[u]</strong>בוקר טוב<strong>[/u]</strong><br /><br />יציג <span style="text-decoration: underline">בוקר טוב</span></li><li>לטקסט נטוי השתמש בתגים <strong>[i][/i]</strong>, למשל<br /><br />זה <strong>[i]</strong>נהדר!<strong>[/i]</strong><br /><br />יציג זה <i>נהדר!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'כיצד ליצור טקסט מודגש, נטוי ובעל קו תחתי',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Tכדי לשנות את הצבע או הגודל של הטקסט ניתן להשתמש בתגים הבאים. שים לב שאופן הצגת בפלט תלוי בדפדפן ומערכת המשתמשים: <ul><li>שינוי צבע הטקסט מתבצע באמצעות התגים <strong>[color=][/color]</strong>. תוכל לציין שם צבע רגיל (למשל red לאדום, blue לכחול, yellow לצהוב, וכד\') או בתחליף הקוד ההקסדצימלי, למשל #FFFFFF, #000000. לדוגמה, כדי ליצור טקסט אדום תוכל להשתמש:<br /><br /><strong>[color=red]</strong>שלום!<strong>[/color]</strong><br /><br />או<br /><br /><strong>[color=#FF0000]</strong>שלום!<strong>[/color]</strong><br /><br />שניהם יציגו את הפלט <span style="color:red">שלום!</span></li><li>שינוי גודל הטקסט מתבצע בדרך דומה בעזרת <strong>[size=][/size]</strong>. תג זה תלוי בערכה בה המשתמש בחר אך התבנית המומלצת עם ערך מספרי המייצג את גודל הטקסט באחוזים, החל מ־20 (קטן מאוד) ועד ל־200 (גדול מאוד) כברירת מחדל. לדוגמה:<br /><br /><strong>[size=30]</strong>קטן<strong>[/size]</strong><br /><br />יציג <span style="font-size:30%;">קטן</span><br /><br />ואלו:<br /><br /><strong>[size=200]</strong>ענק!<strong>[/size]</strong><br /><br />יציג <span style="font-size:200%;">ענק!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'כיצד לשנות צבע או גודל טקסט',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'כן, כמובן שאתה יכול, לדוגמה כדי למשך תשומת לב תוכל לכתוב:<br /><br /><strong>[size=200][color=red][b]</strong>הסתכלו עלי!<strong>[/b][/color][/size]</strong><br /><br />אשר יציג <span style="color:red;font-size:200%;"><strong>הסתכלו עלי!</strong></span><br /><br />אינינו ממליצים להציג הרבה טקסט אשר נראה כך! זכור שזו האחריות שלך, השולח, לוודא שהתגים נסגרים כראוי. למשל הצורה הבאה שגויה:<br /><br /><strong>[b][u]</strong>זה שגוי<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'האם אני יכול לשלב תגי עיצוב?',
));
