<?php

function getMD($str) {
    if (substr($str, 0, 1) == "0") return substr($str, 1, 1);
    return $str;
}

function getEnMon($mon) {
    switch($mon) {
        case 1:
            return "January";
        case 2:
            return "February";
        case 3:
            return "March";
        case 4:
            return "April";
        case 5:
            return "May";
        case 6:
            return "June";
        case 7:
            return "July";
        case 8:
            return "August";
        case 9:
            return "September";
        case 10:
            return "October";
        case 11:
            return "November";
        case 12:
            return "December";
    }
}

function getChangeDate($lang) {
    $changeDate = file_get_contents("../changeDate.php");
    switch($lang) {
        case "en":
            return getEnMon(substr($changeDate, 4, 2)) . " " . getMD(substr($changeDate, 6, 2)) . ", " . substr($changeDate, 0, 4);
        case "ja":
            return substr($changeDate, 0, 4) . "年" . getMD(substr($changeDate, 4, 2)) . "月" . getMD(substr($changeDate, 6, 2)) . "日";
        case "zh":
            return substr($changeDate, 0, 4) . "年" . getMD(substr($changeDate, 4, 2)) . "月" . getMD(substr($changeDate, 6, 2)) . "日";
    }
}