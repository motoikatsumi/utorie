<?php


namespace App\Enums;


class EPref {
    const PREF_NAME = "name";
    const PREF_CODE = "pref_code";
    const SEARCH_TEXT = "search_text";
    const URL_TEXT = "url_text";
    public static function getAll() {
        return [
            self::PREF_NAME,
            self::PREF_CODE,
            self::SEARCH_TEXT,
            self::URL_TEXT
        ];
    }
}
