@extends('web.layout.layout')
@section('content')
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form">
                <input type="hidden" name="id" value="{{$kuser->id}}">
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        用户ID：
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="user_id" disabled name="user_id" required="" lay-verify="required"
                               autocomplete="off" class="layui-input" value="{{$kuser->user_id}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        用户来源：
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="app" disabled name="source" required="" lay-verify="required"
                               autocomplete="off" class="layui-input" value="{{$kuser->app_name}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        手机号：
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" disabled id="phone" name="phone" required=""
                               autocomplete="off" class="layui-input" value="{{$kuser->phone}}">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        用户姓名：
                    </label>
                    @if(empty($kuser->name))
                        <div class="layui-input-inline">
                            <input type="text" id="name"  name="name"
                                   autocomplete="off" class="layui-input" value="{{$kuser->name}}">
                        </div>
                        <div class="layui-form-mid layui-word-aux">
                            <span class="x-red">*</span>
                        </div>
                    @else
                        <div class="layui-input-inline">
                            <input type="text" id="name"  name="name"
                                   autocomplete="off" class="layui-input" value="{{$kuser->name}}" disabled>
                        </div>
                    @endif
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">性别：</label>
                    @if($kuser->sex > 0)
                        <div class="layui-input-block">
                            @if($kuser->sex ==1)
                                <input type="radio" name="sex" value="1" title="男" disabled checked>
                                <input type="radio" name="sex" value="2" title="女" disabled>
                                @else
                                <input type="radio" name="sex" value="1" title="男" disabled >
                                <input type="radio" name="sex" value="2" title="女" disabled checked>
                                @endif
                        </div>
                        @else
                        <div class="layui-input-block">
                            <input type="radio" name="sex" value="0" title="未知" checked>
                            <input type="radio" name="sex" value="1" title="男"  >
                            <input type="radio" name="sex" value="2" title="女" >
                        </div>
                        @endif

                </div>

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        年龄：
                    </label>
                    @if(empty($kuser->age))
                        <div class="layui-input-inline">
                            <input type="text" id="age"  name="age"
                                   autocomplete="off" class="layui-input" value="{{$kuser->age}}">
                        </div>
                    @else
                        <div class="layui-input-inline">
                            <input type="text" id="age"  name="age"
                                   autocomplete="off" class="layui-input" value="{{$kuser->age}}" disabled>
                        </div>
                    @endif
                </div>
                @if(empty($kuser->birthday))
                    <div class="layui-form-item">
                        <label class="layui-form-label">
                            生日：
                        </label>
                        <div class="layui-input-inline">
                            <input type="text" name="birthday" value="" id="birthday" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    @else
                    <div class="layui-form-item">
                        <label  class="layui-form-label">
                            生日：
                        </label>
                        <div class="layui-input-inline">
                            <input type="text" id="birthday" name="birthday"
                                   autocomplete="off" class="layui-input" value="{{$kuser->birthday}}" disabled>
                        </div>
                    </div>
                    @endif

                <div class="layui-form-item">
                    <label  class="layui-form-label">
                        地域：
                    </label>
                    <div class="layui-input-inline">
                        @if(empty($kuser->province))
                            <select name="province" lay-filter="province" class="province">
                                <option value="0">请选择省</option>
                            </select>
                            @else
                            <select name="province" lay-filter="province" class="province" disabled>
                                <option value="{{$kuser->province_id}}">{{$kuser->province}}</option>
                            </select>
                        @endif
                    </div>
                    <div class="layui-input-inline">
                        @if(empty($kuser->city))
                            <select name="city" lay-filter="city" disabled>
                                <option value="0">请选择市</option>
                            </select>
                            @else
                            <select name="city" lay-filter="city" disabled>
                                <option value="{{$kuser->city_id}}">{{$kuser->city}}</option>
                            </select>
                            @endif

                    </div>
                    <div class="layui-input-inline">
                        @if(empty($kuser->area))
                            <select name="area" lay-filter="area" disabled>
                                <option value="0">请选择县/区</option>
                            </select>
                            @else
                            <select name="area" lay-filter="area" disabled>
                                <option value="{{$kuser->area_id}}">{{$kuser->area}}</option>
                            </select>
                            @endif

                    </div>
                </div>

                <div class="layui-form-item">
                    <label  class="layui-form-label">
                        标签：
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  id="tags" name="tags"
                               autocomplete="off" class="layui-input" value="{{$kuser->tags}}">
                    </div>
                    <div class="layui-form-mid layui-input-inline">多个 以 中文逗号 隔开</div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                    </label>
                    <button class="layui-btn" lay-filter="edit" lay-submit="">
                        编辑
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        layui.config({
            base : "/lib/address/"
        }).extend({
            "address" : "address"
        })

        layui.use(['form', 'layer','laydate','address'],
            function () {
                $ = layui.jquery;
                var form = layui.form,
                    layer = layui.layer;
                    laydate = layui.laydate;
                    address = layui.address(),
                //自定义验证规则

                //执行一个laydate实例
                laydate.render({
                    elem: '#birthday' //指定元素
                });
                //监听提交
                form.on('submit(edit)',
                    function (data) {
                        $.post('/admin/kuser/edit',data.field,function (res) {
                            if(res.status=='success'){
                                layer.alert(res.msg,{icon:6},function () {
                                    //关闭当前frame
                                    xadmin.close();
                                    // 可以对父窗口进行刷新
                                    xadmin.father_reload();
                                })
                            }else{
                                layer.alert(res.msg,{icon:5});
                            }
                        });
                        return false;
                    });
            });</script>
@endsection
