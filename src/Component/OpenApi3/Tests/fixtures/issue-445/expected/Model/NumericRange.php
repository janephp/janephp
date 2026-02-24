<?php

namespace PicturePark\API\Model;

class NumericRange
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
     * @var mixed|null
     */
    protected $names;
    /**
     * The from value.
     *
     * @var float|null
     */
    protected $from;
    /**
     * The to value.
     *
     * @var float|null
     */
    protected $to;
    /**
     * Language specific range names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific range names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * The from value.
     *
     * @return float|null
     */
    public function getFrom(): ?float
    {
        return $this->from;
    }
    /**
     * The from value.
     *
     * @param float|null $from
     *
     * @return self
     */
    public function setFrom(?float $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * The to value.
     *
     * @return float|null
     */
    public function getTo(): ?float
    {
        return $this->to;
    }
    /**
     * The to value.
     *
     * @param float|null $to
     *
     * @return self
     */
    public function setTo(?float $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}