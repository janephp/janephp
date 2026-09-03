<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\AdditionalPropertiesInterface;
class DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteria implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Total device policy count
     *
     * @var int
     */
    public int $rawDataTotalCount;
    /**
     * Current page device policy count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates if there are more device policy after the currently displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first device policy returned out of the complete device policy list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
    /**
     * @var list<DomainDevicePolicyDomainDevicePolicyProfile>
     */
    public array $list;
    public function definedProperties(): array
    {
        return ['rawDataTotalCount' => 'rawDataTotalCount', 'totalCount' => 'totalCount', 'hasMore' => 'hasMore', 'firstIndex' => 'firstIndex', 'extra' => 'extra', 'list' => 'list'];
    }
}