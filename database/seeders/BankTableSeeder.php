<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Bank\Bank;
class BankTableSeeder extends Seeder
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
                'bank_name'=>'NIC ASIA',
                'status'=>'active'
            ),
            array(
                'bank_name'=>'NAVIL INVESTEMENT BANK',
                'status'=>'active'
            ),
            array(
                'bank_name'=>'EVEREST BANK',
                'status'=>'active'
            ),
            array(
                'bank_name'=>'SIDDHARTHA BANK',
                'status'=>'active'
            ),
            array(
                'bank_name'=>'LAXMI BANK',
                'status'=>'active'
            ),
            array(
                'bank_name'=>'RASTRIYA BANIJAYA BANK',
                'status'=>'active'
            )
        );

        foreach($list as $data)
        {
            $bank=new Bank();
            $bank->fill($data);
            $bank->save();
        }
    }
}
