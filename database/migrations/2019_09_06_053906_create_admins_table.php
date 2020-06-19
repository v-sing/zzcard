<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name', 20);
            $table->string('email', 100)->nullable()->default(' ')->comment('邮箱');
            $table->tinyInteger('status')->nullable()->default(1)->comment('是否启用');
            $table->tinyInteger('role_id')->comment('所属角色');
            $table->string('password', 300);
            $table->string('true_name')->default(' ')->nullable()->comment('真实姓名');
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
