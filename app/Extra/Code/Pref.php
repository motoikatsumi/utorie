<?php

namespace App\Extra\Code;



use App\Extra\Code\CodePattern;

class Pref extends AAbstractCode implements AACodeImpl {

	public static $MISETTEI;

	public static $HOKKAIDO;

	public static $AOMORI;

	public static $IWATE;

	public static $MIYAGI;

	public static $AKITA;

	public static $YAMAGATA;

	public static $FUKUSHIMA;

	public static $IBARAGI;

	public static $TOTIGI;

	public static $GUNMA;

	public static $SAITAMA;

	public static $TIBA;

	public static $TOKYO;

	public static $KANAGAWA;

	public static $NIIGATA;

	public static $TOYAMA;

	public static $ISHIKAWA;

	public static $FUKUI;

	public static $YAMANASHI;

	public static $NAGANO;

	public static $GIFU;

	public static $SHIZUOKA;

	public static $AITI;

	public static $MIE;

	public static $SHIGA;

	public static $KYOTO;

	public static $OOSAKA;

	public static $HYOGO;

	public static $NARA;

	public static $WAKAYAMA;

	public static $TOTTORI;

	public static $SHIMANE;

	public static $OKAYAMA;

	public static $HIROSHIMA;

	public static $YAMAGUTI;

	public static $TOKUSHIMA;

	public static $KAGAWA;

	public static $EHIME;

	public static $KOTI;

	public static $FUKUOKA;

	public static $SAGA;

	public static $NAGASAKI;

	public static $KUMAMOTO;

	public static $OOITA;

	public static $MIYAZAKI;

	public static $KAGOSHIMA;

	public static $OKINAWA;



