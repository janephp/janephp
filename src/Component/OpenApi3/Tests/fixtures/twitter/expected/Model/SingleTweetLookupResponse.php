<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SingleTweetLookupResponse implements AdditionalPropertiesInterface
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
     * @var CompactTweet|DefaultTweet|DetailedTweet
     */
    protected $data;
    /**
     * @var Expansions
     */
    protected $includes;
    /**
     * @var list<GenericProblem>|list<InvalidRequestProblem>|list<ClientForbiddenProblem>|list<ResourceNotFoundProblem>|list<ResourceUnauthorizedProblem>|list<DisallowedResourceProblem>|list<UnsupportedAuthenticationProblem>|list<UsageCapExceededProblem>|list<ConnectionExceptionProblem>|list<ClientDisconnectedProblem>|list<OperationalDisconnectProblem>|list<RulesCapProblem>|list<InvalidRuleProblem>
     */
    protected $errors;
    /**
     * @return CompactTweet|DefaultTweet|DetailedTweet
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @param CompactTweet|DefaultTweet|DetailedTweet $data
     *
     * @return self
     */
    public function setData($data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * @return Expansions
     */
    public function getIncludes(): Expansions
    {
        return $this->includes;
    }
    /**
     * @param Expansions $includes
     *
     * @return self
     */
    public function setIncludes(Expansions $includes): self
    {
        $this->initialized['includes'] = true;
        $this->includes = $includes;
        return $this;
    }
    /**
     * @return list<GenericProblem>|list<InvalidRequestProblem>|list<ClientForbiddenProblem>|list<ResourceNotFoundProblem>|list<ResourceUnauthorizedProblem>|list<DisallowedResourceProblem>|list<UnsupportedAuthenticationProblem>|list<UsageCapExceededProblem>|list<ConnectionExceptionProblem>|list<ClientDisconnectedProblem>|list<OperationalDisconnectProblem>|list<RulesCapProblem>|list<InvalidRuleProblem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * @param list<GenericProblem>|list<InvalidRequestProblem>|list<ClientForbiddenProblem>|list<ResourceNotFoundProblem>|list<ResourceUnauthorizedProblem>|list<DisallowedResourceProblem>|list<UnsupportedAuthenticationProblem>|list<UsageCapExceededProblem>|list<ConnectionExceptionProblem>|list<ClientDisconnectedProblem>|list<OperationalDisconnectProblem>|list<RulesCapProblem>|list<InvalidRuleProblem> $errors
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
        return ['data' => ['data', 'getData', 'setData'], 'includes' => ['includes', 'getIncludes', 'setIncludes'], 'errors' => ['errors', 'getErrors', 'setErrors']];
    }
}