<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Discriminator\Model;

class Cat extends Pet
{
    /**
     * The measured skill for hunting
     *
     * @var string
     */
    public string $huntingSkill = 'lazy';
}