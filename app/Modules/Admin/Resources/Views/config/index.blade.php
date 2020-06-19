@extends('web.layout.layout')
@section('content')
    <div class="x-nav">
        {!!breadCrumb()!!}
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
           onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
    </div>
    <div class="layui-fluid layui-card">
        <div class="layui-row">
            <div class="layui-tab">
                <ul class="layui-tab-title">
                    @foreach($tab as $key=> $item)
                        <li class="  @if($key=='dictionary') layui-this @endif">{{$item}}</li>
                    @endforeach
                    <li>➕</li>
                </ul>
                <div class="layui-tab-content">
                    @foreach($content as $key=> $item)
                        <div class="layui-tab-item @if($key=='dictionary') layui-show  @endif ">
                            <form class="layui-form {{$key}}" action="">
                                <table class="layui-table" lay-even lay-skin="nob">
                                    <thead>
                                    <tr>
                                        <th width="15%">变量标题</th>
                                        <th width="70%">变量值</th>
                                        <th width="15%">变量名</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    @foreach($item as $key1=> $item2)
                                        <input type="hidden" name="{{$item2->name}}[_id]" value="{{$item2->id}}">
                                        <input type="hidden" name="{{$item2->name}}[_type]" value="{{$item2->type}}">
                                        <tr>
                                            <td>{{$item2->title}}</td>
                                            @switch($item2->type)
                                                @case('array')
                                                <td>
                                                    <dl class="fieldlist"
                                                        data-name="{{$item2->name}}[{{$item2->name}}]">
                                                        <dd>
                                                            <ins>键名</ins>
                                                            <ins>键值</ins>
                                                        </dd>
                                                        <dd>
                                                <span
                                                        class="layui-btn layui-bg-black iconfont btn-append">&#xe617;</span>
                                                        </dd>
                                                        <textarea name="{{$item2->name}}[{{$item2->name}}]"
                                                                  lay-verify="{{$item2->crux_rule}}"
                                                                  class="form-control  layui-hide" cols="30"
                                                                  rows="5">{{$item2->crux_value}}</textarea>
                                                    </dl>
                                                </td>
                                                @break
                                                @case('string')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="@if(!$item2->tip) layui-input-block @else layui-input-line @endif">
                                                            <input type="text" name="{{$item2->name}}[{{$item2->name}}]"
                                                                   placeholder=""
                                                                   autocomplete="off" value="{{$item2->crux_value}}"
                                                                   lay-verify="{{$item2->crux_rule}}"
                                                                   class="layui-input">
                                                        </div>
                                                        @if($item2->tip)
                                                            <div class="layui-form-mid layui-word-aux">{{$item2->tip}}</div> @endif
                                                    </div>
                                                </td>

                                                @break
                                                @case('sign')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="@if(!$item2->tip) layui-input-block @else layui-input-line @endif">
                                                            <input type="password"
                                                                   name="{{$item2->name}}[{{$item2->name}}]"
                                                                   lay-verify="{{$item2->crux_rule}}"
                                                                   placeholder="" autocomplete="off" lay
                                                                   value="{{$item2->crux_value}}"
                                                                   class="layui-input">
                                                        </div>
                                                    </div>
                                                    @if($item2->tip)
                                                        <div class="layui-form-mid layui-word-aux">{{$item2->tip}}</div> @endif
                                                </td>
                                                @break
                                                @case('checkbox')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="layui-input-block">
                                                            @foreach($item2->content as $key3=> $item3)
                                                                <input type="checkbox"
                                                                       name="{{$item2->name}}[{{$item2->name}}][{{$key3}}]"
                                                                       title="{{$item3['value']}}"
                                                                       value="{{$item3['key']}}"
                                                                       @if(in_array($item3['key'],explode(',',$item2->crux_value))) checked @endif>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                @break
                                                @case('bool')
                                                @case('switch')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="layui-input-block">
                                                            <input type="checkbox"
                                                                   name="{{$item2->name}}[{{$item2->name}}]"
                                                                   lay-skin="switch"
                                                                   @if($item2->crux_value)checked @endif>
                                                        </div>
                                                    </div>
                                                </td>
                                                @break
                                                @case('radio')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="layui-input-block">
                                                            @foreach($item2->content as $key3=> $item3)
                                                                <input type="radio"
                                                                       name="{{$item2->name}}[{{$item2->name}}]"
                                                                       title="{{$item3['value']}}"
                                                                       value="{{$item3['key']}}"
                                                                       @if($item3['key']==$item2->crux_value) checked @endif>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                @break
                                                @case('text')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="@if(!$item2->tip) layui-input-block @else layui-input-line @endif">
                                                <textarea name="{{$item2->name}}[{{$item2->name}}]" placeholder="请输入内容"
                                                          lay-verify="{{$item2->crux_rule}}"
                                                          class="layui-textarea">{{$item2->crux_value}}</textarea>
                                                        </div>
                                                    </div>
                                                    @if($item2->tip)
                                                        <div class="layui-form-mid layui-word-aux">{{$item2->tip}}</div> @endif
                                                </td>
                                                @break
                                                @case('select')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="layui-input-block">
                                                            <select name="{{$item2->name}}[{{$item2->name}}]"
                                                                    value="{{$item2->crux_value}}"
                                                                    lay-verify="{{$item2->crux_rule}}">
                                                                <option value=""></option>
                                                                @foreach($item2->content as $key3=> $item3)
                                                                    <option value="{{$item3['key']}}"
                                                                            @if(in_array($item3['key'],explode(',',$item2->crux_value))) selected @endif>{{$item3['value']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                @break
                                                @case('selects')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="layui-input-block">
                                                            <select name="{{$item2->name}}[{{$item2->name}}]"
                                                                    xm-select="selectId"
                                                                    lay-verify="{{$item2->crux_rule}}">
                                                                <option value=""></option>
                                                                @foreach($item2->content as $key3=> $item3)
                                                                    <option value="{{$item3['key']}}"
                                                                            @if(in_array($item3['key'],explode(',',$item2->crux_value))) selected @endif>{{$item3['value']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                @break
                                                @case('date')
                                                @case('time')
                                                @case('datetime')
                                                @case('daterange')
                                                @case('timerange')
                                                @case('datetimerange')
                                                <td>
                                                    <div class="layui-col-md9">
                                                        <div class="@if(!$item2->tip) layui-input-block @else layui-input-line @endif">
                                                            <input type="text" class="layui-input {{$item2->type}}"
                                                                   name="{{$item2->name}}[{{$item2->name}}]"
                                                                   value="{{$item2->crux_value}}"
                                                                   lay-verify="{{$item2->crux_rule}}"
                                                                   placeholder="" autocomplete="off">
                                                        </div>
                                                        @if($item2->tip)
                                                            <div class="layui-form-mid layui-word-aux">{{$item2->tip}}</div> @endif
                                                    </div>

                                                </td>
                                                @break
                                            @endswitch
                                            <td><span>{</span><span>{</span>{{$item2->crux_group}}.{{$item2->name}}
                                                <span>}}</span>
                                                @if($item2->name!=='configgroup'&&$item2->type!=='dictionary')
                                                    <span style="position:absolute; right:10px; top:10px; "
                                                          class="iconfont layui-hide del"
                                                          data-name="{{$item2->name}}"
                                                          data-group="{{$item2->crux_group}}"
                                                          data-id="{{$item2->id}}" title="删除">
                                                    &#xe613;</span></td>
                                            @endif
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td></td>
                                        <td class="layui-center">
                                            <button type="submit" class="layui-btn layui-btn-sm" lay-submit
                                                    lay-filter="btnSubmit">确认
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </form>
                        </div>
                    @endforeach
                    <div class="layui-tab-item">
                        <form class="layui-form" action="">
                            <div class="layui-form-item">
                                <label class="layui-form-label">数据类型</label>
                                <div class="layui-input-block">
                                    <select name="type" lay-verify="required" lay-filter="type">
                                        <option value=""></option>
                                        @foreach( $form as $index=>$item)
                                            <option value="{{$index}}">{{$item}}</option>
                                        @endforeach;
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">分组</label>
                                <div class="layui-input-block">
                                    <select name="crux_group" lay-verify="required">
                                        <option value=""></option>
                                        @foreach( $tab as $index=>$item)
                                            <option value="{{$index}}">{{$item}}</option>
                                        @endforeach;
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">变量标题</label>
                                <div class="layui-input-block">
                                    <input type="text" name="title" required lay-verify="required" placeholder="请输入标题"
                                           autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">变量名</label>
                                <div class="layui-input-block">
                                    <input type="text" name="name" required lay-verify="required" placeholder="请输入变量名"
                                           autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">变量值</label>
                                <div class="layui-input-block">
                                    <input type="text" name="crux_value" placeholder="请输入变量值"
                                           autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text layui-hide" id="content">
                                <label class="layui-form-label">内容</label>
                                <div class="layui-input-block">
                                    <textarea name="content" required lay-verify="required" placeholder=""
                                              class="layui-textarea">{{$default}}</textarea>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">辅助文字</label>
                                <div class="layui-input-block">
                                    <input type="text" name="tip" placeholder="辅助文字"
                                           autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">验证规则</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="crux_rule" placeholder="请输入验证规则"
                                           autocomplete="off" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">required|email|url|number</div>

                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        layui.extend({
            fieldlist: "/admin/lib/layui/lay/modules/fieldlist",
            formSelects: '/admin/lib/layui/lay/modules/formSelects'
        }).use(['form', 'layer', 'element', 'fieldlist', 'formSelects', 'laydate'],
            function () {
                element = layui.element;
                $ = layui.jquery;
                var form = layui.form,
                    layer = layui.layer,
                    fieldlist = layui.fieldlist,
                    formSelects = layui.formSelects,
                    laydate = layui.laydate;
                fieldlist.render($('.layui-form'));
                formSelects.render('selectId');
                form.on('submit(btnSubmit)', function (data) {
                    // console.log(data.field);
                    let field = fieldlist.filter(data.field);
                    $.ajax({
                        url: "{{url('admin/config/edit')}}",
                        type: "post",
                        data: field,
                        success: function (res) {
                            if (res.status == 'success') {
                                layer.alert(res.msg, {icon: 6}, function () {
                                    // 可以对父窗口进行刷新
                                    window.location.reload();
                                })
                            } else {
                                layer.alert(res.msg, {icon: 5});
                            }
                        }
                    });
                    console.log(field);
                    return false;
                });

                form.on('submit(formDemo)', function (data) {
                    console.log(data.field);
                    $.ajax({
                        url: "{{url('admin/config/add')}}",
                        type: "post",
                        data: data.field,
                        success: function (res) {
                            if (res.status == 'success') {
                                layer.alert(res.msg, {icon: 6}, function () {
                                    // 可以对父窗口进行刷新
                                    window.location.reload();
                                })
                            } else {
                                layer.alert(res.msg, {icon: 5});
                            }
                        }
                    });
                    return false;
                });
                form.on('select(type)', function (data) {
                    let content = "select|selects|checkbox|radio";
                    if (content.search(data.value) !== -1) {
                        $('#content').removeClass('layui-hide');
                    } else {
                        $('#content').removeClass('layui-hide');
                        $('#content').addClass('layui-hide');
                    }
                });
                $('.date').each(function () {
                    laydate.render({
                        elem: this
                    });
                });
                $('.time').each(function () {
                    laydate.render({
                        elem: this,
                        type: 'time'
                    });
                });
                $('.datetime').each(function () {
                    laydate.render({
                        elem: this,
                        type: 'datetime'
                    });
                });
                $('.daterange').each(function () {
                    laydate.render({
                        elem: this,
                        range: true
                    });
                });
                $('.timerange').each(function () {
                    laydate.render({
                        elem: this,
                        type: 'time',
                        range: true
                    });
                });
                $('.datetimerange').each(function () {
                    laydate.render({
                        elem: this,
                        type: 'datetime',
                        range: true
                    });
                });
                $('tfoot tr').on('mouseover', function () {
                    $(this).find('.del').removeClass('layui-hide');
                });

                $('tfoot tr').on('mouseout', function () {
                    $(this).find('.del').addClass('layui-hide');
                });

                $('.del').on('click', function () {
                    let id = $(this).data('id'),
                        name = $(this).data('name'),
                        group = $(this).data('group');
                    layer.confirm('是否删除？', {
                        btn: ['取消', '确认'] //按钮
                    }, function () {
                        layer.closeAll()
                        // layer.msg('的确很重要', {icon: 1});
                    }, function () {
                        $.ajax({
                            url: "{{url('admin/config/del')}}",
                            data: {
                                id: id,
                                name: name,
                                group: group
                            },
                            type: "POST",
                            success: function (res) {
                                if (res.status == 'success') {
                                    layer.alert(res.msg, {icon: 6}, function () {
                                        // 可以对父窗口进行刷新
                                        window.location.reload();
                                    })
                                } else {
                                    layer.alert(res.msg, {icon: 5});
                                }
                            }
                        })
                    });
                })
            });

    </script>
@endsection
