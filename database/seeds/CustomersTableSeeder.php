<?php
# @Date:   2019-11-05T14:14:42+00:00
# @Last modified time: 2019-11-05T14:44:30+00:00




use Illuminate\Database\Seeder;
Use App\Role;
Use App\Customer;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $role_user = Role::where('name','user')->first();

        foreach ($role_user->users as $user){
          $customer = new Customer();
          $customer->address = rand(1, 100) . "Main street";
          $customer->phone = '0' . $this->random_str(2,'0123456789') . '-' . $this->random_str(7,'0123456789');
          $customer->user_id = $user->id;

          $customer->save();
        }
    }

    private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
          $pieces = [];
          $max = mb_strlen($keyspace, '8bit') - 1; for ($i = 0; $i < $length; ++$i) {
          $pieces []= $keyspace[random_int(0, $max)]; }
          return implode('', $pieces);
    }
}
