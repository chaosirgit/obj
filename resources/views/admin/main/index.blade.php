<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./plugins/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="./plugins/font-awesome/css/font-awesome.min.css" media="all">
    <style>
        .info-box {
            height: 85px;
            background-color: white;
            background-color: #ecf0f5;
        }
        
        .info-box .info-box-icon {
            border-top-left-radius: 2px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 2px;
            display: block;
            float: left;
            height: 85px;
            width: 85px;
            text-align: center;
            font-size: 45px;
            line-height: 85px;
            background: rgba(0, 0, 0, 0.2);
        }
        
        .info-box .info-box-content {
            padding: 5px 10px;
            margin-left: 85px;
        }
        
        .info-box .info-box-content .info-box-text {
            display: block;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-transform: uppercase;
        }
        
        .info-box .info-box-content .info-box-number {
            display: block;
            font-weight: bold;
            font-size: 18px;
        }
        
        .major {
            font-weight: 10px;
            color: #01AAED;
        }
        
        .main {
            margin-top: 25px;
        }
        
        .main .layui-row {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="layui-fluid main">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#00c0ef !important;color:white;"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">90%</span>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#dd4b39 !important;color:white;"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">25,412</span>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#00a65a !important;color:white;"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">654</span>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#f39c12 !important;color:white;"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">85</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-row">
            <div class="layui-col-md12">
                <ul class="layui-timeline">
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">置顶的说明文档</h3>
                            <ul>
                                <li>交流群:
                                    <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=7d46b4a74805131378febabe99963fdd3e767544a34f9b92a9db0737ebf130a1"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="BeginnerAdmin" title="BeginnerAdmin"></a>
                                </li>
                                <li>点击进入群哦，如果实在加不了还有群号啊[248049395]
                                </li>
                                <li>下载地址：
                                    <a href="http://git.oschina.net/besteasyteam/kit_admin" target="_blank">http://git.oschina.net/besteasyteam/kit_admin</a>(大家先在这里下载吧.)
                                </li>
                                <li>大家在用的过程中有什么问题的话可以在群里问啊，别的先不写了...</li>
                                <li><a href="index.1.html" target="_blank">点击查看一级菜单的加载</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">9月8日(v1.0.5)</h3>
                            <p>
                                <h3>#tab</h3>
                                <ul>
                                    <li>添加tab.close(id)方法</li>
                                    <li>添加tab.getId()方法</li>
                                </ul>
                                <h3>#onelevel</h3>
                                <ul>
                                    <li>添加renderAfter(elem)回调函数 所属options参数</li>
                                    <li>
                                        <pre class="layui-code">
onelevel.set{
    renderAfter: function(elem) {
        //elem 当前容器
        elem.find('li').eq(0).click(); //模拟点击第一个
    }
}</pre>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">9月1日(v1.0.3)</h3>
                            <p>
                                <h3>#添加两个主题(欢迎你们去配很好看的色彩，反馈给我，然后我分享给大家/xyx)</h3>
                                <ul>
                                    <li><a href="index.2.html" target="_blank">点击我(灰色)</a></li>
                                    <li><a href="index.3.html" target="_blank">点击我(蓝色)</a></li>
                                    <li><a href="page.html" target="_blank">模板的另一种加载方式(page)</a></li>
                                    <li>更新到 layui 2.1.1 <a href="http://www.layui.com/doc/base/changelog.html" target="_blank">#更新文档</a></li>
                                </ul>
                            </p>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">8月31日(v1.0.2)</h3>
                            <p>
                                <h3>#添加onelevel组件（加载头部菜单）</h3>
                                <ul>
                                    <li>详见<a href="onelevel.html">说明文档</a></li>
                                </ul>
                                <h3>#Tab组件</h3>
                                <ul>
                                    <li>添加选项卡加载进度条</li>
                                </ul>
                                <h3>#其他更新</h3>
                                <ul>
                                    <li>优化顶部菜单的样式</li>
                                </ul>
                            </p>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">8月30日(v1.0.1)</h3>
                            <p>
                                <h3>#Navbar组件</h3>
                                <ul>
                                    <li>添加远程加载和本地加载的方式（设置方式详见<a href="navbar.html">说明文档</a>）</li>
                                </ul>
                                <h3>#Tab组件</h3>
                                <ul>
                                    <li>添加 mainUrl 属性 默认：main.html</li>
                                </ul>
                            </p>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">8月29日</h3>
                            <p>
                                <ul>
                                    <li>更新<a href="navbar.html">navbar组件</a>和<a href="tab.html">tab组件</a>的说明文档</li>
                                    <li>新增左侧菜单可缩进.</li>
                                    <li>调整头部导航栏的高度，让她看起来更协调.</li>
                                </ul>
                            </p>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">8月25日</h3>
                            <p>
                                <ul>
                                    <li>
                                        <p>添加message组件</p>
                                        <p>Example:</p>
                                        <pre class="layui-code">
var message = layui.message;
//示例，监听某点击事件后触发
$(selector).on('click',function(){
    message.show({
        skin:'cyan',//皮肤  支持:red,orange,cyan,blue,black,default
        msg:'提示信息'//提示信息
    });
});</pre><input type="button" class="layui-btn" value="点击我测试message组件" id="test" /></li>
                                    <li>tab组件添加两个属性：<span class="major">closeBefore</span>[关闭选项卡之前发生]、<span class="major">onSwitch</span>[选项卡切换时发生](具体请查看文档[好像文档还没加进去~~~])</li>
                                </ul>
                            </p>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">8月24日</h3>
                            <p>
                                <h3>BeginnerAdmin 改名为kit_admin</h3>
                                <ul>
                                    <li>项目重构，基于layui2.0</li>
                                    <li>添加navbar模块
                                        <a href="navbar.html">navbar文档</a>
                                    </li>
                                    <li>添加tab模块
                                        <a href="tab.html">tab文档</a>
                                    </li>
                                    <li>还有不想写了....</li>
                                </ul>
                            </p>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <div class="layui-timeline-title">2017年</div>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <div class="layui-timeline-title">更新日志</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="./plugins/layui/layui.js"></script>
    <script>
        layui.use('jquery', function() {
            var $ = layui.jquery;
            $('#test').on('click', function() {
                parent.message.show({
                    skin: 'cyan'
                });
            });
        });
    </script>
</body>

</html>