<?php

$dirs = PhpCsFixer\Finder::create()
    ->exclude('JsonSchema/Normalizer')
    ->exclude('JsonSchema/Model')
    ->exclude('JsonSchema/Tests/fixtures')
    ->exclude('JsonSchema/Tests/generated')
    ->exclude('OpenApi/Normalizer')
    ->exclude('OpenApi/Model')
    ->exclude('OpenApi/Tests/fixtures')
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
