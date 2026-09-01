# OpenApi Bundle

The component ships a Bundle to allow a quick integration with Symfony for the OpenApiCommon component of Jane.

**Note**: If you use Symfony Flex, the configuration is automatic

To use it, you just have to add the main bundle class to your `config/bundles.php` file.
```
return [
    // ...
    Jane\Bundle\OpenApiBundle\JaneOpenApiBundle::class => ['dev' => true],
];
```

## Usage

Once the bundle is registered, the generation command is available in your Symfony console:

```bash
php bin/console jane:open-api:generate
```

By default, the command looks for your Jane configuration at `config/jane/open-api.php` relative to your project
directory (the legacy `config/jane/open_api.php` path is also supported) and falls back to a `.jane-openapi` file in
the current working directory. Use the `--config-file` (`-c`) option to point to another configuration file:

```bash
php bin/console jane:open-api:generate --config-file=config/jane/open-api.php
```

The configuration file format is documented in the "Configuration file" section of the OpenAPI documentation.