	public static function init() {

		self::$MISETTEI = [

				CodePattern::$CODE => '99',
				CodePattern::$VALUE => '未設定',
				CodePattern::$VALUE2 => '未設定',
				CodePattern::$VALUE3 => '未設定'

		];

		self::$HOKKAIDO = [

				CodePattern::$CODE => '1',
				CodePattern::$VALUE => '北海道',
				CodePattern::$VALUE2 => '北海道',
				CodePattern::$VALUE3 => 'hokkaido'
		];

		self::$AOMORI = [
				CodePattern::$CODE => '2',
				CodePattern::$VALUE => '青森県',
				CodePattern::$VALUE2 => '青森県',
				CodePattern::$VALUE3 => 'aomori'
		];

		self::$IWATE = [

				CodePattern::$CODE => '3',
				CodePattern::$VALUE => '岩手県',
				CodePattern::$VALUE2 => '岩手県',
				CodePattern::$VALUE3 => 'iwate'

		];

		self::$MIYAGI = [

				CodePattern::$CODE => '4',
				CodePattern::$VALUE => '宮城県',
				CodePattern::$VALUE2 => '宮城県',
				CodePattern::$VALUE3 => 'miyagi'
		];

		self::$AKITA = [

				CodePattern::$CODE => '5',
				CodePattern::$VALUE => '秋田県',
				CodePattern::$VALUE2 => '秋田県',
				CodePattern::$VALUE3 => 'akita',

		];

		self::$YAMAGATA = [

				CodePattern::$CODE => '6',

				CodePattern::$VALUE => '山形県',
				CodePattern::$VALUE2 => '山形県',
				CodePattern::$VALUE3 => 'yamagata'

		];

		self::$FUKUSHIMA = [

				CodePattern::$CODE => '7',
				CodePattern::$VALUE => '福島県',
				CodePattern::$VALUE2 => '福島県',
				CodePattern::$VALUE3 => 'fukushima'

		];

		self::$IBARAGI = [

				CodePattern::$CODE => '8',
				CodePattern::$VALUE => '茨城県',
				CodePattern::$VALUE2 => '茨城県',
				CodePattern::$VALUE3 => 'ibaragi'
		];

		self::$TOTIGI = [

				CodePattern::$CODE => '9',
				CodePattern::$VALUE => '栃木県',
				CodePattern::$VALUE2 => '栃木県',
				CodePattern::$VALUE3 => 'tochigi'

		];

		self::$GUNMA = [

				CodePattern::$CODE => '10',
				CodePattern::$VALUE => '群馬県',
				CodePattern::$VALUE2 => '群馬県',
				CodePattern::$VALUE3 => 'gunnma'

		];

		self::$SAITAMA = [

				CodePattern::$CODE => '11',
				CodePattern::$VALUE => '埼玉県',
				CodePattern::$VALUE2 => '埼玉県',
				CodePattern::$VALUE3 => 'saitama'
		];

		self::$TIBA = [

				CodePattern::$CODE => '12',
				CodePattern::$VALUE => '千葉県',
				CodePattern::$VALUE2 => '千葉県',
				CodePattern::$VALUE3 => 'chiba'
		];

		self::$TOKYO = [

				CodePattern::$CODE => '13',
				CodePattern::$VALUE => '東京都',
				CodePattern::$VALUE2 => '東京都',
				CodePattern::$VALUE3 => 'tokyo'
		];

		self::$KANAGAWA = [

				CodePattern::$CODE => '14',
				CodePattern::$VALUE => '神奈川県',
				CodePattern::$VALUE2 => '神奈川県',
				CodePattern::$VALUE3 => 'kanagawa'
		];

		self::$NIIGATA = [
				CodePattern::$CODE => '15',
				CodePattern::$VALUE => '新潟県',
				CodePattern::$VALUE2 => '新潟県',
				CodePattern::$VALUE3 => 'niigata'
		];

		self::$TOYAMA = [
				CodePattern::$CODE => '16',
				CodePattern::$VALUE => '富山県',
				CodePattern::$VALUE2 => '富山県',
				CodePattern::$VALUE3 => 'toyama'
		];

		self::$ISHIKAWA = [

				CodePattern::$CODE => '17',
				CodePattern::$VALUE => '石川県',
				CodePattern::$VALUE2 => '石川県',
				CodePattern::$VALUE3 => 'ishikawa'
		];

		self::$FUKUI = [

				CodePattern::$CODE => '18',
				CodePattern::$VALUE => '福井県',
				CodePattern::$VALUE2 => '福井県',
				CodePattern::$VALUE3 => 'fukui'
		];

		self::$YAMANASHI = [

				CodePattern::$CODE => '19',
				CodePattern::$VALUE => '山梨県',
				CodePattern::$VALUE2 => '山梨県',
				CodePattern::$VALUE3 => 'yamanashi'
		];

		self::$NAGANO = [

				CodePattern::$CODE => '20',
				CodePattern::$VALUE => '長野県',
				CodePattern::$VALUE2 => '長野県',
				CodePattern::$VALUE3 => 'nagano'
		];

		self::$GIFU = [

				CodePattern::$CODE => '21',
				CodePattern::$VALUE => '岐阜県',
				CodePattern::$VALUE2 => '岐阜県',
				CodePattern::$VALUE3 => 'gifu'
		];

		self::$SHIZUOKA = [

				CodePattern::$CODE => '22',
				CodePattern::$VALUE => '静岡県',
				CodePattern::$VALUE2 => '静岡県',
				CodePattern::$VALUE3 => 'shizuoka'
		];

		self::$AITI = [

				CodePattern::$CODE => '23',
				CodePattern::$VALUE => '愛知県',
				CodePattern::$VALUE2 => '愛知県',
				CodePattern::$VALUE3 => 'aichi'
		];

		self::$MIE = [

				CodePattern::$CODE => '24',
				CodePattern::$VALUE => '三重県',
				CodePattern::$VALUE2 => '三重県',
				CodePattern::$VALUE3 => 'mie'
		];

		self::$SHIGA = [

				CodePattern::$CODE => '25',
				CodePattern::$VALUE => '滋賀県',
				CodePattern::$VALUE2 => '滋賀県',
				CodePattern::$VALUE3 => 'shiga'
		];

		self::$KYOTO = [

				CodePattern::$CODE => '26',
				CodePattern::$VALUE => '京都府',
				CodePattern::$VALUE2 => '京都府',
				CodePattern::$VALUE3 => 'kyouto'
		];

		self::$OOSAKA = [

				CodePattern::$CODE => '27',
				CodePattern::$VALUE => '大阪府',
				CodePattern::$VALUE2 => '大阪府',
				CodePattern::$VALUE3 => 'oosaka'
		];

		self::$HYOGO = [

				CodePattern::$CODE => '28',
				CodePattern::$VALUE => '兵庫県',
				CodePattern::$VALUE2 => '兵庫県',
				CodePattern::$VALUE3 => 'hyougo'
		];

		self::$NARA = [

				CodePattern::$CODE => '29',
				CodePattern::$VALUE => '奈良県',
				CodePattern::$VALUE2 => '奈良県',
				CodePattern::$VALUE3 => 'nara'
		];

		self::$WAKAYAMA = [

				CodePattern::$CODE => '30',
				CodePattern::$VALUE => '和歌山県',
				CodePattern::$VALUE2 => '和歌山県',
				CodePattern::$VALUE3 => 'wakayama'
		];

		self::$TOTTORI = [

				CodePattern::$CODE => '31',
				CodePattern::$VALUE => '鳥取県',
				CodePattern::$VALUE2 => '鳥取県',
				CodePattern::$VALUE3 => 'tottori'
		];

		self::$SHIMANE = [

				CodePattern::$CODE => '32',
				CodePattern::$VALUE => '島根県',
				CodePattern::$VALUE2 => '島根県',
				CodePattern::$VALUE3 => 'shimane'
		];

		self::$OKAYAMA = [

				CodePattern::$CODE => '33',
				CodePattern::$VALUE => '岡山県',
				CodePattern::$VALUE2 => '岡山県',
				CodePattern::$VALUE3 => 'okayama'
		];

		self::$HIROSHIMA = [

				CodePattern::$CODE => '34',
				CodePattern::$VALUE => '広島県',
				CodePattern::$VALUE2 => '広島県',
				CodePattern::$VALUE3 => 'hiroshima'
		];

		self::$YAMAGUTI = [

				CodePattern::$CODE => '35',
				CodePattern::$VALUE => '山口県',
				CodePattern::$VALUE2 => '山口県',
				CodePattern::$VALUE3 => 'yamaguchi'
		];

		self::$TOKUSHIMA = [

				CodePattern::$CODE => '36',
				CodePattern::$VALUE => '徳島県',
				CodePattern::$VALUE2 => '徳島県',
				CodePattern::$VALUE3 => 'tokushima'
		];

		self::$KAGAWA = [

				CodePattern::$CODE => '37',
				CodePattern::$VALUE => '香川県',
				CodePattern::$VALUE2 => '香川県',
				CodePattern::$VALUE3 => 'kagawa'
		];

		self::$EHIME = [

				CodePattern::$CODE => '38',
				CodePattern::$VALUE => '愛媛県',
				CodePattern::$VALUE2 => '愛媛県',
				CodePattern::$VALUE3 => 'ehime'
		];

		self::$KOTI = [

				CodePattern::$CODE => '39',
				CodePattern::$VALUE => '高知県',
				CodePattern::$VALUE2 => '高知県',
				CodePattern::$VALUE3 => 'kouchi'
		];

		self::$FUKUOKA = [

				CodePattern::$CODE => '40',
				CodePattern::$VALUE => '福岡県',
				CodePattern::$VALUE2 => '福岡県',
				CodePattern::$VALUE3 => 'fukuoka'
		];

		self::$SAGA = [

				CodePattern::$CODE => '41',
				CodePattern::$VALUE => '佐賀県',
				CodePattern::$VALUE2 => '佐賀県',
				CodePattern::$VALUE3 => 'saga'
		];

		self::$NAGASAKI = [

				CodePattern::$CODE => '42',
				CodePattern::$VALUE => '長崎県',
				CodePattern::$VALUE2 => '長崎県',
				CodePattern::$VALUE3 => 'nagasaki'
		];

		self::$KUMAMOTO = [

				CodePattern::$CODE => '43',
				CodePattern::$VALUE => '熊本県',
				CodePattern::$VALUE2 => '熊本県',
				CodePattern::$VALUE3 => 'kumamoto'
		];

		self::$OOITA = [

				CodePattern::$CODE => '44',
				CodePattern::$VALUE => '大分県',
				CodePattern::$VALUE2 => '大分県',
				CodePattern::$VALUE3 => 'ooita'
		];

		self::$MIYAZAKI = [

				CodePattern::$CODE => '45',
				CodePattern::$VALUE => '宮崎県',
				CodePattern::$VALUE2 => '宮崎県',
				CodePattern::$VALUE3 => 'miyazaki'
		];

		self::$KAGOSHIMA = [

				CodePattern::$CODE => '46',
				CodePattern::$VALUE => '鹿児島県',
				CodePattern::$VALUE2 => '鹿児島県',
				CodePattern::$VALUE3 => 'kagoshima'
		];

		self::$OKINAWA = [

				CodePattern::$CODE => '47',
				CodePattern::$VALUE => '沖縄県',
				CodePattern::$VALUE2 => '沖縄県',
				CodePattern::$VALUE3 => 'okinawa'
		];

	}



