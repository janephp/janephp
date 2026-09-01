<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ArrayItemsValidation\Model;

use Jane\Component\OpenApi31\Tests\Expected\ArrayItemsValidation\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\ArrayItemsValidation\Runtime\AdditionalPropertiesInterface;
class ArrayItemsModel implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $uuidArray;
    /**
     * @var list<string>
     */
    public array $emailArray;
    /**
     * @var list<string>
     */
    public array $enumArray;
    /**
     * @var list<int>
     */
    public array $integerArray;
    /**
     * @var list<string>
     */
    public array $constrainedStringArray;
    public function definedProperties(): array
    {
        return ['uuidArray' => 'uuidArray', 'emailArray' => 'emailArray', 'enumArray' => 'enumArray', 'integerArray' => 'integerArray', 'constrainedStringArray' => 'constrainedStringArray'];
    }
}