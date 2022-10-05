<?php

namespace App\Extra\Code;

use App\Extra\Code\CodePattern;
class GenreDefault extends AAbstractCode implements AACodeImpl {
	public static $IKKODATE;
	public static $TOCHI;
	public static $REMODEL;
	public static $TOUSHI;
	public static function init() {
		self::$IKKODATE = [
				CodePattern::$CODE => '1',
				CodePattern::$VALUE => 'ハウスメーカー',
				CodePattern::$VALUE2 => 'ハウスメーカー・工務店',
				CodePattern::$VALUE3 => 'ikkodate'
		];

		self::$TOCHI = [
				CodePattern::$CODE => '2',
				CodePattern::$VALUE => '不動産会社（土地）',
				CodePattern::$VALUE2 => '土地',
				CodePattern::$VALUE3 => 'tochi'
		];

		self::$REMODEL = [
				CodePattern::$CODE => '3',
				CodePattern::$VALUE => 'リフォーム会社',
				CodePattern::$VALUE2 => 'リフォーム・リノベーション',
				CodePattern::$VALUE3 => 'remodel'
		];

		self::$TOUSHI = [
				CodePattern::$CODE => '4',
				CodePattern::$VALUE => '不動産投資会社',
				CodePattern::$VALUE2 => '〃',
				CodePattern::$VALUE3 => 'toushi'
		];
	}

	public static function getAll() {
		return  [
				self::$IKKODATE,
				self::$TOCHI,
				self::$REMODEL,
				self::$TOUSHI
		];
	}
}

GenreDefault::init();

?>

