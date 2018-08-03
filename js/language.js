function changeLang() {
  var langSelector = document.getElementById("langSelector");
  switch(langSelector.value){
    case 'not':
      break;
    default:
      if(lang != langSelector.value) location.href = "./changeLang.php?lang=" + langSelector.value + "&target=" + document.URL;
      break;
  }
}
