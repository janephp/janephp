<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Schema2\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReferenceNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $ref = [];
        $ref['$ref'] = (string) $object->getReferenceUri();
        return $ref;
    }
    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof Reference;
    }
}