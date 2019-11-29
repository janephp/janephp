<?php

namespace Jane\OpenApi2\Generator;

use Jane\JsonSchema\Generator\NormalizerGenerator as BaseNormalizerGenerator;
use Jane\OpenApi2\Generator\Normalizer\DenormalizerGenerator as DenormalizerGeneratorTrait;
use Jane\OpenApi2\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;

class NormalizerGenerator extends BaseNormalizerGenerator
{
    use NormalizerGeneratorTrait;
    use DenormalizerGeneratorTrait;
}
