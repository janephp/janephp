<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ScimV2OrganizationsOrgUsersPostBodyName implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $givenName;
    /**
     * @var string
     */
    protected $familyName;
    /**
     * @return string
     */
    public function getGivenName(): string
    {
        return $this->givenName;
    }
    /**
     * @param string $givenName
     *
     * @return self
     */
    public function setGivenName(string $givenName): self
    {
        $this->initialized['givenName'] = true;
        $this->givenName = $givenName;
        return $this;
    }
    /**
     * @return string
     */
    public function getFamilyName(): string
    {
        return $this->familyName;
    }
    /**
     * @param string $familyName
     *
     * @return self
     */
    public function setFamilyName(string $familyName): self
    {
        $this->initialized['familyName'] = true;
        $this->familyName = $familyName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['givenName' => ['givenName', 'getGivenName', 'setGivenName'], 'familyName' => ['familyName', 'getFamilyName', 'setFamilyName']];
    }
}