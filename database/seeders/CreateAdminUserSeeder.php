<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::create([
        // 	'name' => 'Jose Cruz', 
        // 	'email' => 'jcmg47@gmail.com',
        // 	'password' => bcrypt('1q2w3e4r5t'),
        //     'curp'=>'MOGC840209HZSRLR06'
        // ]);
            $user = User::where('id', '=', 1 );
    //    $role = Role::create(['name' => 'Super-Admin']);
   
       // $permissions = Permission::pluck('id','id')->all();
  
 //       $role->syncPermissions($permissions);
   
        $user->assignRole([1]);
    }
}