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
    ->exclude('Component/AutoMapper/Tests/cache')
    ->notPath('Component/AutoMapper/Tests/Fixtures/AddressType.php') // should be removed once PHP 8.1 is minimal req
    ->notPath('Bundle/AutoMapperBundle/Tests/Fixtures/SomeEnum.php') // should be removed once PHP 8.1 is minimal req
    ->exclude('Bundle/AutoMapperBundle/Tests/Resources')
    ->exclude('Bundle/JsonSchemaBundle/Tests/Resources')
    ->exclude('Bundle/OpenApiBundle/Tests/Resources')
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
