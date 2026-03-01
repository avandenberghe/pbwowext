<?php
/**
 *
 * PBWoW 3.2. An extension for the phpBB Forum Software package.
 * Arabic translation
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ' « » " " …
//

$lang = array_merge($lang, array(
	// Extension modules
	'ACP_PBWOWEXT_CATEGORY'		=> 'PBWoW 3',
	'ACP_PBWOWEXT_CONFIG'			=> 'الإعدادات',

	// Extension requirements
	'EXTENSION_REQUIRES_330'		=> 'تتطلب هذه الإضافة phpBB 3.3.0 أو أحدث.',


	'LOG_PBWOW_CONFIG'			=> '<strong>تم تعديل إعدادات PBWoW</strong><br />&raquo; %s',


	'PBWOW_DB_CHECK'					=> 'فحص قاعدة بيانات PBWoW',
	'PBWOW_DB_GOOD'						=> 'تم العثور على جدول إعدادات PBWoW (%s)',
	'PBWOW_DB_BAD'						=> 'لم يتم العثور على جدول إعدادات PBWoW. تأكد من وجود الجدول (%s) في قاعدة بيانات phpBB الخاصة بك.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'حاول تعطيل إضافة PBWoW 3 ثم إعادة تفعيلها. إذا لم ينجح ذلك، قم بتعطيل الإضافة وحذف بياناتها. ثم حاول تفعيلها مرة أخرى.',

	'PBWOW_VERSION_CHECK'				=> 'فحص إصدار PBWoW',
	'PBWOW_LATEST_VERSION'				=> 'أحدث إصدار',
	'PBWOW_EXT_VERSION'					=> 'إصدار الإضافة',
	'PBWOW_STYLE_VERSION'				=> 'إصدار النمط',
	'PBWOW_LATEST_STYLE_VERSION'		=> 'أحدث إصدار للنمط',
	'PBWOW_CHECK_UPDATE'				=> 'تحقق من <a href="https://www.avathar.be/forum/index.php">avathar.be</a> لمعرفة ما إذا كانت هناك تحديثات متاحة.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'تبرع عبر PayPal',
	'PBWOW_DONATE'						=> 'تبرع لـ PBWoW',
	'PBWOW_DONATE_SHORT'				=> 'قدّم تبرعاً لـ PBWoW',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW مجاني 100%. إنه مشروع هواية أقضي فيه وقتي ومالي، فقط من أجل المتعة. إذا كنت تستمتع باستخدام PBWoW، يرجى التفكير في تقديم تبرع. سأكون ممتناً حقاً. بدون أي التزامات.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'إعدادات PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'من هنا يمكنك اختيار بعض الخيارات لتخصيص تثبيت PBWoW الخاص بك.',

	'PBWOW_LOGO'						=> 'شعار مخصص',
	'PBWOW_LOGO_ENABLE'					=> 'تفعيل صورة الشعار المخصص',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'سيؤدي هذا إلى تفعيل شعارك المخصص لجميع أنماط PBWoW المثبتة (باستثناء نمط PBWoW الرئيسي).',
	'PBWOW_LOGO_SRC'					=> 'مسار مصدر الصورة',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'مسار الصورة ضمن المجلد الجذر لـ phpBB، مثال: <samp>images/logo.png</samp>.<br />يُنصح بشدة باستخدام صورة PNG بخلفية شفافة.',
	'PBWOW_LOGO_SIZE'					=> 'أبعاد الشعار',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'الأبعاد الدقيقة لصورة شعارك (العرض × الارتفاع بالبكسل).<br />لا يُنصح بصور أكبر من 350 × 200 (بسبب التصميم المتجاوب).',
	'PBWOW_LOGO_MARGINS'				=> 'هوامش الشعار',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'قم بتعيين هوامش CSS لشعارك. سيمنحك هذا مزيداً من التحكم في موضع صورتك. استخدم ترميز CSS صالح، مثال: <samp>10px 5px 25px 0</samp>.',

	'PBWOW_AVATARS'						=> 'صور رمزية للألعاب',
	'PBWOW_AVATARS_ENABLE'				=> 'تفعيل الصور الرمزية للألعاب (والأيقونات) على مستوى المنتدى',
	'PBWOW_AVATARS_ENABLE_EXPLAIN'		=> 'عند التفعيل، سيعرض PBWoW صورة رمزية مولّدة من الألعاب بناءً على إدخالات حقل bbGuild إذا لم يكن لدى المستخدم صورة رمزية مخصصة.',
	'PBWOW_SMALLRANKS_ENABLE'			=> 'استخدام صور رتب صغيرة',
	'PBWOW_SMALLRANKS_ENABLE_EXPLAIN'	=> 'فعّل هذا إذا كنت ترغب في استخدام صور رتب صغيرة تظهر فوق الصورة الرمزية. لا تفعّل هذا إذا كنت تستخدم صور رتب كبيرة.',

	'PBWOW_TOPBAR'						=> 'الشريط العلوي',
	'PBWOW_TOPBAR_ENABLE'				=> 'تفعيل الشريط العلوي',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'عند تفعيل هذا الخيار، سيظهر شريط قابل للتخصيص بارتفاع 40 بكسل في أعلى كل صفحة.',
	'PBWOW_TOPBAR_CODE'					=> 'كود الشريط العلوي',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'أدخل الكود هنا. استخدم عناصر &lt;span&gt; أو &lt;a class="cell"&gt; لفصل الكتل بحدود. لاستخدام الأيقونات، استخدم كتل &lt;img&gt; أو عرّف فئات CSS خاصة في ملف custom.css (الأفضل).',
	'PBWOW_TOPBAR_FIXED'				=> 'تثبيت في الأعلى',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'تثبيت الشريط العلوي في أعلى الشاشة سيبقيه مرئياً ومثبتاً في مكانه حتى عند التمرير.<br />لا ينطبق هذا على الأجهزة المحمولة. سيعود إلى الوضع الافتراضي (التمرير) عند العرض على الشاشات الصغيرة.',

	'PBWOW_HEADERLINKS'					=> 'روابط مخصصة في صندوق الرأس',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'تفعيل الروابط المخصصة في صندوق الرأس',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'عند تفعيل هذا الخيار، سيتم عرض كود HTML المدخل أدناه داخل الصندوق في أعلى يمين الشاشة (في السطر قبل رابط الأسئلة الشائعة). هذا مفيد لروابط البوابة و DKP (سيتم الكشف عن بعضها تلقائياً).',
	'PBWOW_HEADERLINKS_CODE'			=> 'كود الروابط المخصصة في الرأس',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'أدخل روابطك المخصصة هنا. يجب أن تكون مغلفة بعناصر &lt;li&gt;. لاستخدام الأيقونات، يرجى تعريف فئات CSS في ملف custom.css.',

	'PBWOW_VIDEOBG'						=> 'إعدادات الخلفية (فيديو)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'تفعيل خلفيات الفيديو المتحركة',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'تدعم بعض أنماط PBWoW خلفيات فيديو متحركة خاصة (ليس جميعها). يمكنك تفعيلها للحصول على تأثير رائع، أو تعطيلها لتوفير عرض النطاق الترددي (أو في حال واجهت مشاكل).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'عرض خلفيات الفيديو في جميع الصفحات؟',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'افتراضياً، يقوم PBWoW بتحميل خلفيات الفيديو (إن توفرت) فقط في صفحات <u>index.php</u>. يمكنك تفعيلها لجميع الصفحات، لكن هذا قد يؤثر على سرعة التصفح لدى زوارك (لكن بشكل عام ليس على عرض النطاق الترددي لخادمك، لأنها تُخزَّن مؤقتاً محلياً). [ينطبق فقط إذا كان الفيديو مفعّلاً]',

	'PBWOW_FIXEDBG'						=> 'تثبيت موضع الخلفية',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'تثبيت موضع الخلفية (بما في ذلك الفيديو) سيمنعها من التمرير مع بقية المحتوى. ضع في اعتبارك أن بعض الأجهزة ذات الدقة المنخفضة لن تتمكن من عرض صورة الخلفية بالكامل.',

	'PBWOW_ADS_INDEX'					=> 'كتلة إعلانية على الصفحة الرئيسية للمواضيع الأخيرة',
	'PBWOW_ADS_INDEX_ENABLE'			=> 'تفعيل الإعلان على الصفحة الرئيسية',
	'PBWOW_ADS_INDEX_ENABLE_EXPLAIN'	=> 'سيؤدي تفعيل هذا إلى إنشاء كتلة إعلانية ضيقة على صفحة فهرس المنتدى (تتطلب إضافة المواضيع الأخيرة).',
	'PBWOW_ADS_INDEX_CODE'				=> 'كود الإعلان على الصفحة الرئيسية',
	'PBWOW_ADS_INDEX_CODE_EXPLAIN'		=> 'هذه الكتلة مناسبة للإعلانات بـ<u>عرض</u>: <b>300px</b>.<br />إذا كنت ترغب في استخدام/تغيير تنسيق CSS مخصص، يرجى إضافته إلى <samp>ext/paybas/pbwowext/styles/pbwow3/theme/pbwowext.css</samp>',
));
