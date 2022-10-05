<?php
namespace App\Traits;

use App\Models\Role;

trait HasPermissions
{

    protected $permissionList = null;

    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id');
    }

    public function hasRole($role)
    {
        if ($role == $this->roles->name) {
            return true;
        }
        return false;
    }

    public function hasPermission($permission = null)
    {
        if (is_null($permission)) {
            return $this->getPermissions()->count();
        }

        if (is_string($permission)) {
            return $this->getPermissions()->contains('name', $permission);
        }

        return false;
    }

    private function getPermissions()
    {
        $role = $this->roles->first();
        if ($role) {
            if (! $role->relationLoaded('permissions')) {
                $this->roles->load('permissions');
            }

            $this->permissionList = $this->roles->pluck('permissions')->flatten();
        }

        return $this->permissionList ?? collect();
    }
}