	/**

	 * 地域別都道府県

	 */

	public static function getRegionOptions() {

		return [

				"北海道・東北"=> [

						self::$HOKKAIDO[CodePattern::$CODE]=> self::$HOKKAIDO[CodePattern::$VALUE],

						self::$AOMORI[CodePattern::$CODE]=> self::$AOMORI[CodePattern::$VALUE],

						self::$AKITA[CodePattern::$CODE]=> self::$AKITA[CodePattern::$VALUE],

						self::$YAMAGATA[CodePattern::$CODE]=> self::$YAMAGATA[CodePattern::$VALUE],

						self::$IWATE[CodePattern::$CODE]=> self::$IWATE[CodePattern::$VALUE],

						self::$MIYAGI[CodePattern::$CODE]=> self::$MIYAGI[CodePattern::$VALUE],

						self::$FUKUSHIMA[CodePattern::$CODE]=> self::$FUKUSHIMA[CodePattern::$VALUE]

				],

				"関東"=> [

						self::$TOKYO[CodePattern::$CODE]=> self::$TOKYO[CodePattern::$VALUE],

						self::$KANAGAWA[CodePattern::$CODE]=> self::$KANAGAWA[CodePattern::$VALUE],

						self::$SAITAMA[CodePattern::$CODE]=> self::$SAITAMA[CodePattern::$VALUE],

						self::$TIBA[CodePattern::$CODE]=> self::$TIBA[CodePattern::$VALUE],

						self::$IBARAGI[CodePattern::$CODE]=> self::$IBARAGI[CodePattern::$VALUE],

						self::$TOTIGI[CodePattern::$CODE]=> self::$TOTIGI[CodePattern::$VALUE],

						self::$GUNMA[CodePattern::$CODE]=> self::$GUNMA[CodePattern::$VALUE]

				],

				"北陸・甲信越"=> [

						self::$NIIGATA[CodePattern::$CODE]=> self::$NIIGATA[CodePattern::$VALUE],

						self::$YAMANASHI[CodePattern::$CODE]=> self::$YAMANASHI[CodePattern::$VALUE],

						self::$NAGANO[CodePattern::$CODE]=> self::$NAGANO[CodePattern::$VALUE],

						self::$ISHIKAWA[CodePattern::$CODE]=> self::$ISHIKAWA[CodePattern::$VALUE],

						self::$TOYAMA[CodePattern::$CODE]=> self::$TOYAMA[CodePattern::$VALUE],

						self::$FUKUI[CodePattern::$CODE]=> self::$FUKUI[CodePattern::$VALUE]

				],

				"中部"=> [

						self::$AITI[CodePattern::$CODE]=> self::$AITI[CodePattern::$VALUE],

						self::$GIFU[CodePattern::$CODE]=> self::$GIFU[CodePattern::$VALUE],

						self::$MIE[CodePattern::$CODE]=> self::$MIE[CodePattern::$VALUE],

						self::$SHIZUOKA[CodePattern::$CODE]=> self::$SHIZUOKA[CodePattern::$VALUE]

				],

				"関西"=> [

						self::$OOSAKA[CodePattern::$CODE]=> self::$OOSAKA[CodePattern::$VALUE],

						self::$HYOGO[CodePattern::$CODE]=> self::$HYOGO[CodePattern::$VALUE],

						self::$KYOTO[CodePattern::$CODE]=> self::$KYOTO[CodePattern::$VALUE],

						self::$SHIGA[CodePattern::$CODE]=> self::$SHIGA[CodePattern::$VALUE],

						self::$NARA[CodePattern::$CODE]=> self::$NARA[CodePattern::$VALUE],

						self::$WAKAYAMA[CodePattern::$CODE]=> self::$WAKAYAMA[CodePattern::$VALUE]

				],

				"中国"=> [

						self::$OKAYAMA[CodePattern::$CODE]=> self::$OKAYAMA[CodePattern::$VALUE],

						self::$HIROSHIMA[CodePattern::$CODE]=> self::$HIROSHIMA[CodePattern::$VALUE],

						self::$TOTTORI[CodePattern::$CODE]=> self::$TOTTORI[CodePattern::$VALUE],

						self::$SHIMANE[CodePattern::$CODE]=> self::$SHIMANE[CodePattern::$VALUE],

						self::$YAMAGUTI[CodePattern::$CODE]=> self::$YAMAGUTI[CodePattern::$VALUE]

				],

				"四国"=> [

						self::$KAGAWA[CodePattern::$CODE]=> self::$KAGAWA[CodePattern::$VALUE],

						self::$TOKUSHIMA[CodePattern::$CODE]=> self::$TOKUSHIMA[CodePattern::$VALUE],

						self::$EHIME[CodePattern::$CODE]=> self::$EHIME[CodePattern::$VALUE],

						self::$KOTI[CodePattern::$CODE]=> self::$KOTI[CodePattern::$VALUE]

				],

				"九州・沖縄"=> [

						self::$FUKUOKA[CodePattern::$CODE]=> self::$FUKUOKA[CodePattern::$VALUE],

						self::$SAGA[CodePattern::$CODE]=> self::$SAGA[CodePattern::$VALUE],

						self::$NAGASAKI[CodePattern::$CODE]=> self::$NAGASAKI[CodePattern::$VALUE],

						self::$KUMAMOTO[CodePattern::$CODE]=> self::$KUMAMOTO[CodePattern::$VALUE],

						self::$OOITA[CodePattern::$CODE]=> self::$OOITA[CodePattern::$VALUE],

						self::$MIYAZAKI[CodePattern::$CODE]=> self::$MIYAZAKI[CodePattern::$VALUE],

						self::$KAGOSHIMA[CodePattern::$CODE]=> self::$KAGOSHIMA[CodePattern::$VALUE],

						self::$OKINAWA[CodePattern::$CODE]=> self::$OKINAWA[CodePattern::$VALUE]

				]

		];

	}



