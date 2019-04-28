<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //permission seeder
        Permission::create(['name' => 'add post']);
        Permission::create(['name' => 'edit post']);

        //role seeder
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user'])->givePermissionTo(['add post', 'edit post']);
    }
}
