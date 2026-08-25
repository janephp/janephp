<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ProjectsColumnsCardsCardIdMovesPostResponse403ErrorsItem implements AdditionalPropertiesInterface
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
    protected $code;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $resource;
    /**
     * @var string
     */
    protected $field;
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }
    /**
     * @param string $resource
     *
     * @return self
     */
    public function setResource(string $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;
        return $this;
    }
    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['code' => ['code', 'getCode', 'setCode'], 'message' => ['message', 'getMessage', 'setMessage'], 'resource' => ['resource', 'getResource', 'setResource'], 'field' => ['field', 'getField', 'setField']];
    }
}