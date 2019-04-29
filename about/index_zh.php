<?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>
<title>About - Crystal 计算机工作室</title>
<script>var lang = "zh";</script>
</head>
<body>

<br><br><br><br>
<div class="layui-container">
    <div class="layui-row">

    <button class="layui-btn layui-btn-primary" onclick="window.location.assign('..');">
        <i class="layui-icon">&#xe603;</i> 返回
    </button>

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
                        Crystal 计算机工作室成立了！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年1月</h3>
                    <p>
                        第一次在CTS发题。
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年10月</h3>
                    <p>
                        经历艰险，我们有了第一台自己的服务器（CWS-UK）！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年6月21日</h3>
                    <p>
                        我们召开了第一场组内会议！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年8月3日</h3>
                    <p>
                        Crystal 计算机工作室网站 1.0 发布！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年8月3日</h3>
                    <p>
                        Crystal 计算机工作室网站 <?php include $_SERVER['DOCUMENT_ROOT']."/ver.php"; ?>
                      <br>
                        经过工程师们的努力正式上线!
                      <br><br>更新日志<br>
                      1. 变动了主要成员<br>
                      2. 更正了一些翻译错误
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">未来将会有更多有趣的事情。</h3>
                </div>
            </li>
        </ul>

        <br>
        <br>

        <!-- 分隔符 -->
        <div class="separate">
            <fieldset><legend><a name="accordion">加入我们</a></legend></fieldset>
        </div>

        <br>
        <a class="layui-btn layui-btn-normal layui-btn-lg layui-btn-radius" href="/doc/req.pdf" target="_blank">
            <i class="layui-icon">&#xe601;</i> 下载 (PDF)
        </a>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>
