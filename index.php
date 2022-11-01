<?php 

require_once "../cowsay/vendor/autoload.php";

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$bessie->setEyes('oO');
$bessie->setTongue('U');
$bessie->setPoop('@@@');
$bessie->setUdder('W');
$output = $bessie->say();

var_dump($output);
