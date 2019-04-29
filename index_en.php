<?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>
    <title>CCS - Crystal Studios</title>
    <script>var lang = "en";</script>
</head>
<body>

<!-- 头 -->
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md12 main">
            <!-- 这里四个球 -->
            <span class="circle1"></span>
            <span class="circle2"></span>
            <span class="circle3"></span>
            <span class="circle4"></span>
            <div>
                <img id="logo">
            </div>
            <div class="text-center">
                <p class="fl">
                    <span>Crystal Computer Studio</span>
                    <br>
                    <span class="sl">Creating, Coding, and Dreaming</span>
                </p>
            </div>
            <div class="button">
                <a class="layui-btn layui-btn-primary  layui-btn-lg layui-btn-radius" style="width: 170px" href="https://www.cstu.gq" target="_blank"><i
                            class="layui-icon">&#xe609;</i> Main site
                </a>
                <a class="layui-btn layui-btn-warm  layui-btn-lg layui-btn-radius" style="width: 170px" href="./about"><i
                            class="layui-icon">&#xe60b;</i> About
                </a>
            </div>
        </div>

        <!-- 介绍等 -->
        <div class="layui-row layui-col-space25">
            <div class="layui-col-md3">
                <a class="widget5" href="https://git.cstu.gq/TURX" target="_blank">
                    <div class="widget5-trending">
                        <img class="avatar-turx">
                    </div>
                    <div class="widget5-box">
                        <div class="widget5-value">TURX</div>
                        <div class="widget5-label">Chief Executive</div>
                    </div>
                    <div class="layui-clear"></div>
                </a>
            </div>


            <div class="layui-col-md3">
                <a class="widget5" href="https://git.cstu.gq/callG" target="_blank">
                    <div class="widget5-trending">
                        <img class="avatar-callg">
                    </div>
                    <div class="widget5-box">
                        <div class="widget5-value">callG</div>
                        <div class="widget5-label">Managing Director</div>
                    </div>
                    <div class="layui-clear"></div>
                </a>
            </div>

            <div class="layui-col-md3">
                <a class="widget5" href="https://git.cstu.gq/Stardust" target="_blank">
                    <div class="widget5-trending">
                        <img class="avatar-stardust">
                    </div>
                    <div class="widget5-box">
                        <div class="widget5-value">Stardust</div>
                        <div class="widget5-label">Managing Member</div>
                    </div>
                    <div class="layui-clear"></div>
                </a>
            </div>

            <div class="layui-col-md3">

                <a class="widget5" href="https://xsy.fun/" target="_blank">
                    <div class="widget5-trending">
                        <img class="avatar-xsy">
                    </div>
                    <div class="widget5-box">
                        <div class="widget5-value">XSY</div>
                        <div class="widget5-label">Web Constructor</div>
                    </div>
                    <div class="layui-clear"></div>
                </a>
            </div>
        </div>
        <br><br>

        <!-- 分隔符 -->
        <div class="separate">
            <fieldset><legend><a name="accordion">Project</a></legend></fieldset>
        </div>

        <br><br>
        <!-- 项目 -->
        <div class="layui-col-space30">
            <div class="layui-col-md3">
                <div class="box">
                    <div class="box-body">
                        <h2 class="box-zht">
                            <a href="https://git.cstu.gq/MCQ/ModernMinecraft/">Modern Minecraft</a>
                        </h2>
                        <div class="box-desc">
                            <span>This is a reconstructed, modernized game launcher for Minecraft players based on KMCCC.</span>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="footer-reference">
                            <img class="avatar-turx">
                        </div>
                        <div class="footer-rtime">
                            <span>Jun 11, 2019</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-md3">
                <div class="box">
                    <div class="box-body">
                        <h2 class="box-zht">
                            <a>Crystal Information System</a>
                        </h2>
                        <div class="box-desc">
                            <span>Based on Crystal User System, we can build a lot of applications.<br>For example, things like proxy and blog are being implemented.</span>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="footer-reference">
                            <img class="avatar-turx">
                            <img class="avatar-xsy">
                        </div>
                        <div class="footer-rtime">
                            <span>Jun 19, 2018</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-md3">
                <div class="box">
                    <div class="box-body">
                        <h2 class="box-zht">
                            <a href="https://git.cstu.gq/CCS/CWS">Crystal Web Service</a>
                        </h2>
                        <div class="box-desc">
                            <span>A part of websites for our departments</span>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="footer-reference">
                            <img class="avatar-xsy">
                            <img class="avatar-turx">
                            <img class="avatar-stardust">
                        </div>
                        <div class="footer-rtime">
                            <span>Jun 9, 2018</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-md3">
                <div class="box">
                    <div class="box-body">
                        <h2 class="box-zht">
                            <a href="https://git.cstu.gq/CCS/QL_WPF/">QL_WPF</a>
                        </h2>
                        <div class="box-desc">
                            <span>Quick Launcher<br>A software for teachers based on WPF</span>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="footer-reference">
                            <img class="avatar-callg">
                            <img class="avatar-turx">
                        </div>
                        <div class="footer-rtime">
                            <span>Jun 10, 2018</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>
