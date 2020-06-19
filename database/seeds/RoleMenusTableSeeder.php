<?php

use Illuminate\Database\Seeder;

class RoleMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_menus')->delete();
        
        \DB::table('role_menus')->insert(array (
            0 => 
            array (
                'role_id' => '1',
                'menu_id' => '1',
            ),
            1 => 
            array (
                'role_id' => '1',
                'menu_id' => '2',
            ),
            2 => 
            array (
                'role_id' => '1',
                'menu_id' => '3',
            ),
            3 => 
            array (
                'role_id' => '1',
                'menu_id' => '4',
            ),
            4 => 
            array (
                'role_id' => '1',
                'menu_id' => '5',
            ),
            5 => 
            array (
                'role_id' => '1',
                'menu_id' => '6',
            ),
            6 => 
            array (
                'role_id' => '1',
                'menu_id' => '7',
            ),
            7 => 
            array (
                'role_id' => '1',
                'menu_id' => '11',
            ),
            8 => 
            array (
                'role_id' => '1',
                'menu_id' => '8',
            ),
            9 => 
            array (
                'role_id' => '1',
                'menu_id' => '9',
            ),
            10 => 
            array (
                'role_id' => '1',
                'menu_id' => '12',
            ),
            11 => 
            array (
                'role_id' => '1',
                'menu_id' => '13',
            ),
            12 => 
            array (
                'role_id' => '1',
                'menu_id' => '14',
            ),
            13 => 
            array (
                'role_id' => '1',
                'menu_id' => '15',
            ),
            14 => 
            array (
                'role_id' => '1',
                'menu_id' => '16',
            ),
            15 => 
            array (
                'role_id' => '1',
                'menu_id' => '17',
            ),
            16 => 
            array (
                'role_id' => '1',
                'menu_id' => '18',
            ),
            17 => 
            array (
                'role_id' => '1',
                'menu_id' => '20',
            ),
            18 => 
            array (
                'role_id' => '1',
                'menu_id' => '19',
            ),
            19 => 
            array (
                'role_id' => '1',
                'menu_id' => '21',
            ),
            20 => 
            array (
                'role_id' => '1',
                'menu_id' => '22',
            ),
            21 => 
            array (
                'role_id' => '1',
                'menu_id' => '23',
            ),
        ));
        
        
    }
}