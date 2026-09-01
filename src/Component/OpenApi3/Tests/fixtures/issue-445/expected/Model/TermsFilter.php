<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TermsFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
     * (i.e. personLayer.address.street).
     *
     * @var string
     */
    public string $field;
    /**
     * The list of values to be filtered on. At least one must match to return results.
     *
     * @var list<string>
     */
    public array $terms;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'terms' => 'terms'];
    }
}