<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_one   = Role::create(['name' => 'Manager', 'guard_name' => 'sanctum']);
    	$role_two   = Role::create(['name' => 'Employee', 'guard_name' => 'sanctum']);
    	$role_three = Role::create(['name' => 'Customer', 'guard_name' => 'sanctum']);

        $user = User::create([
            'name'     => 'Manager',
    		'email'    => '181370150@gift.edu.pk',
    		'password' => bcrypt('181370150'),
            'role'     => 'Manager',
    	]); 

        $user->assignRole($role_one);
    }
}
