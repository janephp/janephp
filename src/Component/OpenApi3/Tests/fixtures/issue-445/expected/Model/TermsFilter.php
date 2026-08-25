<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TermsFilter extends FilterBase implements AdditionalPropertiesInterface
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
     * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
     * (i.e. personLayer.address.street).
     *
     * @var string
     */
    protected $field;
    /**
     * The list of values to be filtered on. At least one must match to return results.
     *
     * @var list<string>
     */
    protected $terms;
    /**
     * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
     * (i.e. personLayer.address.street).
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
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
    /**
     * The list of values to be filtered on. At least one must match to return results.
     *
     * @return list<string>
     */
    public function getTerms(): array
    {
        return $this->terms;
    }
    /**
     * The list of values to be filtered on. At least one must match to return results.
     *
     * @param list<string> $terms
     *
     * @return self
     */
    public function setTerms(array $terms): self
    {
        $this->initialized['terms'] = true;
        $this->terms = $terms;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['field' => ['field', 'getField', 'setField'], 'terms' => ['terms', 'getTerms', 'setTerms']];
    }
}