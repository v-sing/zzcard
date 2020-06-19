<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('configs')->delete();

        \DB::table('configs')->insert(array(

            0 =>
                array(
                    'id'         => '1',
                    'crux_group' => 'dictionary',
                    'title'      => '数据字典',
                    'name'       => 'configgroup',
                    'crux_value' => '{"dictionary":"数据字典","platform":"平台管理"}',
                    'tip'        => NULL,
                    'type'       => 'array',
                    'crux_rule'  => NULL,
                    'extend'     => NULL,
                    'content'    => NULL,
                    'created_at' => '2020-05-13 11:46:46',
                    'updated_at' => '2020-06-18 08:07:47',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id'         => '2',
                    'crux_group' => 'platform',
                    'title'      => '平台名称',
                    'name'       => 'website',
                    'crux_value' => '至尊会员支付一卡通平台',
                    'tip'        => NULL,
                    'type'       => 'string',
                    'crux_rule'  => 'required',
                    'extend'     => NULL,
                    'content'    => 'key1|value1
key2|value2',
                    'created_at' => '2020-06-18 08:11:18',
                    'updated_at' => '2020-06-18 08:11:18',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id'         => '3',
                    'crux_group' => 'platform',
                    'title'      => '欢迎页',
                    'name'       => 'welcome',
                    'crux_value' => '/welcome',
                    'tip'        => NULL,
                    'type'       => 'string',
                    'crux_rule'  => 'required',
                    'extend'     => NULL,
                    'content'    => 'key1|value1
key2|value2',
                    'created_at' => '2020-06-18 09:40:53',
                    'updated_at' => '2020-06-18 09:40:53',
                    'deleted_at' => NULL,
                ),
        ));


    }
}