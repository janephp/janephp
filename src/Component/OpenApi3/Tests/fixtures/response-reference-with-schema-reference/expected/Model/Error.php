<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Error
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * An application-specific error code, expressed as a string value.
     *
     * @var string
     */
    protected $code;
    /**
     * A short, human-readable summary of the problem.
     *
     * @var string
     */
    protected $title;
    /**
     * An application-specific error code, expressed as a string value.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * An application-specific error code, expressed as a string value.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * A short, human-readable summary of the problem.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * A short, human-readable summary of the problem.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}