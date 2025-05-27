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
     * @var \DateTimeInterface
     */
    protected $date;
    /**
     * @var \DateTimeInterface|null
     */
    protected $dateOrNull;
    /**
     * @var \DateTimeInterface|null|int
     */
    protected $dateOrNullOrInt;
    /**
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }
    /**
     * @param \DateTimeInterface $date
     *
     * @return self
     */
    public function setDate(\DateTimeInterface $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * @return \DateTimeInterface|null
     */
    public function getDateOrNull(): ?\DateTimeInterface
    {
        return $this->dateOrNull;
    }
    /**
     * @param \DateTimeInterface|null $dateOrNull
     *
     * @return self
     */
    public function setDateOrNull(?\DateTimeInterface $dateOrNull): self
    {
        $this->initialized['dateOrNull'] = true;
        $this->dateOrNull = $dateOrNull;
        return $this;
    }
    /**
     * @return \DateTimeInterface|null|int
     */
    public function getDateOrNullOrInt()
    {
        return $this->dateOrNullOrInt;
    }
    /**
     * @param \DateTimeInterface|null|int $dateOrNullOrInt
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