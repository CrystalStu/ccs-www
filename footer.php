
<!-- side buttons -->
<script>
    layui.use(['util',  'layer'], function(){
        var util = layui.util
            ,layer = layui.layer;
        util.fixbar({
            bar1: "&#xe614",
            click: function(type) {
                if(type === 'bar1'){
                    layer.open({
                        type: 1,
                        title:'Language',
                        skin: 'layui-layer-molv', //样式类名
                        closeBtn: 1, //显示关闭按钮
                        anim: 2,
                        area: ['250px', '200px'],
                        shadeClose: true, //开启遮罩关闭
                        content: '<ul class="mdui-list">\n' +
                        '  <li class="mdui-list-item mdui-ripple" onclick="changeLang_newDesign_en();">English</li>\n' +
                        '  <li class="mdui-list-item mdui-ripple" onclick="changeLang_newDesign_ja();">日本語</li>\n' +
                        '  <li class="mdui-list-item mdui-ripple" onclick="changeLang_newDesign_zh();">中文</a></li>\n' +
                        '</ul>'
                    });
                }
            }
        });
    });
</script>


<!-- footer -->
<footer>
  <script src="/js/language.js"></script>
    <div class="layui-col-md12">
        <div class="s-footer">
            <ul>
                <li><a href="https://twitter.com/crystalstuX" alt="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://t.me/crystalccs" alt="Telegram"><i class="fab fa-telegram-plane"></i></a></li>
                <li><a href="https://github.com/CrystalStu" alt="GitHub"><i class="fab fa-github-alt"></i></a></li>
                <li><strong>Powered by &copy; Crystal Web Service</strong></li>
                <li>Version <?php include $_SERVER['DOCUMENT_ROOT']."/ver.php"; ?></li>
                <?php if($_COOKIE["lang"] == "zh") echo("<li id='hitokoto' class='layui-hide-xs'>:D 获取中...</li>"); ?>
                <li><?php
                switch($_COOKIE["lang"]) {
                    case "zh":
                        break;
                    case "ja":
                        echo("翻訳担当：TURX");
                        break;
                    case "en":
                        echo("Translator: Stardust");
                        break;
                }
                ?></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
