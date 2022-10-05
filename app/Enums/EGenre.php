<?php


namespace App\Enums;


class EGenre {
    const NAME = "name";
    const CODE = "genre_code";
    const SEARCH_TEXT = "search_text";
    const URL_TEXT = "url_text";
    public static function getAll() {
        return [
            self::GENRE_NAME,
            self::GENRE_CODE,
            self::SEARCH_TEXT,
            self::URL_TEXT
        ];
    }
}
