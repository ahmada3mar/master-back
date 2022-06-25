<?php
  
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@oca.com',
                'is_admin'=>'1',
                'mobile'=>'0777777777',
               'password'=> bcrypt('123456'),
               'api_token' => Str::random(60),

            ],
            [
               'name'=>'User',
               'email'=>'user@oca.com',
                'is_admin'=>'0',
                'mobile'=>'0777777777',
               'password'=> bcrypt('123456'),
               'api_token' => Str::random(60),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}