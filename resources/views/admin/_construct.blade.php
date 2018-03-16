<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>KIT ADMIN</title>
    <link rel="stylesheet" href="./plugins/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="./plugins/font-awesome/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="./src/css/app.css" media="all">
    @yield('head')
</head>

<body>
<div style="margin-top: 10px;margin-right: 50px;">
    @yield('body')
    </div>
<script src="./plugins/layui/layui.js"></script>
    <script>
        function layer_show(title,url,w,h) {
            var width = w || 800;
            var height = h || 600;
            layui.use('layer', function() { //独立版的layer无需执行这一句
                var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
                layer.open({
                    type: 2 //此处以iframe举例
                    ,title: title
                    ,area: [width+'px', height+'px']
                    ,shade: 0
                    ,maxmin: true
                    ,content: url
                    ,offset:'10px'

                });
            });
        }

    </script>
@yield('script')
</body>
