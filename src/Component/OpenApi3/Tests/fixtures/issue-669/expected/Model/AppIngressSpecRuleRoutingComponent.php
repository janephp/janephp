<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpecRuleRoutingComponent implements AdditionalPropertiesInterface
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
     * The name of the component to route to.
     *
     * @var string
     */
    protected $name;
    /**
     * An optional flag to preserve the path that is forwarded to the backend service. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If this value is `true`, the path will remain `/api/list`. Note: this is not applicable for Functions Components and is mutually exclusive with `rewrite`.
     *
     * @var string
     */
    protected $preservePathPrefix;
    /**
     * An optional field that will rewrite the path of the component to be what is specified here. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If you specified the rewrite to be `/v1/`, requests to `/api/list` would be rewritten to `/v1/list`. Note: this is mutually exclusive with `preserve_path_prefix`.
     *
     * @var string
     */
    protected $rewrite;
    /**
     * The name of the component to route to.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the component to route to.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * An optional flag to preserve the path that is forwarded to the backend service. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If this value is `true`, the path will remain `/api/list`. Note: this is not applicable for Functions Components and is mutually exclusive with `rewrite`.
     *
     * @return string
     */
    public function getPreservePathPrefix(): string
    {
        return $this->preservePathPrefix;
    }
    /**
     * An optional flag to preserve the path that is forwarded to the backend service. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If this value is `true`, the path will remain `/api/list`. Note: this is not applicable for Functions Components and is mutually exclusive with `rewrite`.
     *
     * @param string $preservePathPrefix
     *
     * @return self
     */
    public function setPreservePathPrefix(string $preservePathPrefix): self
    {
        $this->initialized['preservePathPrefix'] = true;
        $this->preservePathPrefix = $preservePathPrefix;
        return $this;
    }
    /**
     * An optional field that will rewrite the path of the component to be what is specified here. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If you specified the rewrite to be `/v1/`, requests to `/api/list` would be rewritten to `/v1/list`. Note: this is mutually exclusive with `preserve_path_prefix`.
     *
     * @return string
     */
    public function getRewrite(): string
    {
        return $this->rewrite;
    }
    /**
     * An optional field that will rewrite the path of the component to be what is specified here. By default, the HTTP request path will be trimmed from the left when forwarded to the component. For example, a component with `path=/api` will have requests to `/api/list` trimmed to `/list`. If you specified the rewrite to be `/v1/`, requests to `/api/list` would be rewritten to `/v1/list`. Note: this is mutually exclusive with `preserve_path_prefix`.
     *
     * @param string $rewrite
     *
     * @return self
     */
    public function setRewrite(string $rewrite): self
    {
        $this->initialized['rewrite'] = true;
        $this->rewrite = $rewrite;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'preservePathPrefix' => ['preserve_path_prefix', 'getPreservePathPrefix', 'setPreservePathPrefix'], 'rewrite' => ['rewrite', 'getRewrite', 'setRewrite']];
    }
}