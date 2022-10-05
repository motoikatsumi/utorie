<?php


namespace App\Enums;


class EImage {
    const COMPANY = 1;
    const ASIDE = 2;

    public static function getImageType($status) {
        switch ($status) {
            case EImage::COMPANY:
                return 1;
            case EImage::ASIDE:
                return 2;
        }
        return null;
    }
}
