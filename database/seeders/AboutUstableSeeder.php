<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\AboutUs\AboutUs;
class AboutUstableSeeder extends Seeder
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
                'title'=>'About Us',
                'slug'=>'about-us',
                'description'=>'hello',
            )
        );

        foreach($list as $data)
        {
            $aboutus=new AboutUs();
            $aboutus->fill($data);
            $aboutus->save();
        }
    }
}
