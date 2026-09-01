<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppRouteSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * (Deprecated - Use Ingress Rules instead). An HTTP path prefix. Paths must start with / and must be unique across all components within an app.
     *
     * @var string
     */
    public string $path;
    /**
     * An optional flag to preserve the path that is forwarded to the backend service. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If this value is `true`, the path will remain `/api/list`.
     *
     * @var bool
     */
    public bool $preservePathPrefix;
    public function definedProperties(): array
    {
        return ['path' => 'path', 'preservePathPrefix' => 'preserve_path_prefix'];
    }
}