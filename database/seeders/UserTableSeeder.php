<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=array(
            array(
                'name'=>'Super Admin',
                'email'=>'sumitkarn989@gmail.com',
                'password'=>bcrypt('sumitkarn'),
                'status'=>'active',
                'role'=>'admin'
            ),
            array(
                'name'=>'Member',
                'email'=>'member@gmail.com',
                'password'=>bcrypt('member'),
                'status'=>'active',
                'role'=>'member'
            ),
            array(
                'name'=>'Viewer',
                'email'=>'viewer@gmail.com',
                'password'=>bcrypt('viewer'),
                'status'=>'active',
                'role'=>'viewer'
            )
        );

        foreach($list as $data)
        {
            if(User::where('email',$data['email'])->count() <=0)
            {
                $user=new User();
                $user->fill($data);
                $user->save();
            }
        }
    }
}
