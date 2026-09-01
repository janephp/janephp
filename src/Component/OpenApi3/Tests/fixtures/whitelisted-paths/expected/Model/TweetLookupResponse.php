<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
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