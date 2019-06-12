<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Fuz
{
    /**
     * A description
     *
     * @var string
     */
    protected $bar;
    /**
     * A description
     *
     * @return string|null
     */
    public function getBar() : ?string
    {
        return $this->bar;
    }
    /**
     * A description
     *
     * @param string|null $bar
     *
     * @return self
     */
    public function setBar(?string $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
}