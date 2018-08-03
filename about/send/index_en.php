<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Server Chat</title>
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
                <h4 style="text-align: center;margin-top: 0 !important;">Application</h4>
                <div class="form-group">
                    <label for="text">Your Git Name And Title</label>
                    <input type="text" class="form-control" id="text" name="text" placeholder="{GIT NAME} + REQUEST TO JOIN CCS" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Information</label>
                    <input type="email" class="form-control" id="contact" name="contact" placeholder="Your E-mail address" onkeydown="if(event.keyCode==13) return false;" value="" required>
                </div>
                <div class="form-group">
                    <label for="desp">The Application of Crystal Studio</label>
                    <textarea class="form-control" id="desp" row="3" placeholder="Supporting Mark Down" name="desp" required></textarea>
                </div>
                <button type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary" onclick="$('input').val('');$('textarea').html('')">Reset</button>
            </form>
        </div>
        <script src="//cdn.hap5.top/code/serverchan/submit.min.js"></script>
    </body>
</html>

