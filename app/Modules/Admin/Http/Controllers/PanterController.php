<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-19
 * Time: 09:28
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Repositories\PanterRepositories;
use Illuminate\Http\Request;

/**
 * 商户管理
 * Class PanterController
 * @package App\Modules\Admin\Http\Controllers
 */
class PanterController extends Controller
{
    protected $panterRepositories = null;

    /**
     * 初始化容器
     * PanterController constructor.
     * @param PanterRepositories $panterRepositories
     */
    public function __construct(PanterRepositories $panterRepositories)
    {
        $this->panterRepositories = $panterRepositories;
    }

    public function list(Request $request)
    {
        $this->panterRepositories->list($request);
    }

    public function add(Request $request){
        $this->panterRepositories->add($request);

    }
}