<?php
namespace App\Extra\Code;
use App\Extra\Code\CodePattern;
class SettingDefault extends AAbstractCode implements AACodeImpl {
	public static $GA_TAG;
	public static $ADMIN_EMAIL;
	public static function init() {
		self::$GA_TAG = [
				CodePattern::$CODE => '1',
				CodePattern::$VALUE => 'GA Tags',
				CodePattern::$VALUE2 => '',
				CodePattern::$INPUTNAME => 'ga_tags'
		];
		self::$ADMIN_EMAIL = [
				CodePattern::$CODE => '2',
				CodePattern::$VALUE => 'Admin Email',
				CodePattern::$VALUE2 => env('MAIL_DEFAUTL_ADMIN') ?? 'phucbui.32199@gmail.com',
				CodePattern::$INPUTNAME => 'admin_email'
		];
	}

	public static function getAll() {
		return  [
				self::$GA_TAG,
				self::$ADMIN_EMAIL
		];
	}
}
SettingDefault::init();
?>

