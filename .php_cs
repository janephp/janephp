<?php

$dirs = PhpCsFixer\Finder::create()
    ->exclude('JsonSchema/JsonSchema')
    ->exclude('JsonSchema/Tests/fixtures')
    ->exclude('JsonSchema/Tests/generated')
    ->exclude('OpenApi2/JsonSchema')
    ->exclude('OpenApi2/Tests/fixtures')
    ->exclude('OpenApi3/JsonSchema')
    ->exclude('OpenApi3/Tests/fixtures')
    ->exclude('AutoMapper/Bundle/Tests/Resources')
    ->exclude('AutoMapper/Tests/cache')
    ->exclude('cache')
    ->in(__DIR__ . '/src')
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'yoda_style' => null,
    ])
    ->setFinder($dirs)
;
