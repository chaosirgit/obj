@extends('admin._construct')
@section('body')
    <div style="margin-top: 10px;width: 100%;margin-left: 10px;">
        <button class="layui-btn layui-btn-normal layui-btn-radius" onclick="layer_show('添加用户','{{url('admin/user_add')}}',530,280)">添加用户</button>
        <form class="layui-form layui-form-pane layui-inline" action="">

            <div class="layui-inline" style="margin-left: 50px;">
                <label class="layui-form-label">手机号码</label>
                <div class="layui-input-inline">
                    <input type="text" name="mobile" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-inline">
                <div class="layui-input-inline">
                    <button class="layui-btn" lay-submit="" lay-filter="mobile_search"><i class="layui-icon">&#xe615;</i></button>
                </div>
            </div>



        </form>
    </div>
    <table id="demo" lay-filter="test"></table>
    <script type="text/html" id="barDemo">
        {{--<a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>--}}
        <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
    </script>
@endsection

@section('script')
<script>

    layui.use(['table','form'], function(){
        var table = layui.table;
        var $ = layui.jquery;
        var form = layui.form;
        //第一个实例
        table.render({
            elem: '#demo'
            ,url: '{{url('admin/user_list')}}' //数据接口
            ,page: true //开启分页
            ,id:'mobileSearch'
            ,cols: [[ //表头
                {field: 'id', title: 'ID', minWidth:80, sort: true, fixed: 'left'}
                ,{field: 'openid', title: 'openID', minWidth:80, sort: true, fixed: 'left'}
                ,{field: 'mobile', title: '手机号', minWidth:80}
                ,{field: 'nickname', title: '昵称', minWidth:80}
                ,{field: 'gender_name', title: '性别', minWidth:80}
                ,{field: 'avatar', title: '头像', minWidth:80}
                ,{field: 'type', title: '用户类型', minWidth:80}
                ,{field: 'created_at', title: '注册时间', minWidth:80}
                ,{title:'操作',minWidth:100,toolbar: '#barDemo'}

            ]]
        });

        table.on('tool(test)', function(obj){
            var data = obj.data;
            if(obj.event === 'del'){
                layer.confirm('真的删除行么', function(index){
                    $.ajax({
                        url:'{{url('admin/user_del')}}?id='+data.id,
                        success:function (res) {
                            if(res.error != 0){
                                layer.msg(res.msg);
                            }else{
                                obj.del();
                                layer.close(index);
                            }
                        }
                    });


                });
            } else if(obj.event === 'edit'){
                layer_show('编辑信息','{{url('admin/user_add')}}?id='+data.id,530,280);
            }
        });

        //监听提交
        form.on('submit(mobile_search)', function(data){
            var mobile = data.field.mobile;
            table.reload('mobileSearch',{
                where:{mobile:mobile},
                page: {curr: 1}         //重新从第一页开始
            });
            return false;
        });

    });
</script>
    @endsection