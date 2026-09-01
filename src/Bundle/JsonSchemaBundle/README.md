# JsonSchema Bundle

The component ships a Bundle to allow a quick integration with Symfony for the JsonSchema component of Jane.

**Note**: If you use Symfony Flex, the configuration is automatic

To use it, you just have to add the main bundle class to your `config/bundles.php` file.
```
return [
    // ...
    Jane\Bundle\JsonSchemaBundle\JaneJsonSchemaBundle::class => ['dev' => true],
];
```

## Usage

Once the bundle is registered, the generation command is available in your Symfony console:

```bash
php bin/console jane:json-schema:generate
```

By default, the command looks for your Jane configuration at `config/jane/json-schema.php` relative to your project
directory (the legacy `config/jane/json_schema.php` path is also supported) and falls back to a `.jane` file in the
current working directory. Use the `--config-file` (`-c`) option to point to another configuration file:

```bash
php bin/console jane:json-schema:generate --config-file=config/jane/json-schema.php
```

The configuration file format is documented in the "Configuration file" section of the JSON Schema documentation.
