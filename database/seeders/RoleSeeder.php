<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();
        $role = [
            [
                'name' => 'user',
            ],
            [
                'name'=>'admin',
            ]
        ];
        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
