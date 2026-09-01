<?php

namespace Jane\Component\OpenApi3\Tests\Expected\DiscriminatorSnakeCase\Model;

class CatInSnakeCase extends Pet
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