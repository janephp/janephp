<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class TweetSearchResponse implements AdditionalPropertiesInterface
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
     * @var list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet>
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
     * @var TweetSearchResponseMeta
     */
    protected $meta;
    /**
     * @return list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet> $data
     *
     * @return self
     */
    public function setData(array $data): self
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
    /**
     * @return TweetSearchResponseMeta
     */
    public function getMeta(): TweetSearchResponseMeta
    {
        return $this->meta;
    }
    /**
     * @param TweetSearchResponseMeta $meta
     *
     * @return self
     */
    public function setMeta(TweetSearchResponseMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'includes' => ['includes', 'getIncludes', 'setIncludes'], 'errors' => ['errors', 'getErrors', 'setErrors'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}