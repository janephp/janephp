<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompletedFreshInvestigationSectionsItemAnyOf implements AdditionalPropertiesInterface
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
    protected $content;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var string
     */
    protected $creationDate;
    /**
     * @var string
     */
    protected $name;
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
    /**
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->creationDate;
    }
    /**
     * @param string $creationDate
     *
     * @return self
     */
    public function setCreationDate(string $creationDate): self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['content' => ['content', 'getContent', 'setContent'], 'contentType' => ['contentType', 'getContentType', 'setContentType'], 'creationDate' => ['creationDate', 'getCreationDate', 'setCreationDate'], 'name' => ['name', 'getName', 'setName']];
    }
}