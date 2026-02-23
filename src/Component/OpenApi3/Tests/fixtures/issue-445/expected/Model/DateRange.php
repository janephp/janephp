<?php

namespace PicturePark\API\Model;

class DateRange
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
     * Language specific range names.
     *
     * @var array<string, string>|null
     */
    protected $names;
    /**
     * The from value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @var string|null
     */
    protected $from;
    /**
     * The to value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @var string|null
     */
    protected $to;
    /**
     * Language specific range names.
     *
     * @return array<string, string>|null
     */
    public function getNames(): ?iterable
    {
        return $this->names;
    }
    /**
     * Language specific range names.
     *
     * @param array<string, string>|null $names
     *
     * @return self
     */
    public function setNames(?iterable $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * The from value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * The from value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * The to value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * The to value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}