<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Modules\Model{
/**
 * App\Modules\Model\Account
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Account query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Account whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Account whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Account whereUPDATEDAT($value)
 */
	class Account extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Admin
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL 邮箱
 * @property int $STATUS 是否启用
 * @property int $ROLE_ID 所属角色
 * @property string $PASSWORD
 * @property string $TRUE_NAME 真实姓名
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property string|null $DELETED_AT
 * @property string|null $REMEMBER_TOKEN
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereDELETEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereROLEID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereSTATUS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereTRUENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereUPDATEDAT($value)
 * @mixin \Eloquent
 * @property-read \App\Modules\Model\Role|null $role
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Model\Admin onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Model\Admin withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Model\Admin withoutTrashed()
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 */
	class Admin extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\AmountVariation
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AmountVariation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AmountVariation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AmountVariation query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AmountVariation whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AmountVariation whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AmountVariation whereUPDATEDAT($value)
 */
	class AmountVariation extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\BackstageRecharge
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\BackstageRecharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\BackstageRecharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\BackstageRecharge query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\BackstageRecharge whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\BackstageRecharge whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\BackstageRecharge whereUPDATEDAT($value)
 */
	class BackstageRecharge extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Card
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Card newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Card query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Card whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Card whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Card whereUPDATEDAT($value)
 */
	class Card extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardActiveLog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardActiveLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardActiveLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardActiveLog query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardActiveLog whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardActiveLog whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardActiveLog whereUPDATEDAT($value)
 */
	class CardActiveLog extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardBind
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardBind newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardBind newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardBind query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardBind whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardBind whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardBind whereUPDATEDAT($value)
 */
	class CardBind extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardDetail
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardDetail query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardDetail whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardDetail whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardDetail whereUPDATEDAT($value)
 */
	class CardDetail extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardMend
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardMend newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardMend newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardMend query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardMend whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardMend whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardMend whereUPDATEDAT($value)
 */
	class CardMend extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardOpen
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardOpen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardOpen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardOpen query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardOpen whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardOpen whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardOpen whereUPDATEDAT($value)
 */
	class CardOpen extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardPay
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPay query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPay whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPay whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPay whereUPDATEDAT($value)
 */
	class CardPay extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardPurchase
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPurchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPurchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPurchase query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPurchase whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPurchase whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardPurchase whereUPDATEDAT($value)
 */
	class CardPurchase extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardRecharge
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRecharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRecharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRecharge query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRecharge whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRecharge whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRecharge whereUPDATEDAT($value)
 */
	class CardRecharge extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CardRefund
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRefund newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRefund newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRefund query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRefund whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRefund whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CardRefund whereUPDATEDAT($value)
 */
	class CardRefund extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CoinAccount
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinAccount query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinAccount whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinAccount whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinAccount whereUPDATEDAT($value)
 */
	class CoinAccount extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CoinConsume
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinConsume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinConsume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinConsume query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinConsume whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinConsume whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinConsume whereUPDATEDAT($value)
 */
	class CoinConsume extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CoinPay
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinPay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinPay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinPay query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinPay whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinPay whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinPay whereUPDATEDAT($value)
 */
	class CoinPay extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CoinSettlement
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinSettlement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinSettlement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinSettlement query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinSettlement whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinSettlement whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CoinSettlement whereUPDATEDAT($value)
 */
	class CoinSettlement extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Config
 *
 * @property int $ID
 * @property string|null $CRUX_GROUP 分组
 * @property string|null $TITLE 变量标题
 * @property string|null $NAME 变量名
 * @property string|null $CRUX_VALUE 变量名
 * @property string|null $TIP 描述
 * @property string|null $TYPE 类型:string,text,bool,array,checkbox,radio,sgin
 * @property string|null $CRUX_RULE 验证规则正则
 * @property string|null $EXTEND 扩展属性
 * @property string|null $CONTENT 数据列表
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property string|null $DELETED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCONTENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCRUXGROUP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCRUXRULE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCRUXVALUE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereDELETEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereEXTEND($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTITLE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTYPE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereUPDATEDAT($value)
 */
	class Config extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Custom
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Custom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Custom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Custom query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Custom whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Custom whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Custom whereUPDATEDAT($value)
 */
	class Custom extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\CustomsInfo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CustomsInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CustomsInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CustomsInfo query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CustomsInfo whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CustomsInfo whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\CustomsInfo whereUPDATEDAT($value)
 */
	class CustomsInfo extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\File
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\File whereUPDATEDAT($value)
 */
	class File extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Log
 *
 * @property int $ID
 * @property int $ADMIN_ID 操作人
 * @property string $URL 操作url
 * @property string $NAME 操作
 * @property string $METHOD 请求方式
 * @property string $REQUEST 请求信息
 * @property string $IP IP地址
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereADMINID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereMETHOD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereREQUEST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereUPDATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereURL($value)
 * @mixin \Eloquent
 * @property-read \App\Modules\Model\Admin $admin
 * @property-read mixed $admin_name
 * @property-write mixed $request
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log search($where)
 */
	class Log extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Menu
 *
 * @property int $ID
 * @property string $MENU_NAME 菜单名
 * @property int|null $CRUX_SORT 排序
 * @property string|null $URL 链接地址
 * @property string|null $ICON 图标类名
 * @property string|null $REMARK 说明
 * @property int|null $PID 上级菜单
 * @property int|null $IS_SHOW 是否渲染链接，1渲染0不渲染
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereCRUXSORT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereICON($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereISSHOW($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereMENUNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu wherePID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereUPDATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Menu whereURL($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Model\Menu[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Model\Menu[] $parent
 * @property-read int|null $parent_count
 */
	class Menu extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Order
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Order query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Order whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Order whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Order whereUPDATEDAT($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\OutDaliyJycoin
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\OutDaliyJycoin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\OutDaliyJycoin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\OutDaliyJycoin query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\OutDaliyJycoin whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\OutDaliyJycoin whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\OutDaliyJycoin whereUPDATEDAT($value)
 */
	class OutDaliyJycoin extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Panter
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter whereUPDATEDAT($value)
 */
	class Panter extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\PointsAccountDetail
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsAccountDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsAccountDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsAccountDetail query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsAccountDetail whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsAccountDetail whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsAccountDetail whereUPDATEDAT($value)
 */
	class PointsAccountDetail extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\PointsRecharge
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRecharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRecharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRecharge query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRecharge whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRecharge whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRecharge whereUPDATEDAT($value)
 */
	class PointsRecharge extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\PointsRefund
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRefund newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRefund newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRefund query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRefund whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRefund whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsRefund whereUPDATEDAT($value)
 */
	class PointsRefund extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\PointsSettlement
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsSettlement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsSettlement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsSettlement query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsSettlement whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsSettlement whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\PointsSettlement whereUPDATEDAT($value)
 */
	class PointsSettlement extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Role
 *
 * @property int $ID
 * @property string $ROLE_NAME
 * @property string $REMARK
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereROLENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\RoleMenu
 *
 * @property int $ROLE_ID 角色id
 * @property int $MENU_ID 菜单id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu whereMENUID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\RoleMenu whereROLEID($value)
 * @mixin \Eloquent
 */
	class RoleMenu extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\TbPool
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPool newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPool newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPool query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPool whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPool whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPool whereUPDATEDAT($value)
 */
	class TbPool extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\TbPoolDetail
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPoolDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPoolDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPoolDetail query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPoolDetail whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPoolDetail whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TbPoolDetail whereUPDATEDAT($value)
 */
	class TbPoolDetail extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\TradePanterDayBook
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TradePanterDayBook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TradePanterDayBook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TradePanterDayBook query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TradePanterDayBook whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TradePanterDayBook whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\TradePanterDayBook whereUPDATEDAT($value)
 */
	class TradePanterDayBook extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\User
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL
 * @property string|null $EMAIL_VERIFIED_AT
 * @property string $PASSWORD
 * @property string|null $REMEMBER_TOKEN
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereEMAILVERIFIEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\Whitelist
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Whitelist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Whitelist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Whitelist query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Whitelist whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Whitelist whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Whitelist whereUPDATEDAT($value)
 */
	class Whitelist extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL
 * @property string|null $EMAIL_VERIFIED_AT
 * @property string $PASSWORD
 * @property string|null $REMEMBER_TOKEN
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEMAILVERIFIEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

