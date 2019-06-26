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

        <div class="separate">
            <fieldset><legend><a name="accordion">Introduction</a></legend></fieldset>
        </div>

        <p>Crystal Computer Studio is the core of Crystal Studios. We built this community to provide a place for youngsters, especially talented students, to discuss trending technologies, and to practice them via coding in person.</p><br>
        <p>Professional skill practices here. Not only can you share competitive programming ideas, but also engage in our practical projects. Our administrative group selects interesting and prevalent topics which proposed by members and promotes them. Most of our members have at least one unique skill, for instance, fluid Javascript writing, DevOps operating, and competitive programming coding.</p><br>
        <p>Creative thinking collides here. As what it says above, our members can propose their thoughts directly. Once the proposals being approved, others would help them to done the works in a better way. We would also push members' good articles and thoughts to our multilingual information service.</p><br>
        <p>Different cultures meets here. This might be not a main aspect of this studio, but there is truly a place you can find people who have the same interests as you do beyond Computer Science. To illustrate, just as what you have seen, some of us are interested in foreign languages and cultures. There are also members who like Computer Engineering.</p>

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
                    <h3 class="layui-timeline-title"><?php include("changeDateProc.php"); echo(getChangeDate("en")) ?></h3>
                    <p>
                        With the great endeavour of our engineers, The version <?php include $_SERVER['DOCUMENT_ROOT']."/ver.php"; ?> of this website was successfully launched!
                      <br><br>Changelog<br>
                      <?php include $_SERVER['DOCUMENT_ROOT']."/changelog.php"; ?>
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
