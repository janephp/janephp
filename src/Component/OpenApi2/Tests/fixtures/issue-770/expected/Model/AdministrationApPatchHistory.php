<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationApPatchHistory
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
     * startDateTime of the AP Patch history
     *
     * @var string
     */
    protected $startDateTime;
    /**
     * file name of the AP Patch history
     *
     * @var string
     */
    protected $fileName;
    /**
     * apFwVersion of the AP Patch history
     *
     * @var string
     */
    protected $apFwVersion;
    /**
     * AP Models of the AP Patch history
     *
     * @var list<string>
     */
    protected $apModelList;
    /**
     * startDateTime of the AP Patch history
     *
     * @return string
     */
    public function getStartDateTime(): string
    {
        return $this->startDateTime;
    }
    /**
     * startDateTime of the AP Patch history
     *
     * @param string $startDateTime
     *
     * @return self
     */
    public function setStartDateTime(string $startDateTime): self
    {
        $this->initialized['startDateTime'] = true;
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * file name of the AP Patch history
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * file name of the AP Patch history
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * apFwVersion of the AP Patch history
     *
     * @return string
     */
    public function getApFwVersion(): string
    {
        return $this->apFwVersion;
    }
    /**
     * apFwVersion of the AP Patch history
     *
     * @param string $apFwVersion
     *
     * @return self
     */
    public function setApFwVersion(string $apFwVersion): self
    {
        $this->initialized['apFwVersion'] = true;
        $this->apFwVersion = $apFwVersion;
        return $this;
    }
    /**
     * AP Models of the AP Patch history
     *
     * @return list<string>
     */
    public function getApModelList(): array
    {
        return $this->apModelList;
    }
    /**
     * AP Models of the AP Patch history
     *
     * @param list<string> $apModelList
     *
     * @return self
     */
    public function setApModelList(array $apModelList): self
    {
        $this->initialized['apModelList'] = true;
        $this->apModelList = $apModelList;
        return $this;
    }
}