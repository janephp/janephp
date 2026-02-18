<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class UrlFilteringUrlFilteringBlockCategory
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Identifier of the URL Filtering Category
     *
     * @var int
     */
    protected $id;
    /**
     * name of the URL Filtering Category
     *
     * @var string
     */
    protected $name;
    /**
     * Identifier of the URL Filtering Category
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Identifier of the URL Filtering Category
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * name of the URL Filtering Category
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * name of the URL Filtering Category
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
}