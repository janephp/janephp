<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcPatchSignaturePackage
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
     * @var AvcCheckLatestInstallableSignaturePackageSettings
     */
    protected $checkLatestInstallableSettings;
    /**
     * @return AvcCheckLatestInstallableSignaturePackageSettings
     */
    public function getCheckLatestInstallableSettings(): AvcCheckLatestInstallableSignaturePackageSettings
    {
        return $this->checkLatestInstallableSettings;
    }
    /**
     * @param AvcCheckLatestInstallableSignaturePackageSettings $checkLatestInstallableSettings
     *
     * @return self
     */
    public function setCheckLatestInstallableSettings(AvcCheckLatestInstallableSignaturePackageSettings $checkLatestInstallableSettings): self
    {
        $this->initialized['checkLatestInstallableSettings'] = true;
        $this->checkLatestInstallableSettings = $checkLatestInstallableSettings;
        return $this;
    }
}