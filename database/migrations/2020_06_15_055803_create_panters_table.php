<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panters', function (Blueprint $table) {
            $table->id('panterid');
            $table->string('namechinese', 60)->unique()->default(' ')->nullable()->comment('商户名称');
            $table->string('close_store', 100)->default(' ')->nullable()->comment('结算门店ID');
            $table->string('operatescope', 50)->default(' ')->nullable()->comment('经营范围');
            $table->string('organizationcode', 50)->default(' ')->nullable()->comment('组织机构代码');
            $table->string('business', 38)->default(' ')->nullable()->comment('营业执照');
            $table->string('timevalue', 38)->default(' ')->nullable()->comment('税务登记证');
            $table->string('taxation', 50)->default(' ')->nullable()->comment('税务登记证');
            $table->string('nameenglish', 60)->default(' ')->nullable()->comment('商户简称');
            $table->integer('provinceid', 11)->default(0)->nullable()->comment('省');
            $table->integer('cityid', 11)->default(0)->nullable()->comment('市');
            $table->integer('areaid', 11)->default(0)->nullable()->comment('区/县');
            $table->string('panteraddress', 100)->default(' ')->nullable()->comment('商户地址');
            $table->string('goingteleno', 20)->default(' ')->nullable()->comment('营业电话');
            $table->string('parent', 8)->default(' ')->nullable()->comment('所属机构');
            $table->string('pantergroup', 8)->default(' ')->nullable()->comment('所属商圈');
            $table->string('hysx', 100)->default(' ')->nullable()->comment('行业属性');
            $table->string('orzimg', 200)->default(' ')->nullable()->comment('营业执照');
            $table->string('taximg', 200)->default(' ')->nullable()->comment('组织机构代码证');
            $table->string('revorkflg', 2)->default(' ')->nullable()->comment('撤销状态 Y 启用 N 禁用');
            $table->string('accounttype', 2)->default(' ')->nullable()->comment('账户类型B Z');
            $table->string('legalperson', 10)->default(' ')->nullable()->comment('法人代表');
            $table->string('conperbtype', 10)->default(' ')->nullable()->comment('证件类型');
            $table->string('conperbpno', 50)->default(' ')->nullable()->comment('法人代表证件号');
            $table->string('idface', 200)->default(' ')->nullable()->comment('法人代表证件正面');
            $table->string('idcon', 200)->default(' ')->nullable()->comment('法人代表证件反面');
            $table->string('period', 200)->default(' ')->nullable()->comment('证件有效期');
            $table->string('conpermobno', 60)->default(' ')->nullable()->comment('法人代表手机');
            $table->string('conpername', 60)->default(' ')->nullable()->comment('联系人');
            $table->string('conperteleno', 60)->default(' ')->nullable()->comment('联系电话');
            $table->string('crux_account', 60)->default(' ')->nullable()->comment('每日消费限制');
            $table->string('sumnumber', 60)->default(' ')->nullable()->comment('每日消费次数');
            $table->string('oneaccount', 60)->default(' ')->nullable()->comment('每笔刷卡限额');
            $table->string('tongbaoitem', 60)->default(' ')->nullable()->comment('参与通宝项目');
            $table->string('tongbao_rate', 60)->default(' ')->nullable()->comment('通宝比例');
            $table->string('syncsy', 60)->default(' ')->nullable()->comment('收银一体化');
            $table->string('syncfz', 60)->default(' ')->nullable()->comment('房掌柜');
            $table->integer('servicerate', 9, 2)->default(0)->nullable()->comment('平台服务费');
            $table->integer('rakerate', 9, 2)->default(0)->nullable()->comment('结算率');
            $table->integer('card_rakerate', 9, 2)->default(0)->nullable()->comment('至尊卡结算费率');
            $table->integer('tongbao_rakerate', 9, 2)->default(0)->nullable()->comment('通宝结算费率');
            $table->integer('tonbaojia_rakerate', 9, 2)->default(0)->nullable()->comment('通宝+结算费率');
            $table->integer('zzk_rakerate', 9, 2)->default(0)->nullable()->comment('自有资金结算费率');
            $table->integer('settlementperiod', 10)->default(0)->nullable()->comment('结算周期');
            $table->integer('settletype', 1)->default(0)->nullable()->comment('对公账户0对公1个人');
            $table->string('settleaccountname', 50)->default(' ')->nullable()->comment('结算银行户名');
            $table->string('settlebankname', 50)->default(' ')->nullable()->comment('结算银行支行名称');
            $table->string('settlebankid', 50)->default(' ')->nullable()->comment('结算银行账户');
            $table->integer('b_flag', 1)->default(0)->nullable()->comment('日结算时间0 12点结算 1 4点结算');
            $table->integer('status', 1)->default(0)->nullable()->comment('状态0未审核1审核通过2审核拒绝');
            $table->timestamps();
        });
        $length = config('table.panters.panterid');
        columnChangeDataType('panters', 'panterid', "varchar({$length})", $length);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panters');
    }
}
