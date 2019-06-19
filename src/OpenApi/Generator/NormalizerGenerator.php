<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\NormalizerGenerator as BaseNormalizerGenerator;
use Jane\OpenApi\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;
use Jane\OpenApi\Generator\Normalizer\DenormalizerGenerator as DenormalizerGeneratorTrait;

class NormalizerGenerator extends BaseNormalizerGenerator
{
    use NormalizerGeneratorTrait;
    use DenormalizerGeneratorTrait;
}