	/**

	 * ブランド詳細ページ用並び替え

	 */

	public static function getAll() {

		return  [

				self::$HOKKAIDO,

				self::$AOMORI,

				self::$IWATE,

				self::$MIYAGI,

				self::$AKITA,

				self::$YAMAGATA,

				self::$FUKUSHIMA,

				self::$IBARAGI,

				self::$TOTIGI,

				self::$GUNMA,

				self::$SAITAMA,

				self::$TIBA,

				self::$TOKYO,

				self::$KANAGAWA,

				self::$NIIGATA,

				self::$TOYAMA,

				self::$ISHIKAWA,

				self::$FUKUI,

				self::$YAMANASHI,

				self::$NAGANO,

				self::$GIFU,

				self::$SHIZUOKA,

				self::$AITI,

				self::$MIE,

				self::$SHIGA,

				self::$KYOTO,

				self::$OOSAKA,

				self::$HYOGO,

				self::$NARA,

				self::$WAKAYAMA,

				self::$TOTTORI,

				self::$SHIMANE,

				self::$OKAYAMA,

				self::$HIROSHIMA,

				self::$YAMAGUTI,

				self::$TOKUSHIMA,

				self::$KAGAWA,

				self::$EHIME,

				self::$KOTI,

				self::$FUKUOKA,

				self::$SAGA,

				self::$NAGASAKI,

				self::$KUMAMOTO,

				self::$OOITA,

				self::$MIYAZAKI,

				self::$KAGOSHIMA,

				self::$OKINAWA

		];



	}

}

Pref::init();

?>

