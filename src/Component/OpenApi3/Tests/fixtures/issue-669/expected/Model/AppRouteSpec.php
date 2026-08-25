<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppRouteSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * (Deprecated - Use Ingress Rules instead). An HTTP path prefix. Paths must start with / and must be unique across all components within an app.
     *
     * @var string
     */
    protected $path;
    /**
     * An optional flag to preserve the path that is forwarded to the backend service. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If this value is `true`, the path will remain `/api/list`.
     *
     * @var bool
     */
    protected $preservePathPrefix;
    /**
     * (Deprecated - Use Ingress Rules instead). An HTTP path prefix. Paths must start with / and must be unique across all components within an app.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    /**
     * (Deprecated - Use Ingress Rules instead). An HTTP path prefix. Paths must start with / and must be unique across all components within an app.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * An optional flag to preserve the path that is forwarded to the backend service. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If this value is `true`, the path will remain `/api/list`.
     *
     * @return bool
     */
    public function getPreservePathPrefix(): bool
    {
        return $this->preservePathPrefix;
    }
    /**
     * An optional flag to preserve the path that is forwarded to the backend service. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If this value is `true`, the path will remain `/api/list`.
     *
     * @param bool $preservePathPrefix
     *
     * @return self
     */
    public function setPreservePathPrefix(bool $preservePathPrefix): self
    {
        $this->initialized['preservePathPrefix'] = true;
        $this->preservePathPrefix = $preservePathPrefix;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['path' => ['path', 'getPath', 'setPath'], 'preservePathPrefix' => ['preserve_path_prefix', 'getPreservePathPrefix', 'setPreservePathPrefix']];
    }
}