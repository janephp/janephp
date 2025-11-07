<?php

namespace Jane\Generated\DigitalOcean\Model;

class ActionLink extends \ArrayObject
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
     * A unique numeric ID that can be used to identify and reference an action.
     *
     * @var int
     */
    protected $id;
    /**
     * A string specifying the type of the related action.
     *
     * @var string
     */
    protected $rel;
    /**
     * A URL that can be used to access the action.
     *
     * @var string
     */
    protected $href;
    /**
     * A unique numeric ID that can be used to identify and reference an action.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * A unique numeric ID that can be used to identify and reference an action.
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
     * A string specifying the type of the related action.
     *
     * @return string
     */
    public function getRel(): string
    {
        return $this->rel;
    }
    /**
     * A string specifying the type of the related action.
     *
     * @param string $rel
     *
     * @return self
     */
    public function setRel(string $rel): self
    {
        $this->initialized['rel'] = true;
        $this->rel = $rel;
        return $this;
    }
    /**
     * A URL that can be used to access the action.
     *
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }
    /**
     * A URL that can be used to access the action.
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->initialized['href'] = true;
        $this->href = $href;
        return $this;
    }
}