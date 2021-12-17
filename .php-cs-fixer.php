<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('src/Component/JsonSchema/JsonSchema')
    ->exclude('src/Component/JsonSchema/Tests/fixtures')
    ->exclude('src/Component/JsonSchema/Tests/generated')
    ->exclude('src/Component/OpenApi2/JsonSchema')
    ->exclude('src/Component/OpenApi2/Tests/fixtures')
    ->exclude('src/Component/OpenApi2/Tests/client/generated')
    ->exclude('src/Component/OpenApi3/JsonSchema')
    ->exclude('src/Component/OpenApi3/Tests/fixtures')
    ->exclude('src/Component/OpenApi3/Tests/client/generated')
    ->exclude('src/Component/AutoMapper/Tests/cache')
    ->exclude('src/Bundle/AutoMapperBundle/Tests/Resources')
    ->exclude('src/Bundle/JsonSchemaBundle/Tests/Resources')
    ->exclude('src/Bundle/OpenApiBundle/Tests/Resources')
    ->exclude('cache')
    ->notPath('src/Bundle/AutoMapperBundle/DependencyInjection/Configuration.php')
    ->in(__DIR__)
    ->append([
        __FILE__,
    ])
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP71Migration' => true,
        '@PhpCsFixer' => true,
        'php_unit_internal_class' => false, // From @PhpCsFixer but we don't want it
        'php_unit_test_class_requires_covers' => false, // From @PhpCsFixer but we don't want it
        'phpdoc_add_missing_param_annotation' => false, // From @PhpCsFixer but we don't want it
        'concat_space' => ['spacing' => 'one'],
        'ordered_class_elements' => true, // Symfony(PSR12) override the default value, but we don't want
        'blank_line_before_statement' => true, // Symfony(PSR12) override the default value, but we don't want
        'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
    ])
    ->setFinder($finder)
;
