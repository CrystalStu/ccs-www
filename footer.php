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
                        '  <li class="mdui-list-item mdui-ripple"><a target="_blank" href="index_zh.php">中文</a></li>\n' +
                        '  <li class="mdui-list-item mdui-ripple"><a target="_blank" href="index_en.php">English</a></li>\n' +
                        '  <li class="mdui-divider"></li>\n' +
                        '  <li class="mdui-list-item mdui-ripple"><a target="_blank" href="index_ja.php">日本語</a></li>\n' +
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
                <li><strong>Powered by &copy; Crystal Web Service & XSY</strong></li>
                <li>Version: v1.2</li>
                <li id="hitokoto">:D 获取中...</li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>