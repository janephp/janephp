<?php

$dirs = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/fixtures')
;

return PhpCsFixer\Config::create()
    ->setFinder($dirs)
;
