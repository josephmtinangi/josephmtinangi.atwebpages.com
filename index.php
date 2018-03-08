<?php

require 'vendor/autoload.php';

use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;
use Sinergi\BrowserDetector\Device;
use Sinergi\BrowserDetector\Language;

$browser = new Browser();
$os = new Os();
$device = new Device();
$language = new Language();

$data = [
	'browser' => [
		'name' => $browser->getName(),
		'version' => $browser->getVersion(),
	],
	'os' => [
		'name' => $os->getName(),
		'version' => $os->getVersion(),
	],
	'device' => [
		'name' => $device->getName(),
	],
	'language' => [
		'language' => $language->getLanguage(),
	],
	'network' => [
		'ipAddress' => $_SERVER['REMOTE_ADDR'],
	],
];

include "index.view.php";
