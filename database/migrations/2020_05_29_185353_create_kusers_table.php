<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kusers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->index()->nullable()->default(' ')->comment('用户id');
            $table->char('phone',11)->index()->nullable()->default(' ')->comment('用户手机号');
            $table->string('name')->nullable()->default(' ')->comment('用户姓名');
            $table->unsignedTinyInteger('app')->nullable()->default(0)->comment('用户来源:1tp系统2通宝+');
            $table->unsignedTinyInteger('sex')->nullable()->default(0)->comment('性别0未知1男2女');
            $table->char('identity_card','18')->nullable()->default(' ')->comment('身份证');
            $table->char('birthday',10)->nullable()->default(' ')->comment('生日');
            $table->unsignedTinyInteger('age')->index()->nullable()->default(0)->comment('年龄');
            $table->unsignedInteger('province_id')->nullable()->default(0)->comment('省');
            $table->unsignedInteger('city_id')->nullable()->default(0)->comment('市');
            $table->unsignedInteger('area_id')->nullable()->default(0)->comment('区');
            $table->string('tags')->nullable()->default(' ')->comment('标签');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kusers');
    }
}
