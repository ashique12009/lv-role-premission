<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name' => 'Ashique User',
            'email' => 'user@gm.com',
            'password' => bcrypt('admin12009')
            ],
            [
            'name' => 'Somel Editor',
            'email' => 'editor@gm.com',
            'password' => bcrypt('admin12009')
            ],
            [
            'name' => 'Alamin Author',
            'email' => 'author@gm.com',
            'password' => bcrypt('admin12009')
            ],
        ]);

        Role::insert([
            ['name' => 'Editor', 'slug' => 'editor'],
            ['name' => 'Author', 'slug' => 'author'],
        ]);

        Permission::insert([
            ['name' => 'Add Post', 'slug' => 'add-post'],
            ['name' => 'Delete Post', 'slug' => 'delete-post']
        ]);
    }
}
