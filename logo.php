<?php
/*
 * Forms
 */
$cloud = "m90 230
	c0 0 0 -125 165 -125
	c0 0 158 0 150 87
	c0 0 3 -2 15 -2
	c0 0 110 0 110 105
	c0 0 0 110 -110 105
	l-330 0
	c0 0 -75 0 -75 -85
	c0 0 0 -75 75 -85
	z";

$innerCast = "m420 130
	c0 0 167 0 167 167
	l-32 0
	c0 0 0 -135 -135 -135
	z";

$middleCast = "m420 68
	c0 0 229 0 229 229
	l-32 0
	c0 0 0 -197 -197 -197
	z";

$outerCast = "m420 6
	c0 0 291 0 291 291
	l-32 0
	c0 0 0 -259 -259 -259
	z";

$default = array(
	'cloud' => '#fff',
	'cast' => '#e69138',
	'outline' => true
);

$light = array(
	'cloud' => '#222',
	'cast' => '#cf8232',
	'outline' => false
);

$dark = array(
	'cloud' => '#fff',
	'cast2' => '#e89c4b',
	'cast' => '#0099cc',
	'outline' => false
);

header('Content-type: image/svg+xml');

if ($_GET['schema'] == "light"){
	$default = $light;
} elseif ($_GET['schema'] == "dark"){
	$default = $dark;
}

include 'logo.php.svg';
