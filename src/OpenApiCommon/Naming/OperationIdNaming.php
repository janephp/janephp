<?php

namespace Jane\OpenApiCommon\Naming;

use Jane\JsonSchema\Tools\InflectorTrait;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\Slugger\SluggerInterface;

class OperationIdNaming implements OperationNamingInterface
{
    use InflectorTrait;

    /** @var SluggerInterface */
    private $slugger;

    public function __construct()
    {
        $this->slugger = new AsciiSlugger();
    }

    public function getFunctionName(OperationGuess $operation): string
    {
        return $this->getInflector()->camelize($this->slugger->slug((string) $operation->getOperation()->getOperationId()));
    }

    public function getEndpointName(OperationGuess $operation): string
    {
        $operationId = (string) $operation->getOperation()->getOperationId();
        $operationId = $this->slugger->slug($operationId, '-');

        return $this->getInflector()->classify($operationId);
    }
}
