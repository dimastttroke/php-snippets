<?php

//Если браузер открыли в IE11
if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE')!==false || strpos($_SERVER['HTTP_USER_AGENT'],'rv:11.0')!==false) {...}

//Оставить только цифры в номере телефона
function onlyNumbers($string) {
	$string = strval($string);
	$result = preg_replace("/[^0-9]/", '', $string);
}

//Из UTF-8 кодировки в Windows-1251
iconv("utf-8", "windows-1251", $string);
