<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422 implements AdditionalPropertiesInterface
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
    protected $message;
    /**
     * @var list<OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem>
     */
    protected $errors;
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
     * @return list<OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * @param list<OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['message' => ['message', 'getMessage', 'setMessage'], 'errors' => ['errors', 'getErrors', 'setErrors']];
    }
}