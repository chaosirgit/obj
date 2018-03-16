@extends('admin._construct')
@section('body')
    <div style="margin-top: 10px;width: 100%;margin-left: 10px;">
    <button class="layui-btn layui-btn-normal layui-btn-radius" onclick="layer_show('添加管理员','{{url('admin/admin_user_add')}}',530,280)">添加管理员</button>
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

    layui.use(['table'], function(){
        var table = layui.table;
        var $ = layui.jquery;
        //第一个实例
        table.render({
            elem: '#demo'
            ,url: '{{url('admin/admin_user_list')}}' //数据接口
            ,page: true //开启分页
            ,cols: [[ //表头
                {field: 'id', title: 'ID', minWidth:80, sort: true, fixed: 'left'}
                ,{field: 'username', title: '用户名', minWidth:80}
                ,{field: 'created_at', title: '注册时间', minWidth:80, sort: true}
                ,{title:'操作',minWidth:100,toolbar: '#barDemo'}

            ]]
        });

        table.on('tool(test)', function(obj){
            var data = obj.data;
            if(obj.event === 'del'){
                layer.confirm('真的删除行么', function(index){
                    $.ajax({
                        url:'{{url('admin/admin_user_del')}}?id='+data.id,
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
                layer_show('编辑信息','{{url('admin/admin_user_add')}}?id='+data.id,530,280);
            }
        });

    });
</script>
    @endsection