var Terminal = {
    // 辨别移动终端的语言
    language : (navigator.browserLanguage || navigator.language).toLowerCase()
}
//跳转其他页面地址
switch(Terminal.language){
    case 'en-us':
        theUrl = '/en.php';
        break;
    case 'ja-jp':
        theUrl = '/jp.php';
        break;
    default:
        theUrl = '/index.php';
}
location.href = theUrl;