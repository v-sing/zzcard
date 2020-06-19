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
                            <div class="layui-inline layui-show-xs-block">
                                <input type="text" name="origin_name" placeholder="搜索文件名" autocomplete="off"
                                       class="layui-input" value="">
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <label class="layui-form-label" style="padding: 5px 15px">日期范围</label>
                                <div class="layui-input-inline layui-show-xs-block">
                                    <input type="text" name="created_at" class="layui-input" id="test6"
                                           placeholder=" - ">
                                </div>
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <select name="identify_progress" lay-verify="">
                                    <option value="">识别进度</option>
                                    @foreach ($identify_progress as $k=>$v)
                                        <option value="{{$k}}">{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <select name="type" lay-verify="">
                                    <option value="">发票类型</option>
                                    @foreach ($type as $k=>$v)
                                        <option value="{{$k}}">{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="layui-inline layui-show-xs-block">
                                <button class="layui-btn" lay-submit lay-filter="sreach"><i
                                            class="layui-icon">&#xe615;</i>
                                </button>
                                <button class="layui-btn"><i class="layui-icon">&#xe9aa;</i></button>
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
    <script type="text/html" id="toolbarDemo">
        <div class="layui-btn-container">
            @adminAuth('/admin/file/delete_img')
            <span class="layui-btn layui-btn-sm layui-btn-disabled" id="del">批量删除</span>;
            @endadminAuth
            <span class="layui-btn-sm">文件大小合计：<span id="size" style="color: red">0</span></span>
        </div>
    </script>
    <script>
        layui.use(['form', 'layer', 'upload', 'table', 'laydate'],
            function () {
                $ = layui.jquery;
                var form = layui.form;
                var laydate = layui.laydate;
                var table = layui.table;
                var where = {};
                var json = {
                    "title": "", //相册标题
                    "id": 1, //相册id
                    "start": 0, //初始显示的图片序号，默认0
                    "data": []
                };
                var fileList = JSON.parse(localStorage.getItem("fileList"));
                if (!fileList) {
                    fileList = {
                        'id': false,
                        'origin_name': false,
                        'path': true,
                        'size_show': false,
                        'ext': true,
                        'identify_progress_name': false,
                        'type_name': false,
                        'created_at': false,
                    };
                }
                form.render();
                laydate.render({
                    elem: '#test6'
                    , range: true
                });
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
                table.on('toolbar()', function (obj) {
                    console.log(obj.event);
                    if (obj.event === 'LAYTABLE_COLS') {
                        $('.layui-table-tool-panel').click(function () {
                            $('.layui-table-tool-panel li').each(function (i, v) {
                                fileList[$(v).find('input').attr('name')] = $(v).find('.layui-form-checked').length === 0;
                            });
                            localStorage.setItem('fileList', JSON.stringify(fileList));
                        });
                    }

                });
                table.render({
                    elem: '#table'
                    , id: 'exportTable'
                    , limit: 15
                    , limits: [15, 30, 60, 90]
                    , loading: true
                    , toolbar: '#toolbarDemo' //开启头部工具栏，并为其绑定左侧模板
                    , defaultToolbar: ['filter']
                    , where: where
                    , url: '/admin/file/list' //数据接口
                    , page: true //开启分页
                    , cols: [[ //表头
                        {field: 'id', title: 'ID', hide: fileList.id, type: 'checkbox'}
                        , {field: 'id', title: 'ID', hide: fileList.id}
                        , {field: 'origin_name', title: '原文件名', hide: fileList.origin_name}
                        , {field: 'path', title: '附件地址', hide: fileList.path}
                        , {field: 'size_show', title: '文件大小', hide: fileList.size_show}
                        , {field: 'ext', title: '文件后缀', hide: fileList.ext}
                        , {field: 'identify_progress_name', title: '识别进度', hide: fileList.identify_progress_name}
                        , {field: 'type_name', title: '发票类型', hide: fileList.type_name}
                        , {field: 'created_at', title: '创建时间 ', hide: fileList.created_at}
                        , {
                            field: 'id', title: '操作', templet: function (d) {
                                let html = '<span data-id="' + d.LAY_TABLE_INDEX + '" class="layui-btn layui-btn-sm layui-btn-normal show_img">查看</span>';
                                html += '<a href="/' + d.path + '" target="_blank" class="layui-btn layui-btn-sm" download="' + d.origin_name + '">下载</a>';
                                if (d.identify_progress !== 3 && d.identify_progress !== 4) {
                                @adminAuth('/admin/file/re_identify')
                                    html += '<span data-id="' + d.id + '" class="layui-btn layui-btn-sm layui-btn-warm re_identify">识别</span>';
                                @endadminAuth
                                }
                                if (d.identify_progress !== 3) {
                                @adminAuth('/admin/file/delete_img')
                                    html += '<span data-id="' + d.id + '" class="layui-btn layui-btn-sm layui-btn-danger delete_img">删除</span>';
                                @endadminAuth
                                }
                                return html
                            }, width: 250
                        },
                    ]]
                    , done: function (res, curr, count) {
                        $('#size').html(res.sum_size);
                        json.data = [];
                        for (let i in res.data) {
                            json.data.push({
                                "alt": res.data[i].origin_name,
                                "pid": res.data[i].id, //图片id
                                "src": '/' + res.data[i].img_path, //原图地址
                                "thumb": '/' + res.data[i].img_path //缩略图地址
                            });
                        }
                        console.log(json);
                        $('.show_img').click(function () {
                                json.start = $(this).attr('data-id');
                                console.log(json);
                                layer.photos({
                                    photos: json //格式见API文档手册页
                                    , anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机
                                });

                            }
                        )
                        //重新识别
                        $('.re_identify').click(function () {
                            let id = $(this).attr('data-id');
                            layer.load();
                            $.post('/admin/file/re_identify', {id: id}, function (res) {
                                if (res.code === 0) {
                                    layer.msg('识别成功', {icon: 1});
                                    table.reload('exportTable', {
                                        where: where
                                        , page: {
                                            curr: 1 //重新从第 1 页开始
                                        }
                                    });
                                    layer.closeAll('loading');
                                } else {
                                    layer.msg('识别失败', {icon: 2});
                                    layer.closeAll('loading');
                                }
                            })
                        });
                        //删除文件
                        $('.delete_img').click(function () {
                            let id = $(this).attr('data-id');
                            layer.confirm('你确定要删除此文件吗？', {
                                btn: ['确定', '取消'] //按钮
                            }, function () {
                                $.post('/admin/file/delete_img', {id: id}, function (res) {
                                    if (res.code === 0) {
                                        layer.msg('删除成功', {icon: 1});
                                        table.reload('exportTable', {
                                            where: where
                                            , page: {
                                                curr: 1 //重新从第 1 页开始
                                            }
                                        });
                                    } else {
                                        layer.msg('删除失败', {icon: 2});
                                    }
                                })
                            })
                        });
                    }
                });
                table.on('checkbox(test)', function (obj) {
                    let checkStatus = table.checkStatus('exportTable'); //idTest 即为基础参数 id 对应的值
                    let del = true;
                    let id = [];
                    checkStatus.data.forEach(function (v) {
                        if (v.identify_progress === 3) {
                            del = false;
                        }
                        id.push(v.id);
                    })
                    if (checkStatus.data.length === 0) {
                        del = false;
                    }
                    let e_del = $('#del');
                    e_del.unbind();
                    if (del) {
                        e_del.addClass('layui-btn-danger').removeClass('layui-btn-disabled');
                        e_del.click(function () {
                            layer.confirm('你确定要批量刪除文件吗？', {
                                btn: ['确定', '取消'] //按钮
                            }, function () {
                                $.post('/admin/file/delete_img', {id: id}, function (res) {
                                    if (res.code === 0) {
                                        layer.msg('删除成功', {icon: 1});
                                        table.reload('exportTable', {
                                            where: where
                                            , page: {
                                                curr: 1 //重新从第 1 页开始
                                            }
                                        });
                                    } else {
                                        layer.msg('删除失败', {icon: 2});
                                    }
                                })
                            })
                        });
                    } else {
                        e_del.addClass('layui-btn-disabled').removeClass('layui-btn-danger');
                    }
                });

            });
    </script>
@endsection
