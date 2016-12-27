<?php


require_once __DIR__ . "/../vendor/autoload.php";

use RandomToken\Token;

echo Token::generate(8, Token::UPPERCASE);