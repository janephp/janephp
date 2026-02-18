<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneRogue
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
     * Report type
     *
     * @var string
     */
    protected $reportType;
    /**
     * Malicious type when reportType is Malicious
     *
     * @var list<string>
     */
    protected $maliciousTypes;
    /**
     * Protection enabled
     *
     * @var bool
     */
    protected $protectionEnabled;
    /**
     * Report type
     *
     * @return string
     */
    public function getReportType(): string
    {
        return $this->reportType;
    }
    /**
     * Report type
     *
     * @param string $reportType
     *
     * @return self
     */
    public function setReportType(string $reportType): self
    {
        $this->initialized['reportType'] = true;
        $this->reportType = $reportType;
        return $this;
    }
    /**
     * Malicious type when reportType is Malicious
     *
     * @return list<string>
     */
    public function getMaliciousTypes(): array
    {
        return $this->maliciousTypes;
    }
    /**
     * Malicious type when reportType is Malicious
     *
     * @param list<string> $maliciousTypes
     *
     * @return self
     */
    public function setMaliciousTypes(array $maliciousTypes): self
    {
        $this->initialized['maliciousTypes'] = true;
        $this->maliciousTypes = $maliciousTypes;
        return $this;
    }
    /**
     * Protection enabled
     *
     * @return bool
     */
    public function getProtectionEnabled(): bool
    {
        return $this->protectionEnabled;
    }
    /**
     * Protection enabled
     *
     * @param bool $protectionEnabled
     *
     * @return self
     */
    public function setProtectionEnabled(bool $protectionEnabled): self
    {
        $this->initialized['protectionEnabled'] = true;
        $this->protectionEnabled = $protectionEnabled;
        return $this;
    }
}