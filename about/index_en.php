<?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>
<title>About - Crystal Computer Studio</title>
<script>var lang = "en";</script>
</head>
<body>

<br><br><br><br>
<div class="layui-container">
    <div class="layui-row">

    <button class="layui-btn layui-btn-primary" onclick="window.location.assign('..');">
        <i class="layui-icon">&#xe603;</i> Back
    </button>

        <!-- 分隔符 -->
        <div class="separate">
            <fieldset><legend><a name="accordion">Time Axis</a></legend></fieldset>
        </div>

        <br>
        <br>

        <ul class="layui-timeline">
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">June 20, 2015</h3>
                    <p>
                        Crystal Computer Studio was established.
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">January 2018</h3>
                    <p>
                        Crystal Computer Studio delivered its first question on CTS.
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">October 2018</h3>
                    <p>
                        After a series of daunting explorations and a mass of perspiration, Crystal Computer Studio eventually owned its first server (CWS-UK).
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">June 21, 2018</h3>
                    <p>
                       Crystal Computer Studio convened its first meeting!
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">August 3, 2018</h3>
                    <p>
                        The version 1.0 of Crystal Computer Studio’s website was successfully launched online!
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">August 3, 2018</h3>
                    <p>
                        With the great endeavour of our engineers, The version <?php include $_SERVER['DOCUMENT_ROOT']."/ver.php"; ?> of this website was successfully launched!
                      <br><br>Changelog<br>
                      1. Changed main members.<br>
                      2. Fixed some errors in translations.
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">There comes the more interesting future.</h3>
                </div>
            </li>
        </ul>

        <br>
        <br>

        <!-- 分隔符 -->
        <div class="separate">
            <fieldset><legend><a name="accordion">Join us</a></legend></fieldset>
        </div>

        <br>
        <a class="layui-btn layui-btn-normal layui-btn-lg layui-btn-radius" href="/doc/req.pdf" target="_blank">
            <i class="layui-icon">&#xe601;</i> Download (PDF)
        </a>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>
