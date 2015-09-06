<?php

if (isset($_POST['action']) && !empty($_POST['action'])) {
	$action = $_POST['action'];
	switch ($_POST['action']) {
	case 'sdvig':
		$res = sdvig($_POST['text']);
		echo $res;
		break;
	case 'zamena':
		$res = zamena($_POST['text']);
		echo $res;
		break;
	}
}

function sdvig($text) {
	$num = 3;
	$result = '';
	for ($x = 0; $x < strlen($text); $x++) {
		$y = ord(substr($text, $x, 1)) - $num;
		if ($y < $num) {
			$y = 255 - $num;
		}

		$result = $result . chr($y);
	}
	return $result;
}

function zamena($text) {
	for ($i = 32; $i <= 126; $i++) {
		$slovar2 .= chr($i);
	}
	for ($i = 126; $i >= 32; $i--) {
		$slovar .= chr($i);
	}
	$len = strlen($text);
	for ($i = 0; $i < $len; $i++) {
		$pos1 = strpos($slovar, $text[$i]);
		$res .= $slovar2[$pos1];
	}
	return $res;

}