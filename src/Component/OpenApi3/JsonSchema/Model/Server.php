<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Server extends \ArrayObject
{
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var ServerVariable[]|null
     */
    protected $variables;
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return ServerVariable[]|null
     */
    public function getVariables() : ?iterable
    {
        return $this->variables;
    }
    /**
     * 
     *
     * @param ServerVariable[]|null $variables
     *
     * @return self
     */
    public function setVariables(?iterable $variables) : self
    {
        $this->variables = $variables;
        return $this;
    }
}