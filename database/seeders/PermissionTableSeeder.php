<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'blog',

            'comment',

            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'meta-tags-list',

            'contact-us'
        ];
        $dynamicID = [
            '1',

            '2',

            '4',
            '4',
            '4',
            '4',

            '5',
            '5',
            '5',
            '5',
            
            '6',

            '7',
        ];


        for ($i = 0; $i < count($permissions); $i++) {
            Permission::updateOrInsert(
                ['name' => $permissions[$i]], // Match by 'name'
                [
                    'dynamic_menu_id' => $dynamicID[$i],
                    'guard_name' => 'web',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    // If you have other fields to update, add them here
                ]
            );
        }
    }
}
