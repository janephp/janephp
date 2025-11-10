<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneTimezoneSetting
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
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @var string
     */
    protected $systemTimezone;
    /**
     * @var ZoneCustomizedTimeZone
     */
    protected $customizedTimezone;
    /**
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @return string
     */
    public function getSystemTimezone(): string
    {
        return $this->systemTimezone;
    }
    /**
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @param string $systemTimezone
     *
     * @return self
     */
    public function setSystemTimezone(string $systemTimezone): self
    {
        $this->initialized['systemTimezone'] = true;
        $this->systemTimezone = $systemTimezone;
        return $this;
    }
    /**
     * @return ZoneCustomizedTimeZone
     */
    public function getCustomizedTimezone(): ZoneCustomizedTimeZone
    {
        return $this->customizedTimezone;
    }
    /**
     * @param ZoneCustomizedTimeZone $customizedTimezone
     *
     * @return self
     */
    public function setCustomizedTimezone(ZoneCustomizedTimeZone $customizedTimezone): self
    {
        $this->initialized['customizedTimezone'] = true;
        $this->customizedTimezone = $customizedTimezone;
        return $this;
    }
}