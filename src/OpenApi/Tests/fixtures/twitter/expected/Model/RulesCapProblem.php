<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class RulesCapProblem
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $detail;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDetail() : string
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail(string $detail) : self
    {
        $this->detail = $detail;
        return $this;
    }
}