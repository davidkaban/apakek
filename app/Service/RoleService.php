<?php

namespace App\Service;

use Spatie\Permission\Models\Role;

class RoleService
{
    public function create($name, $permission)
    {
        $role = Role::create(['name' => $name]);
        $role->syncPermissions($permission);
    }

    public function edit($name, $id, $permission)
    {
        $role = Role::find($id);
        $role->update(['name' => $name]);
        $role->syncPermissions($permission);
    }
}
