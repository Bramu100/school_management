<?php

namespace Database\Seeders;

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
        //
    Permission::create(['name' => 'View Course']);
    Permission::create(['name' => 'Create Course']);
	Permission::create(['name' => 'Edit Course']);
	Permission::create(['name' => 'Delete Course']);
 	
 	Permission::create(['name' => 'View Guardian']);
    Permission::create(['name' => 'Create Guardian']);
	Permission::create(['name' => 'Edit Guardian']);
	Permission::create(['name' => 'Delete Guardian']);

	Permission::create(['name' => 'View Staff']);
    Permission::create(['name' => 'Create Staff']);
	Permission::create(['name' => 'Edit Staff']);
	Permission::create(['name' => 'Delete Staff']);

	Permission::create(['name' => 'View Student']);
    Permission::create(['name' => 'Create Student']);
	Permission::create(['name' => 'Edit Student']);
	Permission::create(['name' => 'Delete Student']);

	Permission::create(['name' => 'View User']);
    Permission::create(['name' => 'Create User']);
	Permission::create(['name' => 'Edit User']);
	Permission::create(['name' => 'Delete User']);

	Permission::create(['name' => 'View Role']);
    Permission::create(['name' => 'Create Role']);
	Permission::create(['name' => 'Edit Role']);
	Permission::create(['name' => 'Delete Role']);
    }
}
