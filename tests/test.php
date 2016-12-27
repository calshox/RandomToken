<?php


require_once __DIR__ . "/../vendor/autoload.php";

use Shox\RandomToken;

echo RandomToken::generate(8, RandomToken::UPPERCASE);