<?php

namespace Docker\Api\Model;

class SecretsCreatePostBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * User-defined name of the secret.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
    * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5))
    data to store as secret.
    
    This field is only used to _create_ a secret, and is not returned by
    other endpoints.
    
    *
    * @var string
    */
    protected $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $driver;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $templating;
    /**
     * User-defined name of the secret.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * User-defined name of the secret.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
    * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5))
    data to store as secret.
    
    This field is only used to _create_ a secret, and is not returned by
    other endpoints.
    
    *
    * @return string
    */
    public function getData() : string
    {
        return $this->data;
    }
    /**
    * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5))
    data to store as secret.
    
    This field is only used to _create_ a secret, and is not returned by
    other endpoints.
    
    *
    * @param string $data
    *
    * @return self
    */
    public function setData(string $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @return Driver
     */
    public function getDriver() : Driver
    {
        return $this->driver;
    }
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @param Driver $driver
     *
     * @return self
     */
    public function setDriver(Driver $driver) : self
    {
        $this->initialized['driver'] = true;
        $this->driver = $driver;
        return $this;
    }
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @return Driver
     */
    public function getTemplating() : Driver
    {
        return $this->templating;
    }
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @param Driver $templating
     *
     * @return self
     */
    public function setTemplating(Driver $templating) : self
    {
        $this->initialized['templating'] = true;
        $this->templating = $templating;
        return $this;
    }
}