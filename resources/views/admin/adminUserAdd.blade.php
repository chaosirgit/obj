@extends('admin._construct')
@section('body')
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">输入框</label>
            <div class="layui-input-block">
                <input type="text" name="username" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input" value="{{$results->username}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码框</label>
            <div class="layui-input-inline">
                <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">密码必须为 6-25 位</div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="hidden" value="{{$results->id}}" name="id">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

    @endsection
@section('script')

    <script>
        //Demo
        layui.use('form', function(){
            var form = layui.form;
            var $ = layui.jquery;

            //监听提交
            form.on('submit(formDemo)', function(data){
                var id = data.field.id;
                var username = data.field.username;
                var password = data.field.password;
                $.ajax({
                    url:'{{url('admin/admin_user_add')}}',
                    type:'post',
                    dataType:'json',
                    data:{username:username,password:password,id:id},
                    success:function (res) {
                        if (res.error != 0){
                            layer.msg(res.msg);
                            return false;
                        }else{
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                            parent.window.location.reload();
                        }
                    }
                });
                return false;
            });
        });
    </script>
    @endsection