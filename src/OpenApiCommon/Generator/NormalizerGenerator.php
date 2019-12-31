<?php

namespace Jane\OpenApiCommon\Generator;

use Jane\JsonSchema\Generator\NormalizerGenerator as BaseNormalizerGenerator;
use Jane\OpenApiCommon\Generator\Normalizer\DenormalizerGenerator as DenormalizerGeneratorTrait;
use Jane\OpenApiCommon\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;

class NormalizerGenerator extends BaseNormalizerGenerator
{
    use NormalizerGeneratorTrait;
    use DenormalizerGeneratorTrait;
}
