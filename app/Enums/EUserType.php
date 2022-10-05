<?php
namespace App\Enums;
class EUserType {
    const MEMBER = 'member';
    const ADMIN = 'admin';
    public static function getStatusString($status) {
        switch ($status) {
            case EUserType::MEMBER:
                return '';
            case EUserType::ADMIN:
                return '';
        }
        return null;
    }
}
