<?php

namespace Database\Seeders;

use App\Models\Cache;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user',
            'role',
            'permission',
            'banner',
            'brand',
            'branch',
            'brand-model',
            'promotion',
            'product',
            'advice',
            'category',
            'specification',
            'product-car',
            'warranty',
            'branch-review',
            'product-review',
            'contact',
            'registrasi-event',
            'customer',
            'more-information',
            'policy',
            'shock-size',
            'captcha',
            'news',
            'bisnis',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
