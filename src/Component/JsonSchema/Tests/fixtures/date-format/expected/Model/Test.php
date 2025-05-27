<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
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
     * @var \DateTime
     */
    protected $date;
    /**
     * @var \DateTime|null
     */
    protected $dateOrNull;
    /**
     * @var \DateTime|null|int
     */
    protected $dateOrNullOrInt;
    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
    /**
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getDateOrNull(): ?\DateTime
    {
        return $this->dateOrNull;
    }
    /**
     * @param \DateTime|null $dateOrNull
     *
     * @return self
     */
    public function setDateOrNull(?\DateTime $dateOrNull): self
    {
        $this->initialized['dateOrNull'] = true;
        $this->dateOrNull = $dateOrNull;
        return $this;
    }
    /**
     * @return \DateTime|null|int
     */
    public function getDateOrNullOrInt()
    {
        return $this->dateOrNullOrInt;
    }
    /**
     * @param \DateTime|null|int $dateOrNullOrInt
     *
     * @return self
     */
    public function setDateOrNullOrInt($dateOrNullOrInt): self
    {
        $this->initialized['dateOrNullOrInt'] = true;
        $this->dateOrNullOrInt = $dateOrNullOrInt;
        return $this;
    }
}