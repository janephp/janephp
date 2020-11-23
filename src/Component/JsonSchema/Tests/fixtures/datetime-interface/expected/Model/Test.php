<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var \DateTimeInterface
     */
    protected $date;
    /**
     * 
     *
     * @var \DateTimeInterface|null
     */
    protected $dateOrNull;
    /**
     * 
     *
     * @var \DateTimeInterface|null|int
     */
    protected $dateOrNullOrInt;
    /**
     * 
     *
     * @return \DateTimeInterface
     */
    public function getDate() : \DateTimeInterface
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTimeInterface $date
     *
     * @return self
     */
    public function setDate(\DateTimeInterface $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTimeInterface|null
     */
    public function getDateOrNull() : ?\DateTimeInterface
    {
        return $this->dateOrNull;
    }
    /**
     * 
     *
     * @param \DateTimeInterface|null $dateOrNull
     *
     * @return self
     */
    public function setDateOrNull(?\DateTimeInterface $dateOrNull) : self
    {
        $this->dateOrNull = $dateOrNull;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTimeInterface|null|int
     */
    public function getDateOrNullOrInt()
    {
        return $this->dateOrNullOrInt;
    }
    /**
     * 
     *
     * @param \DateTimeInterface|null|int $dateOrNullOrInt
     *
     * @return self
     */
    public function setDateOrNullOrInt($dateOrNullOrInt) : self
    {
        $this->dateOrNullOrInt = $dateOrNullOrInt;
        return $this;
    }
}