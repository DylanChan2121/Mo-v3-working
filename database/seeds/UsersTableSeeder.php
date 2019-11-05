<?php
# @Date:   2019-11-03T14:47:18+00:00
# @Last modified time: 2019-11-05T15:26:07+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();
      $role_user = Role::where('name', 'user')->first();

      $admin = new User();
      $admin->name = 'Dylan Chan';
      $admin->email = 'admin@bookstore.ie';
      $admin->password=bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $user = new User();
      $user->name = 'Issac';
      $user->email = 'user@bookstore.ie';
      $user->password=bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Matther';
      $user->email = 'Matt@bookstore.ie';
      $user->password=bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Taylor';
      $user->email = 'taylor@bookstore.ie';
      $user->password=bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);


       $user = new User();
       $user->name = 'Dante farrel';
       $user->email = 'farrel@bookstore.ie';
       $user->password=bcrypt('secret');
       $user->save();
       $user->roles()->attach($role_user);

       $user = new User();
       $user->name = 'Nicole';
       $user->email = 'nicole@bookstore.ie';
       $user->password=bcrypt('secret');
       $user->save();
       $user->roles()->attach($role_user);

       $user = new User();
       $user->name = 'michael';
       $user->email = 'michael@bookstore.ie';
       $user->password=bcrypt('secret');
       $user->save();
       $user->roles()->attach($role_user);

       $user = new User();
       $user->name = 'kassandra';
       $user->email = 'kassandra@bookstore.ie';
       $user->password=bcrypt('secret');
       $user->save();
       $user->roles()->attach($role_user);
}
}
