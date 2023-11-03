<?php

namespace App\Livewire;

use App\Service\RoleService;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;

class RoleForm extends Component
{
    public $role;

    public $permissions;

    public $name;

    public $ids;

    public $permission = [];

    public function mount(Role $role)
    {
        $this->permissions = Permission::all(['id', 'name']);

        if ($role->toArray()) {
            $this->ids = $role->id;
            $this->name = $role->name;
            $this->permission = $role->permissions->pluck('id');
        }
    }

    protected function rules()
    {
        if ($this->role?->toArray()) {
            return [
                'name' => 'required|unique:roles,name,'.$this->role?->id,
                'permission' => 'required|array',
            ];
        } else {
            return [
                'name' => 'required|unique:roles,name',
                'permission' => 'required|array',
            ];
        }
    }

    protected $message = [
        'name.required' => 'This Field Is Required',
        'permission.required' => 'This Field Is Required',
    ];

    public function submit(RoleService $service)
    {
        $this->validate();

        if ($this->role?->toArray()) {
            $service->edit($this->name, $this->ids, $this->permission);
            Alert::success('Berhasil!', 'Role Berhasil Di Ubah');
        } else {
            $service->create($this->name, $this->permission);
            Alert::success('Berhasil!', 'Role Berhasil Di Tambahkan');
        }

        return redirect()->route('role.page');
    }

    public function render()
    {
        return view('livewire.role-form')->extends("layouts.home");
    }
}
