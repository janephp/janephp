<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class ProjectProposal
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string|null
     */
    public ?string $name;
    /**
     * @var GlobalEcoScore|null
     */
    public ?GlobalEcoScore $ecoScore;
}