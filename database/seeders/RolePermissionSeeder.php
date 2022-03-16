<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
         app()[PermissionRegistrar::class]->forgetCachedPermissions();

         //permissions
         $permissions = [
           ['name'=>"Add User"],
           ['name'=>"view user"],
           ['name'=>"edit user"],
           ['name'=>"delete user"],
           ['name'=>"inactivate user"]

         ];
         foreach ($permissions as $key => $permission) {
           # create permissions
           Permission::create($permission) ;
         }


          // create roles and assign existing permissions
        $role1 =  Role::create(['name' => 'users']);
        $role1->givePermissionTo('view user');
        $role1->givePermissionTo('delete user');
        $role1->givePermissionTo('edit user');


        $role2 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider


      if ( User::where('email','superadmin@example.com')->count() < 1 ) {
        # Create super admin
        $user = User::factory()->create([
          'name' => 'Super-Admin User',
          'phone'=>"0707585566",
          'employee_no'=>"016462694",
          'email' => 'superadmin@example.com',
          'email_verified_at'=>now(),
          'password'=> Hash::make("password")
      ]);

      // Assign role to super admin
      $user->assignRole($role2);
      }


      $users = User::all();
      foreach ($users as $key => $user) {
        # assign all users role of user
        $user->assignRole($role1) ;
      }




    }
}
