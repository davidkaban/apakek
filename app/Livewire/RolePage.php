<?php

namespace App\Livewire;
use Livewire\WithPagination;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolePage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name;

    public function getData()
    {
        return Role::orderByDesc('id')
            ->when($this->name, fn ($query) => $query->where('name', 'LIKE', "%{$this->name}%"))
            ->paginate(20);
    }

    public function updatingName()
    {
        return $this->resetPage();
    }

    public function render()
    {
        return view('livewire.role-page', [
            'roles' => $this->getData(),
        ])->extends('layouts.home');
    }
}
