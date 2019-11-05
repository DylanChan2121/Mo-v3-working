<?php
# @Date:   2019-11-03T14:47:18+00:00
# @Last modified time: 2019-11-05T14:32:13+00:00




use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RolesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
    }
}
