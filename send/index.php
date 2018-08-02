<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Server酱</title>
        <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="//cdn.hap5.top/code/serverchan/serverchan.min.css" type="text/css" />
        <link rel="stylesheet" href="//cdn.hap5.top/code/serverchan/tip.min.css" type="text/css" />
		<link rel="shortcut icon" href="//cdn.hap5.top/photo/ico.png">
        <link rel="bookmark" href="//cdn.hap5.top/photo/ico.png">
    </head>
	<!-- 自定义背景 -->
        <style>
            body:before{
                background: url(//cdn.hap5.top/photo/bg_wide.jpg) no-repeat bottom center
            }
            @media screen and (max-width: 980px){
                body:before{
                    background-image: url(//cdn.hap5.top/photo/bg_narrow.jpg);
                    background-position: top center;
                }
            }
            #form-bg{
                background: #FFF url(//cdn.hap5.top/photo/bg_form.png) no-repeat bottom right;
            }
            <?php
                if(isset($_GET["nobg"])){
                    echo("body:before{display: none !important}");
                }
            ?>
        </style>
    <body>
        <div id="form-bg" style="">
            <form role="form" action="sc.php" method="post" id="send_form" class="well">
                <h4 style="text-align: center;margin-top: 0 !important;">发送消息</h4>
                <div class="form-group">
                    <label for="text">消息标题</label>
                    <input type="text" class="form-control" id="text" name="text" placeholder="必填，最长256字节" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>
                <div class="form-group">
                    <label for="contact">联系邮箱</label>
                    <input type="email" class="form-control" id="contact" name="contact" placeholder="选填，如果需要我回复请填上邮箱" onkeydown="if(event.keyCode==13) return false;" value="">
                </div>
                <div class="form-group">
                    <label for="desp">消息内容</label>
                    <textarea class="form-control" id="desp" row="3" placeholder="消息内容，最长64K，选填，支持MarkDown" name="desp"></textarea>
                </div>
                <button type="submit" id="submit-btn" class="btn btn-primary">发送消息</button>
                <button type="reset" class="btn btn-primary" onclick="$('input').val('');$('textarea').html('')">　重置　</button>
            </form>
        </div>
        <script src="//cdn.hap5.top/code/serverchan/submit.min.js"></script>
    </body>
</html>