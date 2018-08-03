<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>About - CCS</title>
    <link rel="shortcut icon" href="./logo.png">
    <link rel="bookmark" href="./logo.png">
    <script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
    <script src="/layui/layui.js"></script>
    <script src="/js/language.js"></script>
    <link rel="stylesheet" href="/layui/css/layui.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
<br><br><br><br>
<div class="layui-container">
    <div class="layui-row">

        <!-- 分隔符 -->
        <div class="separate">
            <fieldset><legend><a name="accordion">时间轴</a></legend></fieldset>
        </div>

        <br>
        <br>

        <ul class="layui-timeline">
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2015年6月20日</h3>
                    <p>
                        Crystal Computer Studio成立<i class="layui-icon"></i>
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年1月</h3>
                    <p>
                        Crystal Computer Studio第一次在CTS发题
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年10月</h3>
                    <p>
                        经历艰险，Crystal Computer Studio有了第一台自己的服务器！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年6月21日</h3>
                    <p>
                        Crystal Computer Studio召开第一场组内会议！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年8月3日</h3>
                    <p>
                        Crystal Computer Studio网站1.0发布，并且成功上线！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">未来。。。</h3>
                </div>
            </li>
        </ul>

        <br>
        <br>

        <!-- 分隔符 -->
        <div class="separate">
            <fieldset><legend><a name="accordion">加入我们 - Join</a></legend></fieldset>
        </div>

        <br>
        <iframe frameborder=0 src="./send/index.php" style="max-width:800px;width:100%;height:610px;margin-left:auto;margin-right:auto;display:block;"></iframe>
    </div>
</div>
</body>


<!-- 侧边按钮 -->
<script>
    layui.use('util', function(){
        var util = layui.util;

        //执行
        util.fixbar({
            bar1: false
        });
    });
</script>

<!-- 一言获取 -->
<footer>
  <script src="/js/language.js"></script>
    <div class="layui-col-md12">
        <div class="s-footer">
            <ul>
                <li>Language:&nbsp;<select id="langSelector" onchange="changeLang();">
                  <option value="not">- Not selected -</option>
                  <option value="en">English</option>
                  <option value="ja">日本語</option>
                  <option value="zh">中文</option>
                </select><!--<button onclick="changeLang();">Change</button>--></li>
                <li><strong>Powered by &copy; Crystal Web Service & XSY</strong></li>
                <li>Version: v1.1</li>
                <li id="hitokoto">:D 获取中...</li>
            </ul>
        </div>
    </div>
</footer>
</html>
