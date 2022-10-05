<?php


namespace App\Enums;


class EStatus {
    const DELETED = -1;
    const WAITING = 0;
    const ACTIVE = 1;
    const HIDE = 2;

    public static function getStatusString($status) {
        switch ($status) {
            case EStatus::DELETED:
                return 'Deleted';
            case EStatus::WAITING:
                return 'Waiting';
            case EStatus::ACTIVE:
                return 'Active';
            case EStatus::HIDE:
                return 'HIDE';
        }
        return null;
    }
}
