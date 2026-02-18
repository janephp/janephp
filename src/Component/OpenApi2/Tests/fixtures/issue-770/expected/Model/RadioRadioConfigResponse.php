<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadioConfigResponse
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
     * @var RadioRadio24gResponse
     */
    protected $radio24g;
    /**
     * @var RadioRadio5gResponse
     */
    protected $radio5g;
    /**
     * @var RadioRadio5gResponse
     */
    protected $radio5gUpper;
    /**
     * @var RadioRadio5gResponse
     */
    protected $radio5gLower;
    /**
     * @var RadioRadio6gResponse
     */
    protected $radio6g;
    /**
     * @var bool
     */
    protected $dual5gEnabled;
    /**
     * @return RadioRadio24gResponse
     */
    public function getRadio24g(): RadioRadio24gResponse
    {
        return $this->radio24g;
    }
    /**
     * @param RadioRadio24gResponse $radio24g
     *
     * @return self
     */
    public function setRadio24g(RadioRadio24gResponse $radio24g): self
    {
        $this->initialized['radio24g'] = true;
        $this->radio24g = $radio24g;
        return $this;
    }
    /**
     * @return RadioRadio5gResponse
     */
    public function getRadio5g(): RadioRadio5gResponse
    {
        return $this->radio5g;
    }
    /**
     * @param RadioRadio5gResponse $radio5g
     *
     * @return self
     */
    public function setRadio5g(RadioRadio5gResponse $radio5g): self
    {
        $this->initialized['radio5g'] = true;
        $this->radio5g = $radio5g;
        return $this;
    }
    /**
     * @return RadioRadio5gResponse
     */
    public function getRadio5gUpper(): RadioRadio5gResponse
    {
        return $this->radio5gUpper;
    }
    /**
     * @param RadioRadio5gResponse $radio5gUpper
     *
     * @return self
     */
    public function setRadio5gUpper(RadioRadio5gResponse $radio5gUpper): self
    {
        $this->initialized['radio5gUpper'] = true;
        $this->radio5gUpper = $radio5gUpper;
        return $this;
    }
    /**
     * @return RadioRadio5gResponse
     */
    public function getRadio5gLower(): RadioRadio5gResponse
    {
        return $this->radio5gLower;
    }
    /**
     * @param RadioRadio5gResponse $radio5gLower
     *
     * @return self
     */
    public function setRadio5gLower(RadioRadio5gResponse $radio5gLower): self
    {
        $this->initialized['radio5gLower'] = true;
        $this->radio5gLower = $radio5gLower;
        return $this;
    }
    /**
     * @return RadioRadio6gResponse
     */
    public function getRadio6g(): RadioRadio6gResponse
    {
        return $this->radio6g;
    }
    /**
     * @param RadioRadio6gResponse $radio6g
     *
     * @return self
     */
    public function setRadio6g(RadioRadio6gResponse $radio6g): self
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