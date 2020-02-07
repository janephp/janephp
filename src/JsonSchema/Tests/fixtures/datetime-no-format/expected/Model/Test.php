<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dateOrNull;
    /**
     * 
     *
     * @var \DateTime|null|int
     */
    protected $dateOrNullOrInt;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDateOrNull() : ?\DateTime
    {
        return $this->dateOrNull;
    }
    /**
     * 
     *
     * @param \DateTime|null $dateOrNull
     *
     * @return self
     */
    public function setDateOrNull(?\DateTime $dateOrNull) : self
    {
        $this->dateOrNull = $dateOrNull;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null|int
     */
    public function getDateOrNullOrInt()
    {
        return $this->dateOrNullOrInt;
    }
    /**
     * 
     *
     * @param \DateTime|null|int $dateOrNullOrInt
     *
     * @return self
     */
    public function setDateOrNullOrInt($dateOrNullOrInt) : self
    {
        $this->dateOrNullOrInt = $dateOrNullOrInt;
        return $this;
    }
}