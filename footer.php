
<!-- 侧边按钮 -->
<script>
    layui.use(['util',  'layer'], function(){
        var util = layui.util
            ,layer = layui.layer;
        //执行
        util.fixbar({
            bar1: "&#xe614"
            ,click: function(type){
                console.log(type);
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
                <li><strong>Powered by &copy; XSY @ Crystal Web Service</strong></li>
                <li>Version <?php include $_SERVER['DOCUMENT_ROOT']."/ver.php"; ?></li>
                <?php if($_COOKIE["lang"] == "zh") echo("<li id='hitokoto'>:D 获取中...</li>"); ?>
                <li><?php
                switch($_COOKIE["lang"]) {
                    case "zh":
                        echo("翻译者：XSY");
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
