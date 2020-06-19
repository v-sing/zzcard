<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     * @return void
     */
    public function run()
    {

        factory(\App\Model\Coupon::class, 100)->create();

    }
}