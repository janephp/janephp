<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class TweetLookupResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet>
     */
    public array $data;
    /**
     * @var Expansions
     */
    public Expansions $includes;
    /**
     * @var list<GenericProblem>|list<InvalidRequestProblem>|list<ClientForbiddenProblem>|list<ResourceNotFoundProblem>|list<ResourceUnauthorizedProblem>|list<DisallowedResourceProblem>|list<UnsupportedAuthenticationProblem>|list<UsageCapExceededProblem>|list<ConnectionExceptionProblem>|list<ClientDisconnectedProblem>|list<OperationalDisconnectProblem>|list<RulesCapProblem>|list<InvalidRuleProblem>
     */
    public array $errors;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'includes' => 'includes', 'errors' => 'errors'];
    }
}