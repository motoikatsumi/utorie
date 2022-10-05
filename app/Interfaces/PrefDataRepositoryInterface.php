<?php
namespace App\Interfaces;

interface PrefDataRepositoryInterface
{
    /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
	public function getAreaInPrefecture($pref_id, $type);
}