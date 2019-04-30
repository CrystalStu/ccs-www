<?php
if(!$_COOKIE["lang"]) {
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  switch ($lang){
      case "zh":
        setcookie("lang", "zh");
        header("Refresh:0");
        break;
      case "ja":
        setcookie("lang", "ja");
        header("Refresh:0");
        break;
      default:
        setcookie("lang", "en");
        header("Refresh:0");
        break;
  }
} else {
  switch ($_COOKIE["lang"]) {
    case "zh":
      include("index_zh.php");
      break;
    case "ja":
      include("index_ja.php");
      break;
    default:
      include("index_en.php");
      break;
  }  
}
