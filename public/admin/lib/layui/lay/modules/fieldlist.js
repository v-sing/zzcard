layui.define(['laytpl'], function (exports) {
    var fieldlist = {
        config: {
            fieldlisttpl: '<dd class="layui-inline"><div class="layui-input-inline key"><input type="text" name="{{d.name}}[{{d.index}}][key]" class="layui-input" value="{{d.row.key}}" lay-verify="required"></div><div class="layui-input-inline value"><input type="text" name="{{d.name}}[{{d.index}}][value]" value="{{d.row.value}}" class="layui-input" lay-verify="required"></div><div class="layui-input-inline"><span class="layui-btn layui-btn-sm layui-btn-danger iconfont btn-remove">&#xe613;</span> <span class="layui-btn layui-bg-black iconfont append">&#xe617;</span></div></dd>',
            filter: []
        },
        render: function (form) {
            $ = layui.jquery;
            laytpl = layui.laytpl
            //刷新隐藏textarea的值
            if ($(".fieldlist", form).size() > 0) {
                var refresh = function (name) {
                    var data = {};
                    var textarea = $("textarea[name='" + name + "']", form);
                    var container = textarea.closest("dl");
                    var template = container.data("template");
                    $.each($("input,select", container).serializeArray(), function (i, j) {
                        var reg = /\[(\w+)\]\[(\w+)\]$/g;
                        var match = reg.exec(j.name);
                        if (!match)
                            return true;
                        match[1] = "x" + parseInt(match[1]);
                        if (typeof data[match[1]] == 'undefined') {
                            data[match[1]] = {};
                        }
                        data[match[1]][match[2]] = j.value;
                    });
                    var result = template ? [] : {};

                    $.each(data, function (i, j) {
                        if (j) {
                            if (!template) {
                                if (j.key != '') {
                                    result[j.key] = j.value;
                                }
                            } else {
                                result.push(j);
                            }
                        }
                    });
                    // console.log(JSON.stringify(result));
                    textarea.val(JSON.stringify(result));
                }
            }
            //监听文本框改变事件
            $(document).on('change keyup', ".fieldlist input,.fieldlist textarea,.fieldlist select", function () {
                refresh($(this).closest("dl").data("name"));
            });
            //追加控制
            var json = {};
            $(".fieldlist", form).on("click", ".btn-append,.append", function (e, row) {
                var container = $(this).closest("dl");
                var index = container.data("index");
                var name = container.data("name");
                var data = container.data();
                index = index ? parseInt(index) : 0;
                container.data("index", index + 1);
                var row = row ? row : { key: "", value: "" };
                var vars = { index: index, name: name, data: data, row: row };
                var that = this;
                fieldlist.config.filter.push(name + "[" + index + "][key]");
                fieldlist.config.filter.push(name + "[" + index + "][value]");
                laytpl(fieldlist.config.fieldlisttpl).render(vars, function (string) {
                   xxx= $(string).insertBefore($(that).closest("dd"));
                    $(that).trigger("fa.event.appendfieldlist", $(that).closest("dd").prev());
                    refresh(container.data("name"));
                });

            });
            //移除控制
            $(".fieldlist", form).on("click", "dd .btn-remove", function () {
                var container = $(this).closest("dl");
                $(this).closest("dd").remove();
                refresh(container.data("name"));
            });
            //渲染数据
            $(".fieldlist", form).each(function () {
                var container = this;
                var textarea = $("textarea[name='" + $(this).data("name") + "']", form);
                if (textarea.val() == '') {
                    return true;
                }
                var template = $(this).data("template");
                var json = {};
                try {
                    json = JSON.parse(textarea.val());
                } catch (e) {
                }
                $.each(json, function (i, j) {
                    $(".btn-append", container).trigger('click', template ? j : {
                        key: i,
                        value: j
                    });
                });
            });
        },
        filter: function (field) {
            let filter = fieldlist.config.filter;
            let array = {};
            for (var key in field) {

                if (fieldlist.in_array(key, filter) == false) {
                    array[key] = field[key]
                }
            }
            return array;
        },
        in_array: function (search, array) {
            for (var i in array) {
                if (array[i] == search) {
                    return true;
                }
            }
            return false;
        }
    }
    exports('fieldlist', fieldlist);
}).addcss('modules/fieldlist/default/fieldlist.css');