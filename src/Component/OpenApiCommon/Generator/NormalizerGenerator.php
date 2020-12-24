<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\NormalizerGenerator as BaseNormalizerGenerator;
use Jane\Component\OpenApiCommon\Generator\Normalizer\DenormalizerGenerator as DenormalizerGeneratorTrait;
use Jane\Component\OpenApiCommon\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;

class NormalizerGenerator extends BaseNormalizerGenerator
{
    use DenormalizerGeneratorTrait;
    use NormalizerGeneratorTrait;
}
