<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateDynamicMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu =[
            [
                'id' => 1,
                'icon' => 'fal fa-lg fa-fw fa-blog',
                'title' => 'Blog',
                'page_id' => 1,
                'url' => 'admin/blog',
                'parent_id' => 1,
                'is_parent' => 1,
                'show_menu' => 1,
                'parent_order' => 1,
                'child_order' => 1,
                'fOrder' => 1.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'icon' => 'fal fa-lg fa-fw fa-comments',
                'title' => 'Comment',
                'page_id' => 2,
                'url' => 'admin/comment',
                'parent_id' => 2,
                'is_parent' => 1,
                'show_menu' => 1,
                'parent_order' => 1,
                'child_order' => 1,
                'fOrder' => 2.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'icon' => 'fal fa-lg fa-fw fa-user',
                'title' => 'Admin',
                'page_id' => 3,
                'url' => '#',
                'parent_id' => 0,
                'is_parent' => 1,
                'show_menu' => 1,
                'parent_order' => 3,
                'child_order' => 0,
                'fOrder' => 3.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'icon' => '',
                'title' => 'User',
                'page_id' => 4,
                'url' => 'admin/users-list',
                'parent_id' => 3,
                'is_parent' => 0,
                'show_menu' => 1,
                'parent_order' => NULL,
                'child_order' => 1,
                'fOrder' => 3.01,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'icon' => '',
                'title' => 'Role',
                'page_id' => 5,
                'url' => 'admin/roles-list',
                'parent_id' => 3,
                'is_parent' => 0,
                'show_menu' => 1,
                'parent_order' => NULL,
                'child_order' => 2,
                'fOrder' => 3.02,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
             [
                'id' => 6,
                'icon' => 'fal fa-lg fa-fw fa-comments',
                'title' => 'Meta Data',
                'page_id' => 6,
                'url' => 'admin/meta-tags-list',
                'parent_id' => 6,
                'is_parent' => 0,
                'show_menu' => 1,
                'parent_order' => 1,
                'child_order' => 1,
                'fOrder' => 6.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id' => 7,
                'icon' => 'fal fa-lg fa-fw fa-comments',
                'title' => 'Contact Us',
                'page_id' => 7,
                'url' => 'admin/contact-us',
                'parent_id' => 7,
                'is_parent' => 0,
                'show_menu' => 1,
                'parent_order' => 1,
                'child_order' => 1,
                'fOrder' => 6.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            
        ];

        if(isset($menu) && count($menu)>0){

            foreach ($menu as $item) {
                DB::table('dynamic_menus')->updateOrInsert(
                    ['id' => $item['id']], // Match by `id`
                    [
                        'icon' => $item['icon'],
                        'title' => $item['title'],
                        'page_id' => $item['page_id'],
                        'url' => $item['url'],
                        'parent_id' => $item['parent_id'],
                        'is_parent' => $item['is_parent'],
                        'show_menu' => $item['show_menu'],
                        'parent_order' => $item['parent_order'],
                        'child_order' => $item['child_order'],
                        'fOrder' => $item['fOrder'],
                        'updated_at' => now(), // Update `updated_at` always
                    ]
                );
            }
    }
    }
}
