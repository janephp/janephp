<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationOpenSearchSpecBasicAuth implements AdditionalPropertiesInterface
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
     * Username to authenticate with. Only required when `endpoint` is set.
     * Defaults to `doadmin` when `cluster_name` is set.
     *
     * @var string
     */
    protected $user;
    /**
     * Password for user defined in User. Is required when `endpoint` is set.
     * Cannot be set if using a DigitalOcean DBaaS OpenSearch cluster.
     *
     * @var string
     */
    protected $password;
    /**
     * Username to authenticate with. Only required when `endpoint` is set.
     * Defaults to `doadmin` when `cluster_name` is set.
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
    /**
    * Username to authenticate with. Only required when `endpoint` is set.
    Defaults to `doadmin` when `cluster_name` is set.
    *
    * @param string $user
    *
    * @return self
    */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * Password for user defined in User. Is required when `endpoint` is set.
     * Cannot be set if using a DigitalOcean DBaaS OpenSearch cluster.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
    * Password for user defined in User. Is required when `endpoint` is set.
    Cannot be set if using a DigitalOcean DBaaS OpenSearch cluster.
    *
    * @param string $password
    *
    * @return self
    */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['user' => ['user', 'getUser', 'setUser'], 'password' => ['password', 'getPassword', 'setPassword']];
    }
}