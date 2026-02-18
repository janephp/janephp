<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadioConfigAp
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
     * @var RadioRadio24gAp
     */
    protected $radio24g;
    /**
     * @var RadioRadio5gAp
     */
    protected $radio5g;
    /**
     * @var RadioRadio5gAp
     */
    protected $radio5gUpper;
    /**
     * @var RadioRadio5gAp
     */
    protected $radio5gLower;
    /**
     * @var RadioRadio6gAp
     */
    protected $radio6g;
    /**
     * @var bool
     */
    protected $dual5gEnabled;
    /**
     * @return RadioRadio24gAp
     */
    public function getRadio24g(): RadioRadio24gAp
    {
        return $this->radio24g;
    }
    /**
     * @param RadioRadio24gAp $radio24g
     *
     * @return self
     */
    public function setRadio24g(RadioRadio24gAp $radio24g): self
    {
        $this->initialized['radio24g'] = true;
        $this->radio24g = $radio24g;
        return $this;
    }
    /**
     * @return RadioRadio5gAp
     */
    public function getRadio5g(): RadioRadio5gAp
    {
        return $this->radio5g;
    }
    /**
     * @param RadioRadio5gAp $radio5g
     *
     * @return self
     */
    public function setRadio5g(RadioRadio5gAp $radio5g): self
    {
        $this->initialized['radio5g'] = true;
        $this->radio5g = $radio5g;
        return $this;
    }
    /**
     * @return RadioRadio5gAp
     */
    public function getRadio5gUpper(): RadioRadio5gAp
    {
        return $this->radio5gUpper;
    }
    /**
     * @param RadioRadio5gAp $radio5gUpper
     *
     * @return self
     */
    public function setRadio5gUpper(RadioRadio5gAp $radio5gUpper): self
    {
        $this->initialized['radio5gUpper'] = true;
        $this->radio5gUpper = $radio5gUpper;
        return $this;
    }
    /**
     * @return RadioRadio5gAp
     */
    public function getRadio5gLower(): RadioRadio5gAp
    {
        return $this->radio5gLower;
    }
    /**
     * @param RadioRadio5gAp $radio5gLower
     *
     * @return self
     */
    public function setRadio5gLower(RadioRadio5gAp $radio5gLower): self
    {
        $this->initialized['radio5gLower'] = true;
        $this->radio5gLower = $radio5gLower;
        return $this;
    }
    /**
     * @return RadioRadio6gAp
     */
    public function getRadio6g(): RadioRadio6gAp
    {
        return $this->radio6g;
    }
    /**
     * @param RadioRadio6gAp $radio6g
     *
     * @return self
     */
    public function setRadio6g(RadioRadio6gAp $radio6g): self
    {
        $this->initialized['radio6g'] = true;
        $this->radio6g = $radio6g;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDual5gEnabled(): bool
    {
        return $this->dual5gEnabled;
    }
    /**
     * @param bool $dual5gEnabled
     *
     * @return self
     */
    public function setDual5gEnabled(bool $dual5gEnabled): self
    {
        $this->initialized['dual5gEnabled'] = true;
        $this->dual5gEnabled = $dual5gEnabled;
        return $this;
    }
}