# OpenApi Bundle

The component ships a Bundle to allow a quick integration with Symfony for the OpenApiCommon component of Jane.
To use it, you just have to add the main bundle class to your `config/bundles.php` file.
```
return [
    // ...
    Jane\Bundle\OpenApiBundle\JaneOpenApiBundle::class => ['dev' => true],
];
```
