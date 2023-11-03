<?php

use App\Livewire\PermissionForm;
use App\Livewire\PermissionPage;
use App\Livewire\RoleDetail;
use App\Livewire\RoleForm;
use App\Livewire\RolePage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-role', RolePage::class)->name('role.page');
Route::get('admin-role-form', RoleForm::class)->name('role.form');
Route::get('admin-role-edit/{role}', RoleForm::class)->name('role.edit');
Route::get('admin-role-detail/{role}', RoleDetail::class)->name('role.detail');

Route::get('admin-permission', PermissionPage::class)->name('permission.page');
Route::get('admin-permission-form', PermissionForm::class)->name('permission.form');
Route::get('admin-permission-edit/{permission}', PermissionForm::class)->name('permission.edit');
