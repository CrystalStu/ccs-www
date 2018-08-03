<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosansjp.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosanstc.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosanssc.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">
        <link rel="stylesheet" href="serverchan.min.css" type="text/css" />
        <link rel="stylesheet" href="//cdn.hap5.top/code/serverchan/tip.min.css" type="text/css" />
		<link rel="shortcut icon" href="//cdn.hap5.top/photo/ico.png">
        <link rel="bookmark" href="//cdn.hap5.top/photo/ico.png">
    </head>

    <body>
        <div id="form-bg" style="">
            <form role="form" action="sc.php" method="post" id="send_form" class="well">
                <h4 style="text-align: center;margin-top: 0 !important;">参加の申込書</h4>
                <div class="form-group">
                    <label for="text">あなたのGit名前とタイトル</label>
                    <input type="text" class="form-control" id="text" name="text" placeholder="{GIT NAME} + REQUEST TO JOIN CCS" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>
                <div class="form-group">
                    <label for="contact">連絡先</label>
                    <input type="email" class="form-control" id="contact" name="contact" placeholder="メール・ライン" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>
                <div class="form-group">
                    <label for="desp">申込書</label>
                    <textarea class="form-control" id="desp" row="3" placeholder="" name="desp" required></textarea>
                </div>
                <button type="submit" id="submit-btn" class="btn btn-primary">	申し出る</button>
                <button type="reset" class="btn btn-primary" onclick="$('input').val('');$('textarea').html('')">リセット</button>
            </form>
        </div>
        <script src="//cdn.hap5.top/code/serverchan/submit.min.js"></script>
    </body>
</html>
