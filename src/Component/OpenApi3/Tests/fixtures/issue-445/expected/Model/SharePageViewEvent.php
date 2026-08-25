<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SharePageViewEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $shareToken;
    /**
     * @return string|null
     */
    public function getShareToken(): ?string
    {
        return $this->shareToken;
    }
    /**
     * @param string|null $shareToken
     *
     * @return self
     */
    public function setShareToken(?string $shareToken): self
    {
        $this->initialized['shareToken'] = true;
        $this->shareToken = $shareToken;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['shareToken' => ['shareToken', 'getShareToken', 'setShareToken']];
    }
}