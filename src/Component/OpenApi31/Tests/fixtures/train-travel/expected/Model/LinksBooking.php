<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class LinksBooking
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
     * @var string
     */
    protected $booking;
    /**
     * @return string
     */
    public function getBooking(): string
    {
        return $this->booking;
    }
    /**
     * @param string $booking
     *
     * @return self
     */
    public function setBooking(string $booking): self
    {
        $this->initialized['booking'] = true;
        $this->booking = $booking;
        return $this;
    }
}