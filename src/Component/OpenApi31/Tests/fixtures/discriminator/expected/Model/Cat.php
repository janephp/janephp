<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

class Cat extends Pet
{
    /**
     * The measured skill for hunting
     *
     * @var string
     */
    public string $huntingSkill = 'lazy';
    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['huntingSkill' => 'huntingSkill']);
    }
}