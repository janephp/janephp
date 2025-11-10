<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcCheckLatestInstallableSignaturePackageSettings
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
     * Enable or disable the periodic check for latest installable signature package
     *
     * @var bool
     */
    protected $checkEnabled;
    /**
     * date of the month
     *
     * @var int
     */
    protected $dateOfMonth;
    /**
     * Enable or disable the periodic check for latest installable signature package
     *
     * @return bool
     */
    public function getCheckEnabled(): bool
    {
        return $this->checkEnabled;
    }
    /**
     * Enable or disable the periodic check for latest installable signature package
     *
     * @param bool $checkEnabled
     *
     * @return self
     */
    public function setCheckEnabled(bool $checkEnabled): self
    {
        $this->initialized['checkEnabled'] = true;
        $this->checkEnabled = $checkEnabled;
        return $this;
    }
    /**
     * date of the month
     *
     * @return int
     */
    public function getDateOfMonth(): int
    {
        return $this->dateOfMonth;
    }
    /**
     * date of the month
     *
     * @param int $dateOfMonth
     *
     * @return self
     */
    public function setDateOfMonth(int $dateOfMonth): self
    {
        $this->initialized['dateOfMonth'] = true;
        $this->dateOfMonth = $dateOfMonth;
        return $this;
    }
}