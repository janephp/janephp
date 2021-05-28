# JsonSchema Bundle

The component ships a Bundle to allow a quick integration with Symfony for the JsonSchema component of Jane.
To use it, you just have to add the main bundle class to your `config/bundles.php` file.
```
return [
    // ...
    Jane\Bundle\AutoMapper\JaneJsonSchemaBundle::class => ['dev' => true],
];
```
