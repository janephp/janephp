<?php

$dirs = PhpCsFixer\Finder::create()
    ->exclude('Component/JsonSchema/JsonSchema')
    ->exclude('Component/JsonSchema/Tests/fixtures')
    ->exclude('Component/JsonSchema/Tests/generated')
    ->exclude('Component/OpenApi2/JsonSchema')
    ->exclude('Component/OpenApi2/Tests/fixtures')
    ->exclude('Component/OpenApi2/Tests/client/generated')
    ->exclude('Component/OpenApi3/JsonSchema')
    ->exclude('Component/OpenApi3/Tests/fixtures')
    ->exclude('Component/OpenApi3/Tests/client/generated')
    ->exclude('Component/AutoMapper/Bundle/Tests/Resources')
    ->exclude('Component/AutoMapper/Tests/cache')
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
