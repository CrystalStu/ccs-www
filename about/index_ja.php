<?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>
<title>について - Crystalコンピュータースタジオ</title>
<script>var lang = "ja";</script>
</head>
<body>

<br><br><br><br>
<div class="layui-container">
    <div class="layui-row">

    <button class="layui-btn layui-btn-primary" onclick="window.location.assign('..');">
        <i class="layui-icon">&#xe603;</i> 戻す
    </button>

        <div class="separate">
            <fieldset><legend><a name="accordion">タイムライン</a></legend></fieldset>
        </div>

        <br>
        <br>

        <ul class="layui-timeline">
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2015年6月20日</h3>
                    <p>
                        Crystalコンピュータースタジオは確立された。
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年1月</h3>
                    <p>
                        最初のCTS試験を公開した！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年10月</h3>
                    <p>
                        最初のサーバー（CWS-イギリス）が運行されています。
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年6月21日</h3>
                    <p>
                        最初の会議を開催した。
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2018年8月3日</h3>
                    <p>
                        このウェブサイトの最初のバージョンはオンラインされた！
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">2019年4月30日</h3>
                    <p>
                        このウェブサイトのバージョン<?php include $_SERVER['DOCUMENT_ROOT']."/ver.php"; ?>は
                      <br>
                        オンラインされた！
                      <br><br>更新ロッグ<br>
                      1. 主要メンバーを変える<br>
                      2. 翻訳フィックス
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">より面白いことはずっと未来にある。</h3>
                </div>
            </li>
        </ul>

        <br>
        <br>

        <!-- 分隔符 -->
        <div class="separate">
            <fieldset><legend><a name="accordion">申込書</a></legend></fieldset>
        </div>

        <br>
        <a class="layui-btn layui-btn-normal layui-btn-lg layui-btn-radius" href="/doc/req.pdf" target="_blank">
            <i class="layui-icon">&#xe601;</i> ダウンロード (PDF)
        </a>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>
