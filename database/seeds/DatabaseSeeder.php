<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user=new User();
        $user->name="scm";
        $user->email="scm@gmail.com";
        $user->password=bcrypt('12345678');
        $user->type="0";
        $user->phone="0912345678";
        $user->dob="2019-06-12";
        $user->address="YGN";
        $user->profile="IMG_8295.JPG";
        $user->save();
    }
}
