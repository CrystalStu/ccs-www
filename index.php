<?php
if(!$_COOKIE["lang"]) {
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 1);
  switch ($lang){
      case "zh":
        setcookie("lang", "zh");
        break;
      case "ja":
        setcookie("lang", "ja");
        break;
      default:
        setcookie("lang", "en");
        break;
  }
}
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
