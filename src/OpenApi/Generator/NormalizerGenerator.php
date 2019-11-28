<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\NormalizerGenerator as BaseNormalizerGenerator;
use Jane\OpenApi\Generator\Normalizer\DenormalizerGenerator as DenormalizerGeneratorTrait;
use Jane\OpenApi\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;

class NormalizerGenerator extends BaseNormalizerGenerator
{
    use NormalizerGeneratorTrait;
    use DenormalizerGeneratorTrait;
}
