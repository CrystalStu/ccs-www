function changeLang() {
  var langSelector = document.getElementById("langSelector");
  switch(langSelector.value){
    case 'not':
      break;
    default:
      if(lang != langSelector.value) location.href = "/changeLang.php?lang=" + langSelector.value + "&target=" + document.URL;
      break;
  }
}
function changeLang_newDesign_en() {
  location.href = "/changeLang.php?lang=en&target=" + document.URL;
}
function changeLang_newDesign_zh() {
  location.href = "/changeLang.php?lang=zh&target=" + document.URL;
}
function changeLang_newDesign_ja() {
  location.href = "/changeLang.php?lang=ja&target=" + document.URL;
}
