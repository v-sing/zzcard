@extends('web.layout.layout')
@section('css')
    <style>
        .td-manage a {
            margin: 0 5px;
        }
    </style>
@endsection
@section('content')
    <div class="x-nav">
        {!!breadCrumb()!!}
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
           onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
    </div>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-body ">
                        <form class="layui-form layui-col-space5" lay-filter="form1">
                            <div style="width: 120px" class="layui-inline layui-show-xs-block" id="search_type">
                                <select name="search_type" lay-verify="" lay-filter="search_type">
                                    <option value="1" >用户手机号</option>
                                    <option value="2">用户ID</option>
                                </select>
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <input type="text" name="search_value" placeholder="请输入用户手机号/用户ID" class="layui-input">
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <button class="layui-btn" lay-submit lay-filter="sreach"><i
                                        class="layui-icon">&#xe615;</i>
                                </button>
                                <button class="layui-btn"><i class="layui-icon">&#xe9aa;</i></button>
                                <a target="_blank" href="/admin/kuser/list?is_export=1" class="layui-btn layui-btn-warm" title="导出"><i
                                        class="iconfont" >&#xe62b;</i></a>
                            </div>
                        </form>
                    </div>
                    <div class="layui-card-body layui-table-body layui-table-main">
                        <table id="table" lay-filter="test"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        layui.use(['form', 'layer', 'table', 'laydate'],
            function () {
                $ = layui.jquery;
                var form = layui.form;
                var table = layui.table;
                var where = {};
                form.on('submit(sreach)', function (data) {
                    where = data.field;
                    console.log(where);
                    table.reload('exportTable', {
                        where: where
                        , page: {
                            curr: 1 //重新从第 1 页开始
                        }
                    });
                    return false;
                });
                form.render();
                table.render({
                    elem: '#table'
                    , id: 'exportTable'
                    , limit: 15
                    , limits: [15, 30, 60, 90]
                    , loading: true
                    , toolbar: '#toolbarDemo' //开启头部工具栏，并为其绑定左侧模板
                    , where: where
                    , url: '/admin/kuser/list' //数据接口
                    , page: true //开启分页
                    , cols: [[ //表头
                        {field: 'user_id', title: '用户ID', width: 160}
                        , {field: 'phone', title: '用户手机号', width: 120}
                        , {field: 'name', title: '姓名'}
                        , {field: 'app_name', title: '来源应用'}
                        , {field: 'tags', title: '标签'}
                        , {field: 'sex_name', title: '性别'}
                        , {field: 'age', title: '年龄'}
                        , {field: 'birthday', title: '生日'}
                        , {field: 'address', title: '地区'}
                        , {field: 'created_at', title: '注册时间'}
                        , {
                            field: '', title: '操作', templet: function (d) {
                                let html = "";
                            @adminAuth('/admin/kuser/edit')
                                html += "<a title='编辑' onclick=\"xadmin.open('编辑','/admin/kuser/edit?id="+d.id+"',800,500)\" href=\"javascript:;\"><i class=\"icon iconfont\" style=\"font-size: 20px;color: #7197ff;\">&#xe63c;</i></a>";
                            @endadminAuth
                                return html;
                            }, width: 80
                        },
                    ]]
                });
            });

    </script>
@endsection
